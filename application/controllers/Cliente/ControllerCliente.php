<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class ControllerCliente extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}  
	public function index(){
		$this->load->view('Cliente/Login');
	} 
	public function exibirCadastro(){
		$this->load->view('Cliente/cadastrarCliente');
	} 
	public function login(){ 
		$usuario=$this->input->post('usuario');
		$senha=$this->input->post('senha');
		$this->db->where('usuario',$usuario);
		$this->db->where('senha',$senha);
		$this->db->where('ativo',1);
		$cliente = $this->db->get('clientes')->result();		
		if(count($cliente)===1){
			$dados = array(
               'usuario'  => $cliente[0]->usuario,
               'logado' => TRUE
            );
			$this->session->set_userdata($dados);
			redirect(base_url()."index.php/Cliente/ClienteChamado");
		}else{
			echo "<script>alert('Login inválido!');</script>";
			$this->load->view('Cliente/Login');
		}
		
	}
	public function cadastrar(){
		$dados['nome']=$this->input->post('nome');
		$dados['usuario']=$this->input->post('usuario');
		$dados['ativo']=1;
		$senha1=$this->input->post('senha1');
		$senha2=$this->input->post('senha2');
		if(strcmp($senha1, $senha2)==0){
		 	$dados['senha'] = $senha1;
		 	$this->db->insert('clientes',$dados);
		 	echo "<script>alert('Cadastro salvo com sucesso!');</script>";
		 	$this->load->view('Cliente/Login');
		}else{
			echo "<script>alert('As senhas não coincidem!');</script>";
			$this->load->view('Cliente/cadastrarCliente');
		}
		
	}
}
?>