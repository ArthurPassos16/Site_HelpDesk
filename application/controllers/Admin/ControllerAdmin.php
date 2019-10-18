<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class ControllerAdmin extends CI_Controller{

	public function __construct(){
		parent::__construct();
	} 
	public function index(){
		$this->load->view('Admin/Login');
	} 
	public function login(){ 
		$usuario=$this->input->post('usuario');
		$senha=$this->input->post('senha');
		$this->db->where('usuario',$usuario);
		$this->db->where('senha',$senha);
		$this->db->where('ativo',1);
		$admin = $this->db->get('administradores')->result();		
		if(count($admin)===1){
			$dados = array(
               'usuario'  => $admin[0]->usuario,
               'logado' => TRUE
            );
			$this->session->set_userdata($dados);
			redirect(base_url()."index.php/Admin/AdminChamado");
		}else{
			echo "<script>alert('Login inválido!');</script>";
			$this->load->view('Admin/Login');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."index.php/Admin/ControllerAdmin");
	}
}
?>