<?php 
namespace Controllers;

use \Core\Controller;

class SobreController extends Controller{
    
    public function index(){
        $dados = array();
        
        $this->loadTemplate('sobre', $dados);
    }
}
