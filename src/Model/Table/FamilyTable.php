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
	
	public function add_personne($nom,$prenom,$adress,$phone,$datebirth, $about,$Sexe,$Statut,$responsable)
	{ 
		$table = TableRegistry::get('personne'); //nom de la table
        $id=md5(uniqid(rand(),true));
		
		
		
		
        $query = $table->query();
        $query->insert(['nom', 'prenom', 'adress', 'phone','datebirth','about', 'sexe','statut','responsable'])
              ->values([
					'nom'=>$nom,
					'prenom'=>$prenom,
					'adress'=>$adress,
					'phone'=>$phone,
					'datebirth'=>$datebirth,
					'about'=>$about,
					'sexe'=>$Sexe,
					'statut'=>$statut,
					'responsable'=>$responsable
					])
			  ->execute();
	
	
	
	
	
	$members= TableRegistry::get('personne');
	$family= TableRegistry::get('family');
        $a=$family->find()->where(['id'=>$familyid])->count();
        $b=$members->find()->where(['id'=>$id])->count();
        if(($a*$b)!=1)return false;
        
        $message= TableRegistry::get('members_of_family');
        
        $newBind=$message->newEntity();
        $newBind->idpersonne=$id;
        $newBind->familyid=$familyid;
        $newBind->responsible=boolresp;
        $message->save($newBind);	
	
	}
	
	public function remove_personne($familyid, $idpersonne)
	{ 
		$bdd = ConnectionManager::get('default');
		$tmp = $bdd->execute("DELETE FROM member_of_family WHERE idpersonne=$idpersonne AND familyid=$familyid");
	}
}












