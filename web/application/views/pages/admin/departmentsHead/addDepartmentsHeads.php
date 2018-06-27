<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Department Heads</h2>
    <br>

    <p class="dptmnt">Department</p>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Department Head</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <form method="post" name="add-department-head-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-department-id">Department ID</label>
                                <input type="text" class="form-control" id="input-department-id" name="input-department-id" aria-describedby="input-department-idHelp" placeholder="Department ID" readonly>
                            </div>
                        </div>
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
                    </div> 
                    <p style="text-align:center">
                        <a href="../<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark" role="button">Back</a>
                        <button type="submit" name="add-department-head-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;Add Department Head</button>
                    </p>
                </form>
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