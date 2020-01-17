<?php 
namespace Controllers;

use \Core\Controller;
use \Models\Portfolio;

class PortfolioController extends Controller{
    
    public function index(){
        $dados = array();
        
        $p = new Portfolio();
        $dados['portfolio'] = $p->getTrabalhos();
        
        $this->loadTemplate('portfolio', $dados);
    }
}
