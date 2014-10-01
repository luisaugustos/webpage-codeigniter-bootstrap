<?php if (!defined('BASEPATH')) exit('No direct script acess allowed');

class Categorias extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('session_id') ||
            !$this->session->userdata('logado')) {
        redirect("admin/home");
        }        
    }
}
