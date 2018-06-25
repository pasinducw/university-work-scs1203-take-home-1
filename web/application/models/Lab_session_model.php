<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Lab_session_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    // returns lab sessions available for a professor
    public function getLabSessionsOfProfessor($departmentId, $professorId)
    {
        $sql = '
          SELECT *
          FROM lab_sessions_view
          WHERE department_id = ? AND professor_id = ?
        ';

        $query = $this->db->query($sql, array($departmentId, $professorId));
        return $query->result();
    }

    public function createLabSession($professorId, $courseId, $sectionId, $semester,
        $year, $topic, $startTime, $endTime, $location) {

        $sql = '
          INSERT INTO lab_sessions
            (course_id, section_id, semester, year, topic, start_time, end_time, location)
          VALUES
            (?, ?, ?, ?, ?, ?, ?, ?)
        ';

        $query = $this->db->query($sql,
            array($courseId, $sectionId, $semester, $year, $topic, $startTime, $endTime, $location));
    }

    public function removeLabSession($professorId, $courseId, $sectionId, $semester, $year, $topic)
    {

        $sql = '
          DELETE FROM lab_sessions
          WHERE course_id = ? AND section_id = ? AND semester = ? AND year = ? AND topic = ?
        ';

        $query = $this->db->query($sql, array($courseId, $sectionId, $semester, $year, $topic));
    }

    public function setConductorForSession($courseId,
        $sectionId, $semester, $year, $topic, $studentId) {
        $sql = '
            UPDATE lab_sessions 
            SET conductor_id = ?
            WHERE course_id = ? AND section_id = ? AND semester = ? AND year = ? AND topic = ? 
        ';

        $this->db->query($sql, array($studentId, $courseId, $sectionId, $semester, $year, $topic));
    }

}
