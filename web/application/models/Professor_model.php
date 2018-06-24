<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Professor_model extends CI_Model
{

    // not needed at the moment.
    // public $username;
    // public $first_name;
    // public $last_name;
    // public $phone;
    // public $password;
    // public $is_admin;

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }

    public function getCurrentProfessor()
    {
        $this->load->model('user_model');
        $user = $this->user_model->getCurrentUser();

        $this->db->select('*');
        $this->db->from('professors_view');
        $this->db->where('user_id', $user['user_id']);
        $query = $this->db->get();

        $result = $query->row();
        if (!isset($result)) {
            throw new Exception('Invalid user id. Professor doesnt exist.');
        }
        return $result;
    }

}