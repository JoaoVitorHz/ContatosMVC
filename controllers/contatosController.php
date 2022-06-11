<?php
class contatosController extends controller {

	public function index() {}

	public function add() {
		$dados = array(
			'error' => ''
		);

		if(!empty($_GET['error'])) {
			$dados['error'] = $_GET['error'];
		}

		$this->loadTemplate('cadastro', $dados);
	}

	public function add_save() {
		if(!empty($_POST['email1'])) {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $telefone1 = $_POST['telefone1'];
            $telefone2 = $_POST['telefone2'];
            $email1 = $_POST['email1'];
            $email2 = $_POST['email2'];
            $cpf = $_POST['cpf'];

			$contatos = new banco();
			if($contatos->cadastro($nome, $sobrenome, $telefone1, $telefone2, $email1, $email2, $cpf)) {
				header("Location: ".BASE_URL);
			} else {
				header("Location: ".BASE_URL.'contatos/add?error=exist');
			}			
		} else {
			header("Location: ".BASE_URL.'contatos/cadastro');
		}
	}

	public function edit($id) {
		// 1º passo: pegar as informações do contato pelo ID
		// 2º passo: carregar o formulário, preenchido.
		// 3º passo: receber os dados do form e editar.
		$dados = array();

		if(!empty($id)) {
			$contatos = new banco();

			if(!empty($_POST['nome'])) {
				$nome = $_POST['nome'];
				$sobrenome = $_POST['sobrenome'];
				$email1= $_POST['email1'];
				$email2 = $_POST['email2'];
				$telefone1 = $_POST['telefone1'];
				$telefone2 = $_POST['telefone2'];
				$cpf = $_POST['cpf'];

				$contatos->editar($id, $nome, $sobrenome, $telefone1, $telefone2, $email1, $email2, $cpf);
			} else {
				$dados['info'] = $contatos->getInfo($id);

				if(isset($dados['info']['id'])) {
					$this->loadTemplate('editar', $dados);
					exit;
				}
			}
		}

		header("Location: ".BASE_URL);
	}

	public function del($id) {
		if(!empty($id)) {
			$contatos = new banco();
			$contatos->excluir($id);
		}

		header("Location: ".BASE_URL);
	}


}



















