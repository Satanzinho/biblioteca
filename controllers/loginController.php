<?php
class loginController extends Controller {

    public function index() {
        $data = array(
            'msg' => ''
        );
        $usuarios = new Usuarios();
        if(!empty($_POST['email']) && $_POST['senha']){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            if($usuarios->validarCadastro($email, $senha)){
                header("Location: ".BASE_URL);
                exit;
            }else{
                $data['msg'] = 'Email e/ou senha errados!';
            }
        }

        $this->loadTemplate('login', $data);
    }
    public function cadastro(){
    	$data = array(
    		'msg' => ''
    	);
    	$usuarios = new Usuarios();
    	if(!empty($_POST['nome']) && !empty($_POST['email']) && $_POST['senha']){
    		$nome = addslashes($_POST['nome']);
    		$email = addslashes($_POST['email']);
    		$senha = md5($_POST['senha']);
    		if($usuarios->cadastrarUsuarios($nome, $email, $senha)){
    			$data['msg'] = 'Usuário cadastrado, logue agora!';
    		}else{
                $data['msg'] = 'Esse email já está cadastrado no sistema';
            }
    	}
    	$this->loadTemplate('cadastro', $data);
    }
    public function minhaConta(){
        $data = array();
        if(empty($_SESSION['id'])){
            header("Location: ".BASE_URL."login");
            exit;
        }
        $usuarios = new Usuarios();
        $id = $_SESSION['id'];

        $data['nome'] = $usuarios->getNome($id);

        $this->loadTemplate('minhaConta', $data);
    }
    public function sair(){
        unset($_SESSION['id']);
        header("Location: ".BASE_URL);
        exit;
    }
}