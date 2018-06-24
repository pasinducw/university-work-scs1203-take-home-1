<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/courseSection.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Course Sections</h2>
    <br>

    <div class="container-fluid">

        <div style="width:300px">
            <form method="post" name="search-course-form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="input-course-name" placeholder="Course Name">
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="search-course-form" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        
        <div>
            <table class="custom-table" id="show-course-section">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Year</th>
                        <th>C. Hours</th>
                        <th>Section No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                <input type="checkbox" onclick="selectCoureSection(event)" class="custom-control-input course-section-check-box" id="cs1" value="1" style="margin: 0">
                                <label class="custom-control-label" for="cs1" style="margin: 0"></label>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Department</td>
                        <td>Name</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>C. Hours</td>
                        <td>Section No</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                <input type="checkbox" onclick="selectCoureSection(event)" class="custom-control-input course-section-check-box" id="cs2" value="2" style="margin: 0">
                                <label class="custom-control-label" for="cs2" style="margin: 0"></label>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Department</td>
                        <td>Name</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>C. Hours</td>
                        <td>Section No</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                <input type="checkbox" onclick="selectCoureSection(event)" class="custom-control-input course-section-check-box" id="cs3" value="3" style="margin: 0">
                                <label class="custom-control-label" for="cs3" style="margin: 0"></label>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Department</td>
                        <td>Name</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>C. Hours</td>
                        <td>Section No</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <br>
        
        <form method="post" name="add-to-mycourse-section-form">
            <div class="row">
                <div class="col-md-10">
                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-book">Course Section</label>
                        <select class="custom-select" oninput="selectInputCourseSection(event)" id="select-course-section" name="select-course-section">
                            <option value="" selected>Choose Course Section</option>
                            <option value="1">Course Section 1</option>
                            <option value="2">Course Section 2</option>
                            <option value="3">Course Section 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <p style="text-align:center;padding:32px 0 0 0">
                        <button type="submit" class="btn btn-sm btn-success" name="add-to-mycourse-section-form"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add To My Sections</button>
                    </p>
                </div>
            </div>
        </form>
        <p class="error-text">Error</p>

        <br>

        <div>
            <label class="mr-sm-2" for="select-book">My Course Section</label>
            <table class="custom-table" id="show-course-section">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Year</th>
                        <th>C. Hours</th>
                        <th>Section No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Department</td>
                        <td>Name</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>C. Hours</td>
                        <td>Section No</td>
                        <td>
                            <p style="text-align:center;margin:0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Department</td>
                        <td>Name</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>C. Hours</td>
                        <td>Section No</td>
                        <td>
                            <p style="text-align:center;margin:0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Department</td>
                        <td>Name</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>C. Hours</td>
                        <td>Section No</td>
                        <td>
                            <p style="text-align:center;margin:0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
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

        function selectCoureSection(event){
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-course-section').value = event.target.value;

            }else{
                document.getElementById('select-course-section').value = "";
            }
        }

        function selectInputCourseSection(event) {
            var checkBox = document.getElementsByClassName('custom-control-input course-section-check-box');
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