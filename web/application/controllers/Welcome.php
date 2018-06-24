<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        try {
            $user = $this->user_model->getCurrentUser();

            // based on the role, redirect to the right dashboard
            if ($user['is_admin']) {
                redirect(base_url('/professor'));
            } else if ($user['is_professor']) {
                redirect(base_url('/professor'));
            } else if ($user['is_student']) {
                redirect(base_url('/professor'));
            } else if ($user['is_librarian']) {
                redirect(base_url('/professor'));
            } else if ($user['is_manager']) {
                redirect(base_url('/professor'));
            }

            // don't know what the user is
            print_r($user);
        } catch (Exception $ex) {
            redirect(base_url('/signin'));
        }
    }

}
