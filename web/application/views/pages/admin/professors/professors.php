<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Professors</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Professor Details</p>

    <form method="post" name="search-prof-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-prof-name" placeholder="Professor Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-prof-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="prof-show-table">
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
                <td>232</td>
                <td>Name</td>
                <td>45463</td>
                <td>
                    <a href="<?php echo $viewData['urls']['editProf'] ?>/23" class="btn btn-sm btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>232</td>
                <td>Name</td>
                <td>345346</td>
                <td>
                    <a href="<?php echo $viewData['urls']['editProf'] ?>/23" class="btn btn-sm btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            
        </tbody>
    </table>
                    
    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Professor</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" name="add-prof-form">
                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-prof">Department</label>
                        <select class="custom-select" id="select-prof" name="select-prof">
                            <option value="" selected>Choose Department</option>
                            <option value="1">Department 1</option>
                            <option value="2">Department 2</option>
                            <option value="3">Department 3</option>
                        </select>
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
                        <button type="submit" name="add-prof-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;Add Professor</button>
                    </p>
                </form>
                
            </div> 
            <div class="col-md-3"></div>
        </div>
    </div>

</div>