<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Courses</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Edit Course</p>

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form method="post" name="edit-course-form">
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
                        <a href="../<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark">Back</a>
                        <button class="btn btn-sm btn-warning" type="submit" name="edit-course-form"><i class="fa fa-edit"></i>&nbsp;Edit Course</button>
                    </p>
                </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


</div>