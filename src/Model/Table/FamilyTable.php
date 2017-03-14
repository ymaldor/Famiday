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
	
	public function add_personne($nom,$prenom,$about,$Sexe,$Statut,$adress,$phone,$datebirth)
	{ 
		$table = TableRegistry::get('personne'); //nom de la table
        
        $query = $table->query();
        $query->insert(['nom', 'prenom', 'phone', 'adress'])
              ->values([
					'nom'=>$nom,
					'prenom'=>$prenom,
					'phone'=>$phone,
					'adress'=>$adress])
			  ->execute();
		
		/*$query->insert(['nom','to','message','datemessage','trashed','object'])
              ->values([
					'nom'=>$nom
					, $to, $message, $now, 0, $subject])
			  ->execute();*/
	}
	
	public function remove_personne($familyid, $idpersonne)
	{ 
		$bdd = ConnectionManager::get('default');
		$tmp = $bdd->execute("DELETE FROM member_of_family WHERE idpersonne=$idpersonne AND familyid=$familyid");
	}
}












