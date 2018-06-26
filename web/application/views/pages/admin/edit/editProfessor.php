<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Professors</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Edit Professor</p>

    <br>

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" name="edit-prof-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Professor ID</label>
                                <input type="text" class="form-control" id="input-prof-id" name="input-prof-id" aria-describedby="input-prof-idHelp" placeholder="Professor ID" readonly>
                                <small id="input-prof-idHelp" class="form-text text-muted">Enter professor first name.</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-prof">Department</label>
                                <select class="custom-select" id="select-prof" name="select-prof">
                                    <option value="" selected>Choose Department</option>
                                    <option value="1">Department 1</option>
                                    <option value="2">Department 2</option>
                                    <option value="3">Department 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Professor First Name</label>
                                <input type="text" class="form-control" id="input-prof-fiest-name" name="input-prof-fiest-name" aria-describedby="input-prof-fiest-nameHelp" placeholder="Professor First Name">
                                <small id="input-prof-fiest-nameHelp" class="form-text text-muted">Enter professor first name.</small>
                            </div>
                        </div><div class="col-md-6">
                            <div class="form-group">
                                <label for="">Professor Last Name</label>
                                <input type="text" class="form-control" id="input-prof-last-name" name="input-prof-name" aria-describedby="input-prof-last-nameHelp" placeholder="Professor Last Name">
                                <small id="input-prof-last-nameHelp" class="form-text text-muted">Enter professor last name.</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contact No</label>
                                <input type="text" class="form-control" id="input-prof-cont-no" name="input-prof-cont-no" aria-describedby="input-prof-cont-noHelp" placeholder="Contact No">
                                <small id="input-prof-cont-noHelp" class="form-text text-muted">Enter contact no.</small>
                            </div>
                        </div><div class="col-md-6">
                        </div>
                    </div>
                    <p style="text-align:center">
                        <a href="../<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark">Back</a>
                        <button type="submit" name="edit-prof-form" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp;Edit Professor</button>
                    </p>
                </form>
                
            </div> 
            <div class="col-md-3"></div>
        </div>
    </div>


</div>