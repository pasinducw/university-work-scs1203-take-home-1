<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Text_book_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    // get textbooks used by professor
    public function getTextBooks($professorId, $titleFilter)
    {
        $sql = '
            SELECT * FROM textbooks_view
            WHERE professor_id = ? AND title LIKE ?
        ';
        $query = $this->db->query($sql, array($professorId, '%'.$titleFilter.'%'));
        return $query->result();
    }

    public function addTextBookForCourse($professorId, $courseId, $bookId)
    {
        $sql = '
            INSERT INTO textbooks (professor_id, course_id, book_id)
            VALUES (?, ?, ?)
        ';
        $query = $this->db->query($sql, array($professorId, $courseId, $bookId));
    }

    public function removeTextBookFromCourse($professorId, $courseId)
    {
        $sql = '
            DELETE FROM textbooks
            WHERE professor_id = ? AND course_id = ?
        ';

        $query = $this->db->query($sql, array($professorId, $courseId));
    }
}
