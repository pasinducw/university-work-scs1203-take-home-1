<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Course_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    // gets all courses offered by the department
    public function getCourses($departmentId)
    {
        $sql = '
            SELECT * FROM courses
            WHERE department_id = ?
        ';
        return $this->db->query($sql, array($departmentId))->result();

    }

}
