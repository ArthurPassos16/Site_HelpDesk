<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
 
class ClienteChamado extends CI_Controller{
    public function __construct(){
		parent::__construct();
		/*if($this->session->userdata('session_id')==null || $this->session->userdata('logado')==null){
			redirect(base_url()."index.php/Cliente/ControllerCliente");
		}*/
	}  
	public function index(){
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$dados['clientes'] = $this->db->get('clientes')->result();
		$this->load->view('Cliente/Menu');
		$this->load->view('Cliente/Perfil',$dados);
	}
	public function abrirChamado(){
		$this->load->view('Cliente/Menu');
		$this->load->view('Cliente/AbrirChamado');
	} 
	public function registrarChamado(){
		$this->db->order_by(date("s"),'random');
        $this->db->limit(1);
        $admin=$this->db->get("administradores")->result();
		date_default_timezone_set('America/Sao_Paulo');

        $dados['chamado'] = $this->input->post('chamado');
		$dados['data'] = date("Y-m-d");
		$dados['hora'] = date("H:i");
		$dados['fk_cliente'] = $this->session->userdata('usuario');
		$dados['fk_administrador']=$admin[0]->usuario;
		$this->db->insert('chamados',$dados);

		echo "<script>alert('Chamado enviado!');</script>";
		$this->load->view('Cliente/Menu');
		$this->load->view('Cliente/AbrirChamado');
	}
	public function verChamados(){
		$usuario=$this->session->userdata('usuario');
		$this ->db->select('*'); 
		$this ->db-> from ('chamados'); 
		$this ->db->join('administradores', 'administradores.usuario = chamados.fk_administrador'); 
		$dados['chamados']  =  $this->db->get()->result();
		$this->load->view('Cliente/Menu');
		$this->load->view('Cliente/verChamados', $dados);
	}
	public function verConversa(){
		$dados['usuario']=$this->session->userdata('chamado');
		$this->load->view('Cliente/Menu');
		$this->load->view('Cliente/Conversa',$dados);
	}
	public function alterarPerfil(){
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$dados['clientes'] = $this->db->get('clientes')->result();
		$this->load->view('Cliente/Menu');
		$this->load->view('Cliente/alterarPerfil', $dados);
	}
	public function salvarAlteracao(){
		$dados['nome']=$this->input->post('nome');
		$dados['usuario']=$this->input->post('usuario');
		$dados['senha']=$this->input->post('senha');
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$this->db->update('clientes',$dados);
		redirect(base_url()."index.php/Cliente/ClienteChamado/index");
	}
	public function excluirPerfil(){
		$dados['ativo']=0;
		$this->db->where('usuario',$this->session->userdata('usuario'));
		$this->db->update('clientes',$dados);
		redirect(base_url()."index.php/Cliente/ControllerCliente/index");
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."index.php/Cliente/ControllerCliente/index");
	}
}
?>