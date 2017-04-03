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
	
	public function remove_personne($idfamily, $userid)
	{ 
		$bdd = ConnectionManager::get('personne');
		$tmp = $bdd->execute("DELETE FROM personne WHERE idpersonne=$userid AND familyid=$idfamily");
	}
}












