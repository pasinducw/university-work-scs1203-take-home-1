<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Students</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Edit Student</p>

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <form method="post" name="add-student-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-first-name">Student First Name</label>
                                <input type="text" class="form-control" id="input-first-name" name="input-first-name" aria-describedby="input-first-nameHelp" placeholder="First Name">
                                <small id="input-first-nameHelp" class="form-text text-muted">Enter first name.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-last-name">Last Name Name</label>
                                <input type="text" class="form-control" id="input-last-name" name="input-last-name" aria-describedby="input-last-nameHelp" placeholder="Last Name">
                                <small id="input-last-nameHelp" class="form-text text-muted">Enter last name.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-address">Student Address</label>
                                <input type="text" class="form-control" id="input-address" name="input-address" aria-describedby="input-addressHelp" placeholder="Address">
                                <small id="input-addressHelp" class="form-text text-muted">Enter address.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-contact-no">Contact No</label>
                                <input type="text" class="form-control" id="input-contact-no" name="input-contact-no" aria-describedby="input-contact-noHelp" placeholder="Contact No">
                                <small id="input-contact-noHelp" class="form-text text-muted">Enter contact no</small>
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center">
                        <a href="<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark" role="button">Back</a>
                        <button class="btn btn-sm btn-warning" type="submit" name="add-student-form">
                            <i class="fa fa-edit"></i>&nbsp;Edit Student
                        </button>
                    </p>
                </form>
                <p class="error-text">
                    error
                </p>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</div>