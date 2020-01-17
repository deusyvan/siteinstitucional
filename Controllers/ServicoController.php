<?php 
namespace Controllers;

use \Core\Controller;

class ServicoController extends Controller{
    
    public function index(){
        $dados = array();
        
        $this->loadTemplate('servico', $dados);
    }
}
