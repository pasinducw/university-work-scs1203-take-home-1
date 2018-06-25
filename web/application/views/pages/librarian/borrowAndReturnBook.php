<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/datetimepicker/fonts.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/bootstrap-datetimepicker.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/librarian/borrowAndReturnBook.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Borrow & Return Books</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Borrowed Books</p>

    <div style="width:300px">
        <form method="post" name="search-borrow-book-student-form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="input-student-name" placeholder="Student Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" name="search-borrow-book-student-form" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <table class="custom-table" id="borrowed-books-detail-show-table">
        <thead>
            <tr>
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Book ID</th>
                <th>Title</th>
                <th>ISBN</th>
                <th>Copy ID</th>
                <th>B. Date</th>
                <th>L. Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>143</td>
                <td>Nishan Wijethunga</td>
                <td>1</td>
                <td>Title</td>
                <td>32425636</td>
                <td>12333</td>
                <td>2017-07-23</td>
                <td>2017-08-04</td>
                <td>
                    <p style="text-align:center;margin:0">
                        <button class="btn btn-success btn-sm"><i class="fa fa-undo"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </p>
                </td>
            </tr>
            <tr>
                <td>143</td>
                <td>Nishan Wijethunga</td>
                <td>1</td>
                <td>Title</td>
                <td>32425636</td>
                <td>12333</td>
                <td>2017-07-23</td>
                <td>2017-08-04</td>
                <td>
                <p style="text-align:center;margin:0">
                    <button class="btn btn-success btn-sm"><i class="fa fa-undo"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </p>
                </td>
            </tr>
            <tr class="not-borrowed-on-time">
                <td>143</td>
                <td>Nishan Wijethunga</td>
                <td>1</td>
                <td>Title</td>
                <td>32425636</td>
                <td>12333</td>
                <td>2017-07-23</td>
                <td>2017-08-04</td>
                <td>
                <p style="text-align:center;margin:0">
                    <button class="btn btn-success btn-sm"><i class="fa fa-undo"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </p>
                </td>
            </tr>
            
        </tbody>
    </table>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Borrow A Book</p>

    <div class="container-fluid">
        <diV class="row">
            <div class="col-md-6" style="border-right:1px solid rgb(66, 66, 66, 0.3)">
                <form method="post" id="borrow-book-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-book">Book</label>
                                <select class="custom-select" oninput="selectInputBook(event)" id="select-book" name="select-book">
                                    <option value="" selected>Choose Book</option>
                                    <option value="1">Book 1</option>
                                    <option value="2">Book 2</option>
                                    <option value="3">Book 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="form-group">
                                <label for="input-book-copy">Book Copy</label>
                                <input type="text" class="form-control" id="input-book-copy" name="input-book-copy" aria-describedby="input-book-copyHelp" placeholder="Copy ID">
                                <small id="input-book-copyeHelp" class="form-text text-muted">Enter book copy ID</small>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-student-id">Student ID</label>
                                <input type="text" class="form-control" id="input-student-id" name="input-student-id" aria-describedby="input-student-idHelp" placeholder="Student ID">
                                <small id="input-student-idHelp" class="form-text text-muted">Enter student ID</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Return Date</label>
                                <input type="text" class="form-control" id="input-return-date" name="input-return-date" aria-describedby="input-return-dateHelp" placeholder="Return Date">
                                <small id="input-return-dateHelp" class="form-text text-muted">Enter return date</small>
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center">
                        <button type="submit" name="borrow-book-form" class="btn btn-sm btn-success"><i class="fa fa-exchange-alt"></i>&nbsp;&nbsp;Borrow Book</button>
                    </p>
                </form>
                <p class="error-text">Error</p>
                
            </div>
            <div class="col-md-6">

                <div>
                    <form method="post" name="search-book-form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="input-book-name" placeholder="Book Name">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="search-book-form" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <table class="custom-table" id="borrow-book-show-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>ISBN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectBook(event)" class="custom-control-input book-check-box" id="bk1" value="1" style="margin: 0">
                                    <label class="custom-control-label" for="bk1" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>232</td>
                            <td>Title</td>
                            <td>32345467</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectBook(event)" class="custom-control-input book-check-box" id="bk2" value="2" style="margin: 0">
                                    <label class="custom-control-label" for="bk2" style="margin: 0"></label>
                                </div>
                            </td>
                            <td>232</td>
                            <td>Title</td>
                            <td>32345467</td>
                        </tr>
                        
                    </tbody>
                </table>
                <label for="input-book-">Only Available Books.</label>

            </div>
        </diV>
    </div>

    <script src="<?php echo base_url('assets/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/moment-with-locales.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script>
        var time_inputs = $('#input-return-date');
        time_inputs.datetimepicker({
            format: 'YYYY-MM-DD'
        });
    </script>
    <script>
        
        function catCheckBoxCheck(className) {
            var checkBox = document.getElementsByClassName(className);
            for (var y = 0; y < checkBox.length; y++) {
                if (checkBox[y].checked) {
                    return true;
                }
            }
        }

        function selectBook(event){
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-book').value = event.target.value;

            }else{
                document.getElementById('select-book').value = "";
            }
        }
        
        function selectInputBook(event) {
            var checkBox = document.getElementsByClassName('custom-control-input book-check-box');
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