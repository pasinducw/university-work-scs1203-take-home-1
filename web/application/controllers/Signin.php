<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        try {
            $this->user_model->getCurrentUser();
            redirect(base_url('/welcome'));
        } catch (Exception $ex) {
            // don't do anything
            // user has not logged in
        }

        $data = array();

        $this->form_validation->set_rules('login-user-name', 'Username', 'required');
        $this->form_validation->set_rules('login-user-password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            $username = $this->input->post('login-user-name');
            $password = $this->input->post('login-user-password');

            $result = $this->user_model->login($username, $password);
            if ($result) {
                redirect(base_url('/'));
            } else {
                $data['signin_error'] = 'Incorrect username and password combination.';
            }
        }

        $this->load->view('templates/header');
        $this->load->view('pages/signin/signin', $data);
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->user_model->logout();
        redirect(base_url('/'));
    }

}
