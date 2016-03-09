<?php

/**
 * Description of Home
 *
 * @author Karol Oliveira
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        $page_data['page_title'] = 'teste';
        $page_data['page_name'] = 'home';
        $this->load->view('index', $page_data);
                
    }
}
