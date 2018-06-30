<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('getNavigationEntries')) {
    function getNavigationEntries($role = 'admin')
    {
        switch ($role) {
            case 'admin':
                return navigation_getAdminNavs();
            case 'professor':
                return navigation_getProfessorNavs();
            case 'student':
                return navigation_getStudentNavs();
            case 'librarian':
                return navigation_getLibrarianNavs();
            case 'manager':
                return navigation_getManagerNavs();
        }
    }

    function navigation_getAdminNavs()
    {
        $entries = array(
            'departments' => array(
                'name' => 'Departments',
                'url' => base_url('admin/departments'),
                'icon' => 'home',
            ),
            'departmentsHeads' => array(
                'name' => 'Department Heads',
                'url' => base_url('admin/departmentsHeads'),
                'icon' => 'star',
            ),
            'professors' => array(
                'name' => 'Professors',
                'url' => base_url('admin/professors'),
                'icon' => 'feather',
            ),
            'students' => array(
                'name' => 'Students',
                'url' => base_url('admin/students'),
                'icon' => 'github',
            ),
            'courses' => array(
                'name' => 'Courses',
                'url' => base_url('admin/courses'),
                'icon' => 'award',
            ),
            'courseSections' => array(
                'name' => 'Course Sections',
                'url' => base_url('admin/courseSections'),
                'icon' => 'layers',
            ),
            'companySession' => array(
                'name' => 'Company Sessions',
                'url' => base_url('admin/companySession'),
                'icon' => 'briefcase',
            ),
            'companySessionManager' => array(
                'name' => 'Company Sessions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manager',
                'url' => base_url('admin/companySessionManager'),
                'icon' => 'users',
            ),
            'userCreation' => array(
                'name' => 'User Creation',
                'url' => base_url('admin/userCreation'),
                'icon' => 'user-plus',
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('admin/profile'),
                'icon' => 'user',
            )
        );

        return $entries;
    }

    function navigation_getProfessorNavs()
    {
        $entries = array(
            'overview' => array(
                'name' => 'Overview',
                'url' => base_url('professor/overview'),
                'icon' => 'clipboard'
            ),
            'courseSections' => array(
                'name' => 'Course Sections',
                'url' => base_url('professor/courseSections'),
                'icon' => 'award'
            ),
            'labSession' => array(
                'name' => 'Lab Sections',
                'url' => base_url('professor/labSessions'),
                'icon' => 'grid'
            ),
            'textBooks' => array(
                'name' => 'Text Books',
                'url' => base_url('professor/textBooks'),
                'icon' => 'book'
            ),
            'asignGrad' => array(
                'name' => 'Lab Session Conductors',
                'url' => base_url('professor/assignGraduate'),
                'icon' => 'git-branch'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('professor/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }

    function navigation_getStudentNavs()
    {
        $entries = array(
            'overview' => array(
                'name' => 'Overview',
                'url' => base_url('student/overview'),
                'icon' => 'clipboard'
            ),
            'courses' => array(
                'name' => 'Enroll for Course',
                'url' => base_url('student/courses'),
                'icon' => 'book-open'
            ),
            'companySessions' => array(
                'name' => 'Company Sessions',
                'url' => base_url('student/companySessions'),
                'icon' => 'briefcase'
            ),
            'library' => array(
                'name' => 'Library',
                'url' => base_url('student/library'),
                'icon' => 'book'
            ),
            'grades' => array(
                'name' => 'Grades',
                'url' => base_url('student/grades'),
                'icon' => 'award'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('student/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }

    function navigation_getLibrarianNavs()
    {
        $entries = array(
            'overview' => array(
                'name' => 'Overview',
                'url' => base_url('librarian/overview'),
                'icon' => 'clipboard'
            ),
            'addBook' => array(
                'name' => 'Books',
                'url' => base_url('librarian/book'),
                'icon' => 'book-open'
            ),
            'authors' => array(
                'name' => 'Authors',
                'url' => base_url('librarian/author'),
                'icon' => 'users'
            ),
            'bookBorrowAndReturn' => array(
                'name' => 'Borrow & Return Books',
                'url' => base_url('librarian/borrowAndReturnBook'),
                'icon' => 'code'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('librarian/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }

    function navigation_getManagerNavs()
    {
        $entries = array(
            'company_Sessions' => array(
                'name' => 'Company Sessions',
                'url' => base_url('CompanySessionManager/companySessions'),
                'icon' => 'briefcase'
            ),
            'student_evaluation' => array(
                'name' => 'Student Evaluations',
                'url' => base_url('CompanySessionManager/studentEvaluation'),
                'icon' => 'list'
            ),
            'profile' => array(
                'name' => 'Profile',
                'url' => base_url('CompanySessionManager/profile'),
                'icon' => 'user'
            )
        );

        return $entries;
    }
}
