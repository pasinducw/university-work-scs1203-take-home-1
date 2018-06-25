<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Departments</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Edit Department Details</p>

    <div class="container-fluid">
        <form method="post" name="edit-department-form">
        <div class="row">
            <div class="col-md-1"></div> 
            <div class="col-md-6">
                <form method="post" name="edit-department-form">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-id">Department ID</label>
                                <input type="text" class="form-control" id="input-dept-id" name="input-dept-id" aria-describedby="input-dept-idHelp" placeholder="Department ID" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-name">Department Name</label>
                                <input type="text" class="form-control" id="input-dept-name" name="input-dept-name" aria-describedby="input-dept-nameeHelp" placeholder="Department Name">
                                <small id="input-dept-nameHelp" class="form-text text-muted">Enter department name</small>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-name">Department Location</label>
                                <input type="text" class="form-control" id="input-dept-location" name="input-dept-location" aria-describedby="input-dept-locationHelp" placeholder="Department Location">
                                <small id="input-dept-locationHelp" class="form-text text-muted">Enter department location</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-dept-name">Phone</label>
                                <input type="text" class="form-control" id="input-dept-phone" name="input-dept-phone" aria-describedby="input-dept-phoneHelp" placeholder="Phone">
                                <small id="input-dept-phoneHelp" class="form-text text-muted">Enter phone number</small>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-prof">Head of Department</label>
                                <select class="custom-select" oninput="selectInputprof(event)" id="select-prof" name="select-prof">
                                    <option value="" selected>Choose Professor</option>
                                    <option value="1">Professor 1</option>
                                    <option value="2">Professor 2</option>
                                    <option value="3">Professor 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    <p style="text-align:center">
                        <a href="<?php echo $viewData['urls']['back_url']; ?>" class="btn btn-sm btn-secondary" role="button">Back</a>
                        <button type="submit" name="edit-department-form" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp;Edit Department</button>
                    </p>
                </form>
                <p class="error-text">
                    Error
                </p>
            </div>
            <div class="col-md-4">

                <form method="post" name="search-prof-form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input-prof-name" placeholder="Professor Name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-proft-form" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <table class="custom-table" id="prof-show-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" id="pr1" value="1" style="margin: 0">
                                    <label class="custom-control-label" for="pr1" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>23345</td>
                            <td>Name</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" id="pr2" value="2" style="margin: 0">
                                    <label class="custom-control-label" for="pr2" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>23345</td>
                            <td>Name</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
        
    </div> 
    <script>
        
        function catCheckBoxCheck(className) {
            var checkBox = document.getElementsByClassName(className);
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    return true;
                }
            }
        }

        function selectProf(event){
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-prof').value = event.target.value;

            }else{
                document.getElementById('select-prof').value = "";
            }
        }
        
        function selectInputprof(event) {
            var checkBox = document.getElementsByClassName('custom-control-input prof-check-box');
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    checkBox[y].checked = false;
                }
            }
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].value === event.target.value) {
                    checkBox[y].checked = true;                          
                }
            }
        }

    </script>
</div>