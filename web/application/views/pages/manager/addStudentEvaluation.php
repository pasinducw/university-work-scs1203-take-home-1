<link rel="stylesheet" href="<?php echo base_url('assets/css/compsessionmanager/compsession.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Student's Evaluations</h2>
    <br>

    <p class="detail">Year&nbsp;<i class="fa fa-angle-right"></i>&nbsp;Semester&nbsp;<i class="fa fa-angle-right"></i>&nbsp;Company&nbsp;</p>


    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Evaluations</p>

    <form method="post" name="search-std-eval-from-std-name-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-std-name" placeholder="Student Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-std-eval-from-std-name-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="evaluation-show-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Evaluation</th>
                <th>Remove or Edit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2335</td>
                <td>efbg gnsgs</td>
                <td>wee</td>
                <td>
                   
                    <a href="../../<?php echo $viewData['urls']['edit_enrolment']; ?>/123/456/789" class="btn btn-sm btn-warning" role="button"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a>
                    
                </td>
            </tr>
        </tbody>
    </table>


    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Evaluations</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <form method="post" name="add-student-eval-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Year</label>
                                <input type="text" class="form-control" id="input-comp-session-year" name="input-comp-session-year" aria-describedby="input-comp-session-yearHelp" placeholder="Year" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-comp-session-semester">Semester</label>
                                <input type="text" class="form-control" id="input-comp-session-semester" name="input-comp-session-semester" aria-describedby="iinput-comp-session-semesterHelp" placeholder="Semester" readonly>
                            </div>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="mr-sm-2" for="select-company-session-year">Student</label>
                            <select class="custom-select" id="select-student" name="select-student">
                                <option value="" selected>Choose Student</option>
                                <option value="1">Student 1</option>
                                <option value="2">Student 2</option>
                                <option value="3">Student 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Evaluation</label>
                                <input type="text" class="form-control" id="input-comp-session-evaluation" name="input-comp-session-evaluation" aria-describedby="input-comp-session-evaluationHelp" placeholder="Evaluation">
                                <small id="input-comp-session-evaluationHelp" class="form-text text-muted">Enter evaluation</small>
                            </div>
                        </div> 
                    </div>
                    <p style="text-align:center">
                        <a href="<?php echo $viewData['urls']['back_url']; ?>" class="btn btn-sm btn-dark" role="button">Back</a>
                        <button type="submit" class="btn btn-sm btn-success" name="add-student-eval-form">
                            <i class="fa fa-plus"></i>&nbsp;Add Evalution
                        </button>
                    </p>
                </form>
                
            </div>
            <div class="col-md-6">

                <form method="post" name="search-student-form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input-student-name" placeholder="Student Name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-student-form" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <div>
                    <table class="custom-table" id="student-show-table">
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
                                        <input type="checkbox" onclick="selectStudent(event)" class="custom-control-input student-check-box" id="std1" value="1" style="margin: 0">
                                        <label class="custom-control-label" for="std1" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>2335</td>
                                <td>efbg gnsgs</td>   
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectStudent(event)" class="custom-control-input student-check-box" id="std2" value="2" style="margin: 0">
                                        <label class="custom-control-label" for="std2" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>2335</td>
                                <td>efbg gnsgs</td>   
                            </tr>
                        </tbody>
                    </table>
                </div> 
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

        function selectStudent(event){
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-student').value = event.target.value;

            }else{
                document.getElementById('select-student').value = "";
            }
        }
        
        function selectInputBook(event) {
            var checkBox = document.getElementsByClassName('custom-control-input student-check-box');
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
