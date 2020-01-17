<?php 
namespace Controllers;

use \Core\Controller;

class ContatoController extends Controller{
    
    public function index(){
        $dados = array();
        
        if (isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);
            
            $para = "contato@dfsweb.com.br";
            $assunto = "Dúvida do Site";
            $mensagem = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;
        }
        
        $this->loadTemplate('contato', $dados);
    }
}
