<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Departments</h2>
    <br>

    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Department Details</p>

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
                <?php foreach ($departments as $department) {?>
                <tr>
                    <td>
                        <?php echo $department->department_id; ?>
                    </td>
                    <td>
                        <?php echo $department->name; ?>
                    </td>
                    <td>
                        <?php echo $department->location; ?>
                    </td>
                    <td>
                        <?php echo $department->phone; ?>
                    </td>
                    <td>
                        <?php echo $department->department_head_name; ?>
                    </td>
                    <td>
                        <?php echo form_open('/admin/departments', array(), array("delete-department-request" => true)); ?>
                        <input type="hidden" name="delete-department-id" value="<?php echo $department->department_id; ?>" />
                        <a href="<?php echo $viewData['urls']['editDept'] . '/' . $department->department_id; ?>" class="btn btn-sm btn-warning" role="button">
                            <i class="fa fa-edit"></i>
                        </a>

                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <br>
    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Add Department</p>

    <div class="container-fluid">
        <?php echo form_open('/admin/departments', array(), array("add-department-request" => true)); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="input-dept-name">Department Name</label>
                    <input type="text" class="form-control" id="input-dept-name" name="input-dept-name" aria-describedby="input-dept-nameeHelp"
                        placeholder="Department Name">
                    <small id="input-dept-nameHelp" class="form-text text-muted">Enter department name</small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="input-dept-name">Department Location</label>
                    <input type="text" class="form-control" id="input-dept-location" name="input-dept-location" aria-describedby="input-dept-locationHelp"
                        placeholder="Department Location">
                    <small id="input-dept-locationHelp" class="form-text text-muted">Enter department location</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="input-dept-name">Phone</label>
                    <input type="text" class="form-control" id="input-dept-phone" name="input-dept-phone" aria-describedby="input-dept-phoneHelp"
                        placeholder="Phone">
                    <small id="input-dept-phoneHelp" class="form-text text-muted">Enter phone number</small>
                </div>
            </div>
        </div>
        <?php echo validation_errors(); ?>
        <br/>
        <p style="text-align:center">
            <button type="submit" name="add-department-form" class="btn btn-sm btn-success">
                <i class="fa fa-plus"></i>&nbsp;Add Department</button>
        </p>
        </form>
    </div>

</div>