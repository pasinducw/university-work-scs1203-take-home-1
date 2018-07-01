<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Courses</h2>
    <br>

     <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Prerequisities</p>

     <table class="custom-table" id="prereq-show-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Creadit Hours</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5467</td>
                <td>Name</td>
                <td>20</td>
                <td>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </body>
     </table>

    <br>

    <dir class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-7">
                        <form method="post" name="add-perreq-form">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-course">Course</label>
                                <select class="custom-select" oninput="selectInputCourse(event)" id="select-course" name="select-course">
                                    <option value="" selected>Choose Course</option>
                                    <option value="1">Course 1</option>
                                    <option value="2">Course 2</option>
                                    <option value="3">Course 3</option>
                                </select>
                            </div>

                            <p style="text-align:center">
                            <a href="../<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark">Back</a>
                                <button class="btn btn-sm btn-success" type="submit" name="add-perreq-form"><i class="fa fa-plus"></i>&nbsp;Add Course</button>
                            </p>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <form method="post" name="search-course-form">
                            <div class="input-group mb-3" style="width:300px">
                                <input type="text" class="form-control" name="input-course-name" placeholder="Course Name">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" name="search-course-form" type="submit">Search</button>
                                </div>
                            </div>
                        </form>

                        <table class="custom-table" id="course-show-table">
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
                                            <input type="checkbox" onclick="selectProf(event)" class="custom-control-input course-check-box" id="pr1" value="1" style="margin: 0">
                                            <label class="custom-control-label" for="pr1" style="margin: 0"></label>
                                        </div>
                                    </td>
                                    <td>234</td>
                                    <td>name</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                            <input type="checkbox" onclick="selectProf(event)" class="custom-control-input course-check-box" id="pr2" value="2" style="margin: 0">
                                            <label class="custom-control-label" for="pr2" style="margin: 0"></label>
                                        </div>
                                    </td>
                                    <td>234</td>
                                    <td>name</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </dir>
    <script>
    function catCheckBoxCheck(className) {
        var checkBox = document.getElementsByClassName(className);
        for (var y = 0; y < checkBox.length; y++) {
            if (checkBox[y].checked) {
                return true;
            }
        }
    }

    function selectProf(event) {
        if (catCheckBoxCheck(event.target.className)) {
            var checkBox = document.getElementsByClassName(event.target.className);
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    checkBox[y].checked = false;
                }
            }
            event.target.checked = true;

            document.getElementById('select-course').value = event.target.value;

        } else {
            document.getElementById('select-course').value = "";
        }
    }

    function selectInputCourse(event) {
        var checkBox = document.getElementsByClassName('custom-control-input course-check-box');
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