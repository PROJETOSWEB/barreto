<?php

/**
 * Description of Admin
 *
 * @author Karol
 */
class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function login() {

        $query = $this->db->get_where("usuario", array(
            'login' => $this->input->post('usuario'),
            'senha' => $this->input->post('password')
        ));

        if ($query->num_rows() > 0) {

            $row = $query->row();
            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('login', $row->admin_id);
            $this->session->set_userdata('usuario', $row->nome);

            redirect(base_url() . 'banner/banner', 'refresh');

            return TRUE;
        } else {
            $this->session->set_flashdata('flash_message', 'login_failed');
            redirect(base_url() . 'login', 'refresh');
            return FALSE;
        }
    }

}
