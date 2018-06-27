<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Company Sessions Managers</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Company Sessions Manager Details</p>

    <form method="post" name="search-comp-session-manager-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-comp-manager-name" placeholder="Manager Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-comp-session-manager-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="comp-sesson-manager-show-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Edit or Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3445</td>
                <td>wwcw</td>
                <td>22356</td>
                <td>
                    <a href="<?php echo $viewData['urls']['editManager']; ?>/456" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3445</td>
                <td>wwcw</td>
                <td>22356</td>
                <td>
                    <a href="<?php echo $viewData['urls']['editManager']; ?>/456" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Company Sessions Manager</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="post" name="add-manager-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" id="input-first-name" name="input-first-name" aria-describedby="input-first-nameHelp" placeholder="First Name">
                                <small id="input-first-nameHelp" class="form-text text-muted">Enter first name.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" id="input-last-name" name="input-last-name" aria-describedby="input-last-nameHelp" placeholder="Last Name">
                                <small id="input-last-nameHelp" class="form-text text-muted">Enter last name.</small>
                            </div>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact No</label>
                                <input type="text" class="form-control" id="input-contact-no" name="input-contact-no" aria-describedby="input-contact-noHelp" placeholder="Contact No">
                                <small id="input-contact-noHelp" class="form-text text-muted">Enter contact no.</small>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <p style="text-align:center">
                        <button type="submit" class="btn btn-sm btn-success" name="add-manager-form">
                            <i class="fa fa-plus"></i>&nbsp;Add Manager
                        </button>
                    </p>
                </form>
                <p class="error-text">Error</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div> 
    
</div>