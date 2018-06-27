<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Course Sections</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Select a Course</p>

        <form method="post" name="course-search-form">
            <div class="input-group mb-3" style="width:300px">
                <input type="text" class="form-control" name="input-course-name" placeholder="Course Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" name="search-course-form" type="submit">Search</button>
                </div>
            </div>
        </form>

        <table class="custom-table" id="course-show-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Creadit Hours</th>
                <th>College</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>343</td>
                <td>name</td>
                <td>Department</td>
                <td>20</td>
                <td>College</td>
                <td>
                    <a href="<?php  echo $viewData['urls']['addCourseSection']; ?>/335" class="btn btn-sm btn-primary" role="button"><i class="fa fa-arrow-right"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

</div>