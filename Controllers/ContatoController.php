<?php 
namespace Controllers;

use \Core\Controller;

class ContatoController extends Controller{
    
    public function index(){
        $dados = array();
        
        
        $this->loadTemplate('contato', $dados);
    }
}
