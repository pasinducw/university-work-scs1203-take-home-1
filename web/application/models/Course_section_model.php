<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Course_section_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }

    // returns still unassigned course sections
    public function getAvailableCourseSections($departmentId, $courseName = '')
    {
        $sql = '
        SELECT
            course.course_id as course_id,
            department.name as department, course.name as name,
            section.semester as semester, section.year as year,
            course.credit_hours as credit_hours, section.section_id as section_id

        FROM departments as department

        INNER JOIN courses as course ON (course.department_id = department.department_id AND course.name LIKE ?)
        INNER JOIN sections as section ON (section.course_id = course.course_id AND section.professor_id IS NULL)

        WHERE department.department_id = ?
        ';

        $query = $this->db->query($sql, array('%' . $courseName . '%', $departmentId));
        return $query->result();
    }

    // returns course sections assigned to professor
    public function getAssignedCourseSections($professorId, $departmentId)
    {
        $sql = '
        SELECT
            course.course_id as course_id,
            department.name as department, course.name as name,
            section.semester as semester, section.year as year,
            course.credit_hours as credit_hours, section.section_id as section_id

        FROM departments as department

        INNER JOIN courses as course ON (course.department_id = department.department_id)
        INNER JOIN sections as section ON (section.course_id = course.course_id AND section.professor_id = ?)

        WHERE department.department_id = ?
        ';

        $query = $this->db->query($sql, array($professorId, $departmentId));
        return $query->result();
    }

    // assigns course section to self
    public function assignCourseSection($professor_id, $course_id, $section_id, $semester, $year)
    {
        $sql = '
            UPDATE sections
            SET professor_id = ?
            WHERE course_id = ? AND section_id = ? AND semester = ? AND year = ?
        ';

        $this->db->query($sql, array($professor_id, $course_id, $section_id, $semester, $year));
    }

    // unassign course section from self
    public function unassignCourseSection($professor_id, $course_id, $section_id, $semester, $year)
    {
        $sql = '
            UPDATE sections
            SET professor_id = NULL
            WHERE professor_id = ? AND course_id = ? AND section_id = ? AND semester = ? AND year = ?
        ';

        $this->db->query($sql, array($professor_id, $course_id, $section_id, $semester, $year));
    }

}
