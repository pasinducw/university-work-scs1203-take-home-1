<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Departments</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Department Details</p>

    <div>
        <table class="custom-table" id="department-show-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Phone</th>
                    <th>Head Of Department</th>
                    <th>Edit or Remove</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>23345</td>
                    <td>Name</td>
                    <td>Location</td>
                    <td>+98 345456767</td>
                    <td>Mr. Bean</td>
                    <td>
                        <a href="<?php echo $viewData['urls']['editDept'] ?>/34" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>23345</td>
                    <td>Name</td>
                    <td>Location</td>
                    <td>+98 345456767</td>
                    <td>Mr. Bean</td>
                    <td>
                        <a href="<?php echo $viewData['urls']['editDept'] ?>/34" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Department</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <form method="post" name="add-department-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-name">Department Name</label>
                                <input type="text" class="form-control" id="input-dept-name" name="input-dept-name" aria-describedby="input-dept-nameeHelp" placeholder="Department Name">
                                <small id="input-dept-nameHelp" class="form-text text-muted">Enter department name</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-name">Department Location</label>
                                <input type="text" class="form-control" id="input-dept-location" name="input-dept-location" aria-describedby="input-dept-locationHelp" placeholder="Department Location">
                                <small id="input-dept-locationHelp" class="form-text text-muted">Enter department location</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-name">Phone</label>
                                <input type="text" class="form-control" id="input-dept-phone" name="input-dept-phone" aria-describedby="input-dept-phoneHelp" placeholder="Phone">
                                <small id="input-dept-phoneHelp" class="form-text text-muted">Enter phone number</small>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <p style="text-align:center">
                        <button type="submit" name="add-department-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;Add Department</button>
                    </p>
                </form>
                <p class="error-text">
                    Error
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</div>