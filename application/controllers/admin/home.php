<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); 

class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->load->view('admin/html_header');
        $this->load->view('admin/login');
        $this->load->view('admin/html_footer');        
    }
    
    public function login() {
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');
        $this->db->where('usuario',$usuario);
        $this->db->where('senha',$senha);
        $this->db->where('ativo',1);
        $usuario = $this->db->get('usuarios')->result();
        if (count($usuario) === 1) {
            $dados = array('usuario' => $usuario[0]->usuario, 'logado' => TRUE);
            $this->session->set_userdata($dados);
            redirect("admin/categorias");
        }
        else {
        redirect("admin/home/index");
        }           
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect("admin/home/index");
    }
        
}
