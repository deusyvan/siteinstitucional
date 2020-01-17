<?php 
namespace Controllers;

use \Core\Controller;

class ContatoController extends Controller{
    
    public function index(){
        $dados = array(
            'aviso'=>''
        );
        
        if (isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);
            
            //Corpo
            $para = "contato@dfsweb.com.br";
            $assunto = "Dúvida do Site";
            $mensagem = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;
            
            //Cabeçalho
            $cabecalho = 'From: contato@dfsweb.com.br'."\r\n".
                'Reply-To: '.$email."\r\n".
                'X-Mailer: PHP/'.phpversion();
            
            mail($para, $assunto, $mensagem, $cabecalho);
            
            $dados['aviso'] = "E-mail enviado com sucesso!";
            
        }
        
        $this->loadTemplate('contato', $dados);
    }
}
