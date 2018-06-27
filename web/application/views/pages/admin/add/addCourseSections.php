<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Course Sections</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Course Sections of Course_name</p>

    <table class="custom-table" id="course-section-show-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Professor</th>
                <th>Student Count</th>
                <th>Start</th>
                <th>Edit or Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>245</td>
                <td>year</td>
                <td>sem</td>
                <td>prof name</td>
                <td>20</td>
                <td>
                    <a href="" class="btn btn-sm btn-success" role="button"><i class="fa fa-play"></i></a>
                </td>
                <td>
                    <a href="<?php echo $viewData['urls']['editCourseSec'] ?>/455" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>245</td>
                <td>year</td>
                <td>sem</td>
                <td>prof name</td>
                <td>--</td>
                <td>
                    <a href="" class="btn btn-sm btn-dark" role="button"><i class="fa fa-truck-loading"></i></a>
                </td>
                <td>
                    <a href="<?php echo $viewData['urls']['editCourseSec'] ?>/455" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>245</td>
                <td>year</td>
                <td>sem</td>
                <td>prof name</td>
                <td>50</td>
                <td>
                    <button class="btn btn-sm btn-light" role="button"><i class="fa fa-book-open"></i></button>
                </td>
                <td>
                    <a href="<?php echo $viewData['urls']['editCourseSec'] ?>/455" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Course Sections For Course_name</p>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form method="post" name="add-course-section-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Course ID</label>
                                <input type="text" class="form-control" id="input-course-id" name="course-id"  placeholder="Course ID" readonly>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
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
                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-prof">Professor</label>
                        <select class="custom-select" oninput="selectInputProf(event)" id="select-prof" name="select-prof">
                            <option value="" selected>Choose Professor</option>
                            <option value="1">Professor 1</option>
                            <option value="2">Professor 2</option>
                            <option value="3">Professor 3</option>
                        </select>
                    </div>
                    <p style="text-align:center">
                        <a href="<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark">Back</a>
                        <button class="btn btn-sm btn-success" type="submit" name="add-course-section-form">
                            <i class="fa fa-plus"></i>&nbsp;
                            Add Course Section   
                        </button>
                    </p>
                </form>
            </div>
            <div class="col-md-4">
                <form method="post" name="search-prof-form">
                    <div class="input-group mb-3" >
                        <input type="text" class="form-control" name="input-prof-name" placeholder="Professor Name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-prof-form" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <table class="custom-table" id="prof-search-table">
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
                            <td>ID</td>
                            <td>Name</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" id="pr2" value="2" style="margin: 0">
                                    <label class="custom-control-label" for="pr2" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>ID</td>
                            <td>Name</td>
                        </tr>
                    </tbody>
                </table>

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

    function selectProf(event) {
        if (catCheckBoxCheck(event.target.className)) {
            var checkBox = document.getElementsByClassName(event.target.className);
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    checkBox[y].checked = false;
                }
            }
            event.target.checked = true;

            document.getElementById('select-prof').value = event.target.value;

        } else {
            document.getElementById('select-prof').value = "";
        }
    }

    function selectInputProf(event) {
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