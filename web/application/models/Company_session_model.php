<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Company_session_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    // to get just the company sessions available for current user
    public function getCompanySessions($managerId)
    {
        $sql = '
            SELECT * FROM company_sessions_view
            WHERE manager_id = ?
        ';
        return $this->db->query($sql, array($managerId))->result();

    }

    // to get all the company sessions
    public function adminGetCompanySessions()
    {

    }
}
