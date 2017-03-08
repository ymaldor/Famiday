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
        $this->table('event');
    }
	
	public function add_event($eventname,$eventstart,$eventend,$participant,$summary,$last_modif,$frequence,$until)
	{
		$table = TableRegistry::get('event'); //nom de la table
        
        $query = $table->query();
        $query->insert(['eventname','eventstart','eventend','participant','summary','last_modif','frequence','until'])
              ->values([
					'eventname'=>$eventname,
					'eventstart'=>$eventstart,
					'eventend'=>$eventend,
					'participant'=>$participant,
					'summary'=>$summary,
					'last_modif'=>$last_modif,
					'frequence'=>$frequence,
					'until'=>$until])
			  ->execute();
	}
}



