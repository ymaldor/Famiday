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
    
	public function addfamily($p) 
	{
		$tfam = TableRegistry::get('family'); //nom de la table
        $id=md5(uniqid(rand(),true));
		
        $fam=$tfam->newEntity();
		$fam->id=$id;
		$fam->familyname=$p['nom'];
		
		$tfam->save($fam);
		return $id;
	}
	public function addpersonne($p,$idfam,$iduser,$idlog)
	{ 
		if($iduser==false)
		{
			$iduser=null;
		}
		if($idfam==false)
		{
			$table=TableRegistry::get('personne');
			$a=$table->find()->select(['idfamily'])->where(['userid'=>$idlog])->toArray();
			$idfam=$a[0]['idfamily'];
		}
		$table = TableRegistry::get('personne'); //nom de la table
        $id=md5(uniqid(rand(),true));
		
		//$date=$p['datebirth']['year'].'-'.$p['datebirth']['month'].'-'.$p['datebirth']['day'];
		$color = ["#ac725e", "#d06b64", "#f83a22", "#fa573c", "#ff7537", "#ffad46", "#42d692", "#16a765", "#7bd148", "#b3dc6c", "#fbe983", "#fad165", "#92e1c0"];
		
        $tocard=$table->newEntity();
		$tocard->id=$id;
		$tocard->userid=$iduser;
		$tocard->idfamily=$idfam;
		$tocard->prenom=$p['prenom'];
		$tocard->nom=$p['nom'];
		$tocard->adress=$p['adress'];
		$tocard->phone=$p['phone'];
		//$tocard->datebirth=$date;
		$tocard->about=$p['about'];
		$tocard->sexe=$p['Sexe'];
		$tocard->statut=$p['Statut'];
		$tocard->color=$color[rand(0, count($color)-1)];
		$tocard->responsable=$p['Responsable'];
		$table->save($tocard);
	}
		
	public function getfamily($id)
	{
		$table=TableRegistry::get('personne');
		$idfam=$table->find()->select('idfamily')->where(['userid'=>$id])->toArray()[0]['idfamily'];
		$table=TableRegistry::get('family');
		$family=$table->find()->where(['id'=>$idfam])->toArray()[0];
		
		$table=TableRegistry::get('personne');
		$personnes=$table->find()->where(['idfamily'=>$idfam])->toArray();
		
		$string[0]=$family;
		$string[1]=$personnes;
		return $string;
	}
	
	public function removepersonne($idpersonne)
	 { 
		$table=TableRegistry::get('personne');
		//if($idpersonne==null)return false;
		$a=$table->get($idpersonne);
		if($a->userid==null)
		{
			$table->delete($a);
		}
	}
	function isfamily($id)
	{
		$bdd = TableRegistry::get('personne');
		$a=$bdd->find()->where(['userid'=>$id])->count();
		if(!$a)return false;
		return true;
	}
}












