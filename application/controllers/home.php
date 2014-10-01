<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author Luis
 */
if (!defined('BASEPATH')) exit('No direct script acess allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        
        $data['categorias'] = $this->db->get('categorias')->result();
        $this->db->order_by('id_receita','random');
        $data2['chamadas'] = $this->db->get('receitas',4)->result();
        
        $this->load->view('html_header');
        $this->load->view('cabecalho');
        $this->load->view('menu_categorias', $data);
        $this->load->view('conteudo', $data2);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}
