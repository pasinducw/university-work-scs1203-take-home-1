<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Company Sessions</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Company Sessions Details</p>

    <form method="post" name="search-comp-sessions">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-comp" placeholder="Company Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-comp-sessions" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="company-session-detail-show-table">
        <thead>
            <tr>
                <th>Year</th>
                <th>Semester</th>
                <th>Manager Name</th>
                <th>Company</th>
                <th>Edit or Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td>name</td>
                <td>comp</td>
                <td>
                    <a href="<?php echo $viewData['urls']['editCompSession'] ?>/354" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>name</td>
                <td>comp</td>
                <td>
                    <a href="<?php echo $viewData['urls']['editCompSession'] ?>/354" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Company Sessions</p>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                
                <form method="post" name="add-company-sesion-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-year">Year</label>
                                <select class="custom-select" id="select-year" name="select-year">
                                    <option value="" selected>Choose Year</option>
                                    <option value="1">Year 1</option>
                                    <option value="2">Year 2</option>
                                    <option value="3">Year 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-semester">Semester</label>
                                <select class="custom-select" id="select-semester" name="select-semester">
                                    <option value="" selected>Choose Semester</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-semester">Manager</label>
                                <select class="custom-select" oninput="selectManager(event)" id="select-manager" name="select-manager">
                                    <option value="" selected>Choose Manager</option>
                                    <option value="1">Manager 1</option>
                                    <option value="2">Manager 2</option>
                                    <option value="3">Manager 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" id="input-comp-name" name="input-comp-name" aria-describedby="input-comp-nameHelp" placeholder="Company Name">
                                <small id="input-comp-nameHelp" class="form-text text-muted">Enter company name.</small>
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center">
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;Add Company Session</button>
                    </p>
                </form>
                

            </div>
            <div class="col-md-4">
                <form method="post" name="search-comp-manager">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input-manager-name" placeholder="Company Manager Name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-comp-sessions" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <table class="custom-table">
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
                                    <input type="checkbox" onclick="selectManager(event)" class="custom-control-input manager-check-box" id="man1" value="1" style="margin: 0">
                                    <label class="custom-control-label" for="man1" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>345</td>
                            <td>Name</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectManager(event)" class="custom-control-input manager-check-box" id="man2" value="2" style="margin: 0">
                                    <label class="custom-control-label" for="man2" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>345</td>
                            <td>Name</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p style="text-align:center">
                    <a href="<?php echo $viewData['urls']['addManager'] ?>" class="btn btn-sm btn-success" role="button">
                        <i class="fa fa-user-plus"></i>&nbsp;Add Manager
                    </a>
                </p>

            </div>
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

    function selectManager(event) {
        if (catCheckBoxCheck(event.target.className)) {
            var checkBox = document.getElementsByClassName(event.target.className);
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    checkBox[y].checked = false;
                }
            }
            event.target.checked = true;

            document.getElementById('select-manager').value = event.target.value;

        } else {
            document.getElementById('select-manager').value = "";
        }
    }

    function selectInputBook(event) {
        var checkBox = document.getElementsByClassName('manager-check-box');
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