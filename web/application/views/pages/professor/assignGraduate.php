<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/assignGraduate.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Assign Post Graduates For Lab Sessions</h2>

    <br>

    <div class="container-fluid">

        <div>
            <div style="width:300px">
                <form method="post" name="search-student-asigned-lab">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input-student-asigned-id" placeholder="Student ID">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-student-asigned-lab" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="student-asigned-lab-show-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Assigned For</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nishan Wijethunga</td>
                        <td>sf dgag dhtnjaja</td>
                        <td>
                            <p style="text-align:center;margin:0"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></p>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nishan Wijethunga</td>
                        <td>sf dgag dhtnjaja</td>
                        <td>
                            <p style="text-align:center;margin:0"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></p>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nishan Wijethunga</td>
                        <td>sf dgag dhtnjaja</td>
                        <td>
                            <p style="text-align:center;margin:0"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></p>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <br>
        <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Students For Lab Sessions</p>
        <br>
        <div class="row">
            <div class="col-md-8" style="border-right:1px solid rgb(185, 185, 185);">

                <form method="post" name="add-student-for-lab-session-form">

                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-labsession">Lab Session</label>
                        <select class="custom-select" id="select-labsession" name="select-labsession">
                        <option value="" selected>Choose Lab Session</option>
                        <option value="1">Lab Session 1</option>
                        <option value="2">Lab Session 2</option>
                        <option value="3">Lab Session 3</option>
                    </select>
                    </div>


                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-student-for-lab-session">Student</label>
                        <select class="custom-select" id="select-student-for-lab-session" name="select-student-for-lab-session">
                        <option value="" selected>Choose Student</option>
                        <option value="1">Student 1</option>
                        <option value="2">Student 2</option>
                        <option value="3">Student 3</option>
                    </select>
                    </div>

                    <p style="text-align:right">
                        <button type="submit" class="btn btn-sm btn-warning">Add Student</button>
                    </p>

                </form>




            </div>
            <div class="col-md-4">
                <div>
                    <form method="post" name="search-student-for-asign-lab">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="input-student-id" placeholder="Student ID">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="search-student-for-asign-lab" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="post-grad-show-table">
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
                                    <input type="checkbox" onclick="selectStd(event)" class="custom-control-input post-grad-check-box" id="std1" value="1" style="margin: 0">
                                    <label class="custom-control-label" for="std1" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>1</td>
                            <td>Student 1</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectStd(event)" class="custom-control-input post-grad-check-box" id="std2" value="2" style="margin: 0">
                                    <label class="custom-control-label" for="std2" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>2</td>
                            <td>Student 2</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectStd(event)" class="custom-control-input post-grad-check-box" id="std3" value="3" style="margin: 0">
                                    <label class="custom-control-label" for="std3" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>3</td>
                            <td>Student 3</td>
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

        function selectStd(event) {

            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-student-for-lab-session').value = event.target.value;

            }else{
                document.getElementById('select-student-for-lab-session').value = "";
            }
        }
    </script>
</div>