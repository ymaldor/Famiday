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
	
	public function recup_color($idpersonne)
	{
		$bdd = ConnectionManager::get('default');
		$req = $bdd->prepare('SELECT color FROM personne WHERE id=:id');
		$req->execute(array('id' => $idpersonne));
		
		return $req->fetch();
	}
	
	public function recup_event($idpersonne)
	{
		$bdd = ConnectionManager::get('default');
		$tmp = $bdd->execute('SELECT * FROM event')->fetchAll();
		$color = $this->recup_color($idpersonne)[0];
		$tmp[count($tmp)] = $color;
		
		$result=[];
		for($i=0;$i<count($tmp);$i++)
		{
			$str=explode(",", $tmp[$i][5]);
			$tmp[$i][count($tmp[$i])] = $color;
			
			for($j=0;$j<count($str);$j++)
			{
				if($str[$j]==$idpersonne)
				{
					$result[count($result)]=$tmp[$i];
					break;
				}
			}
		}
		
		return $result;
	}
	
	public function suppr_event($eventid)
	{
		$bdd = ConnectionManager::get('default');
		$tmp = $bdd->execute("DELETE FROM event WHERE id=$eventid");
	}
	
	public function recup_family($id)
	{
		$bdd = ConnectionManager::get('default');
		$idfamille=$bdd->execute('
			SELECT family.id FROM user
            INNER JOIN personne AS p ON user.id= p.userid
            INNER JOIN family ON p.idfamily = family.id
            WHERE user.id="'.$id.'"')->fetch()[0];
		
		$famille=$bdd->execute('SELECT id,nom,prenom FROM personne WHERE idfamily="'.$idfamille.'"')->fetchAll();
		
		return $famille;
		
		//$table=  TableRegistry::get('family');
		//$a=$table->find()->where(['id' => $id])->count();
		//if(!$a) return false;
	}
	
	public function is_family($id, $idpersonne)
	{
		$famille = $this->recup_family($id);
		$result = false;
		
		for($i=0;$i<count($famille);$i++)
		{
			if($famille[$i][0]==$idpersonne)
			{
				$result = true;
				break;
			}
		}
		
		return $result;
	}
}











