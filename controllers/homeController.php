<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$contatos = new banco();
		$dados['lista'] = $contatos->getAll();

		$this->loadTemplate('home', $dados);
	}

}