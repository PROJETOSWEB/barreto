<?php

/**
 * Description of Home
 *
 * @author Karol Oliveira
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function index() {

        $page_data['page_title'] = 'BARRETO empreendimentos';
        $page_data['page_name'] = 'home';
        $this->load->view('index', $page_data);
    }

    public function barreto() {

        $page_data['page_title'] = 'BARRETO empreendimentos';
        $page_data['page_name'] = 'barreto';
        $this->load->view('index', $page_data);
    }

    public function precoCusto() {

        $page_data['page_title'] = 'BARRETO empreendimentos';
        $page_data['page_name'] = 'home';
        $this->load->view('index', $page_data);
    }

    public function empreendimentos() {

        $page_data['page_title'] = 'BARRETO empreendimentos';
        $page_data['page_name'] = 'home';
        $this->load->view('index', $page_data);
    }

    public function contato() {

        $page_data['page_title'] = 'BARRETO empreendimentos';
        $page_data['page_name'] = 'contato';
        $this->load->view('index', $page_data);
    }

}
