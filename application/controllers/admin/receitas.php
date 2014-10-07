<?php

if (!defined('BASEPATH'))
    exit('No direct script acess allowed');

class Receitas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('session_id') || !$this->session->userdata('logado')) {
            redirect("admin/home");
        }
    }

    public function index() {
        $this->load->library('table');
        $data['categorias'] = $this->db->get('categorias')->result();
        $data['receitas'] = $this->db->get('receitas')->result();
        $this->load->view('admin/html_header');
        $this->load->view('admin/menu');
        $this->load->view('admin/init-body');        
        $this->load->view('admin/receitas', $data);
        $this->load->view('admin/html_footer');
    }

}
