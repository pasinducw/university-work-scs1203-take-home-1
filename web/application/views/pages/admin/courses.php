<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Courses</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Course Details</p>

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
                    <a href="<?php echo $viewData['urls']['editCourse'] ?>/345" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Course</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-prof">Department</label>
                    <select class="custom-select" id="select-department" name="select-department">
                        <option value="" selected>Choose Department</option>
                        <option value="1">Department 1</option>
                        <option value="2">Department 2</option>
                        <option value="3">Department 3</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Course Name</label>
                            <input type="text" class="form-control" id="input-course-name" name="input-course-name" aria-describedby="input-course-nameHelp" placeholder="Coursr Name">
                            <small id="input-course-nameHelp" class="form-text text-muted">Enter course name.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Creadit Hours</label>
                            <input type="text" class="form-control" id="input-creadit-hour" name="input-creadit-hour" aria-describedby="input-creadit-hourHelp" placeholder="Creadit Hours">
                            <small id="input-creadit-hourHelp" class="form-text text-muted">Enter .</small>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">College</label>
                    <input type="text" class="form-control" id="input-college" name="input-college" aria-describedby="input-collegeHelp" placeholder="College">
                    <small id="input-collegerHelp" class="form-text text-muted">Enter college.</small>
                </div>

                <p style="text-align:center">
                    <button class="btn btn-sm btn-success" role="button"><i class="fa fa-plus"></i>&nbsp;Add Course</button>
                </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</div>




