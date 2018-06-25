<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Student_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function getPostGraduates($filterId = '')
    {
        $sql = '
            SELECT * FROM students_view
            WHERE level = "postgraduate" AND student_id LIKE ?
        ';

        return $this->db->query($sql, array('%' . $filterId . '%'))->result();
    }

}
