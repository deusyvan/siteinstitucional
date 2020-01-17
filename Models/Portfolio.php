<?php 
namespace Models;

use \Core\Model;
use PDO;

class Portfolio extends Model{
    public function getTrabalhos($n = ''){
        $array = array();
        
        $sql = "SELECT * FROM portfolio ";
        if(!empty($n)){
            $sql .= "LIMIT ".$n;
        }
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $array;
    }
}