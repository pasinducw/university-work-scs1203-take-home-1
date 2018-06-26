<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Department Heads</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Set Department Head Order</p>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <form method="post" name="add-to-head-order">
                    <div class="row">
                        <div class="col-md-10">
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
                                                <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" name="prof-check-box" id="pr1" value="1" style="margin: 0">
                                                <label class="custom-control-label" for="pr1" style="margin: 0"></label>
                                            </div>
                                        </td>
                                        <td>34</td>
                                        <td>Name</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                                <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" name="prof-check-box" id="pr2" value="1" style="margin: 0">
                                                <label class="custom-control-label" for="pr2" style="margin: 0"></label>
                                            </div>
                                        </td>
                                        <td>34</td>
                                        <td>Name</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                                <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" name="prof-check-box" id="pr3" value="1" style="margin: 0">
                                                <label class="custom-control-label" for="pr3" style="margin: 0"></label>
                                            </div>
                                        </td>
                                        <td>34</td>
                                        <td>Name</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2">
                            <p style="text-align:center">
                                <button type="submit" class="btn btn-sm btn-success" name="add-to-head-order">
                                    <i class="fa fa-plus"></i>&nbsp;Add
                                </button>
                            </p>
                            
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-md-5">
                <p class="dptmnt-head-order">Order</p>

                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>34</td>
                            <td>Name</td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Name</td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Name</td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    <br>
     <p style="text-align:right">
        <a href="../<?php echo $viewData['urls']['back_url'] ?>" class="btn btn-sm btn-dark" role="button">Back</a>
    </p>
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