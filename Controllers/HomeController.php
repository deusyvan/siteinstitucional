<?php 
namespace Controllers;

use \Core\Controller;
use Models\Portfolio;

class HomeController extends Controller{
    
    public function index(){
        $dados = array();
        
        $p = new Portfolio();
        $dados['portfolio'] = $p->getTrabalhos(8);
        
        $this->loadTemplate('home', $dados);
    }
}
