<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\Time;
use Cake\I18n\FrozenTime;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class CalendarTable extends Table{
    
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
	}
}



