<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">User Creation</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Student User</p>


    <form method="post" name="search-user-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-user-name" placeholder="Employee Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-user-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="student-user-show-table">
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
                        <input type="checkbox" onclick="selectUser(event)" class="custom-control-input user-check-box" id="pr1" value="1" style="margin: 0">
                        <label class="custom-control-label" for="pr1" style="margin: 0"></label>
                    </div>
                </td>
                <td>1223</td>
                <td>wra</td>
            </tr>
            <tr>
                <td>
                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                        <input type="checkbox" onclick="selectUser(event)" class="custom-control-input user-check-box" id="pr2" value="2" style="margin: 0">
                        <label class="custom-control-label" for="pr2" style="margin: 0"></label>
                    </div>
                </td>
                <td>2334</td>
                <td>fa</td>
            </tr>
        </tbody>
    </table>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <br>
                <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Reset Password</p>

                <form method="post" name="reset-user-password-form">
                    <div class="row">
                        <div class="col-md-8">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-user">User</label>
                                <select class="custom-select" oninput="selectInputUser(event)" id="select-user-for-reset-password" name="select-user-for-reset-password">
                                    <option value="" selected>Choose User</option>
                                    <option value="1">User 1</option>
                                    <option value="2">User 2</option>
                                    <option value="3">User 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="input-password">New Password</label>
                                <input type="password" class="form-control" id="input-password" name="input-password" aria-describedby="input-passwordHelp" placeholder="New Password">
                                <small id="input-passwordHelp" class="form-text text-muted">Enter new password.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="input-admin-password" placeholder="Admin Password">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" name="reset-user-password-form" type="submit">Admin Password</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <p style="text-align:right">
            <a href="<?php echo $viewData['urls']['back_url']; ?>" class="btn btn-sm btn-dark">Back</a>
        </p>
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

    function selectUser(event) {
        if (catCheckBoxCheck(event.target.className)) {
            var checkBox = document.getElementsByClassName(event.target.className);
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    checkBox[y].checked = false;
                }
            }
            event.target.checked = true;

            document.getElementById('select-user-for-reset-password').value = event.target.value;

        } else {
            document.getElementById('select-user-for-reset-password').value = "";
        }
    }

    function selectInputUser(event) {
        var checkBox = document.getElementsByClassName('custom-control-input user-check-box');
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