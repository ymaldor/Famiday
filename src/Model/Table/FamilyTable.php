<?php
/* family user devient id personne dans bdd*/
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\Time;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class FamilyTable extends Table{
    
    public function initialize(array $config)
    {
        $this->table('personne');
    }
	
	public function addpersonne($p,$id)
	{ 
		$table=TableRegistry::get('family');
		$a=$table->find()->select('id')->where(['userid'=>$id]);
		//if(count($a))return false;
		$a='uogoiiuubuo';
		$table = TableRegistry::get('personne'); //nom de la table
        $id=md5(uniqid(rand(),true));
		$date=$p['datebirth']['year'].'-'.$p['datebirth']['month'].'-'.$p['datebirth']['day'];
        $tocard=$table->newEntity();
		$tocard->id=$id;
		$tocard->idfamily=$a;
		$tocard->prenom=$p['prenom'];
		$tocard->nom=$p['nom'];
		$tocard->adress=$p['adress'];
		$tocard->phone=$p['phone'];
		$tocard->datebirth=$date;
		$tocard->about=$p['about'];
		$tocard->Sexe=$p['Sexe'];
		$tocard->Statut=$p['Statut'];
		$tocard->Responsable=$p['Responsable'];
		
		
		$table->save($tocard);
	
	
	}
	
	
	public function addfamily($familyname,$id) 
	{
	$table = TableRegistry::get('family'); //nom de la table
        $id=md5(uniqid(rand(),true));
		
        $tocard=$table->newEntity();
		$tocard->id=$id;
		$tocard->familyname=$familyname['name'];
		
		$table->save($tocard);
		
	
	
	}
	
	
	public function getfamily($id)
	{
		$table=TableRegistry::get('personne');
		$idfam=$table->find()->where(['id'=>$id]);
		$table=TableRegistry::get('family');
		$family=$table->find()->where(['id'=>$idfam]);
		
		$table=TableRegistry::get('personne');
		$personnes=$table->find()->where(['idfamily'=>$idfam]);
		
		$string[0]=$family;
		$string[1]=$personnes;
		return $string;
	}
	
	
	public function removepersonne($idfamily, $userid)
	{ 
		$bdd = TableRegistry::get('personne');
		$bdd->delete($id);
	}
	function isfamily($id)
	{
		$bdd = TableRegistry::get('personne');
		$a=$bdd->find()->where(['userid'=>$id])->count();
		if(!$a)return false;
		return true;
	}
}












