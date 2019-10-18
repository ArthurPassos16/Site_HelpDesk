<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class AdminChamado extends CI_Controller{
    public function __construct(){	
    	parent::__construct();
		/*if($this->session->userdata('session_id')==null || $this->session->userdata('logado')==null){
			redirect(base_url()."index.php/Admin/ControllerAdmin");
		}*/
	}
	public function index(){
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$dados['admins'] = $this->db->get('administradores')->result();
		$this->load->view('Admin/Menu');
		$this->load->view('Admin/Perfil', $dados);
	}
	public function exibirCadastro(){
		$this->load->view('Admin/Menu');
		$this->load->view('Admin/CadastrarAdmin');
	} 
	public function cadastrarAdmin(){
		$dados['nome']=$this->input->post('nome');
		$dados['usuario']=$this->input->post('usuario');
		$dados['ativo']=1;
		$senha1=$this->input->post('senha1');
		$senha2=$this->input->post('senha2');
		if(strcmp($senha1, $senha2)==0){
		 	$dados['senha'] = $senha1;
		 	$this->db->insert('administradores',$dados);
		 	echo "<script>alert('Cadastro salvo com sucesso!');</script>";
		 	$this->load->view('MenuAdmin');
		}else{
			echo "<script>alert('As senhas não coincidem!');</script>";
			$this->load->view('CadastrarAdmin');
		}
	}
	public function verConversa(){
		
	}
	public function alterarPerfil(){
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$dados['admins'] = $this->db->get('administradores')->result();
		$this->load->view('Admin/Menu');
		$this->load->view('Admin/alterarPerfil', $dados);
	}
	public function salvarAlteracao(){
		$dados['nome']=$this->input->post('nome');
		$dados['usuario']=$this->input->post('usuario');
		$dados['senha']=$this->input->post('senha');
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$this->db->update('administradores',$dados);
		redirect(base_url()."index.php/Admin/AdminChamado/index");
	}
	public function excluirPerfil(){
		$dados['ativo']=0;
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$this->db->update('administradores',$dados);
		redirect(base_url()."index.php/Admin/ControllerAdmin/index");
	}
}
?>