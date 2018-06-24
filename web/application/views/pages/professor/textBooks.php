<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/textBook.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Text Books</h2>
    <br>
    <div>
        <div style="width:300px">
            <form method="post" name="search-text-book-form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="input-text-book-name" placeholder="Text Book Name">
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="search-text-book-form" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <table class="custom-table" id="show-text-books">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Author</th>
                        <th>Text Book For</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Publisher</td>
                        <td>Year</td>
                        <td>Author</td>
                        <td>Course</td>
                        <td>
                            <p style="text-align:center;margin:0"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></p>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Publisher</td>
                        <td>Year</td>
                        <td>Author</td>
                        <td>Course</td>
                        <td>
                            <p style="text-align:center;margin:0"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></p>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Publisher</td>
                        <td>Year</td>
                        <td>Author</td>
                        <td>Course</td>
                        <td>
                            <p style="text-align:center;margin:0"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Text Books For Course</p>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

                <form method="post" name="add-text-book-form">

                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-course">Course</label>
                        <select class="custom-select" id="select-course" name="select-course">
                        <option value="" selected>Choose Course</option>
                        <option value="1">Course 1</option>
                        <option value="2">Course 2</option>
                        <option value="3">Course 3</option>
                    </select>
                    </div>


                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-book">Student</label>
                        <select class="custom-select" oninput="selectInputBook(event)" id="select-book" name="select-book">
                        <option value="" selected>Choose Book</option>
                        <option value="1">Book 1</option>
                        <option value="2">Book 2</option>
                        <option value="3">Book 3</option>
                    </select>
                    </div>

                    <p style="text-align:right">
                        <button type="submit" name="add-text-book-form" class="btn btn-sm btn-warning">Add Text Book</button>
                    </p>

                </form>

            </div>
            <div class="col-md-8">
                <div>
                    <form method="post" name="search-books-form">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="input-book-name" placeholder="Book Name">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="search-books-form" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <table class="custom-table" id="show-book-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Publisher | Year | Author</th>
                                <th>Used For</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectBook(event)" class="custom-control-input book-check-box" id="std1" value="1" style="margin: 0">
                                        <label class="custom-control-label" for="std1" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Publisher | Year | Author</td>
                                <td>Used For</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectBook(event)" class="custom-control-input book-check-box" id="std2" value="2" style="margin: 0">
                                        <label class="custom-control-label" for="std2" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Publisher | Year | Author</td>
                                <td>Used For</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectBook(event)" class="custom-control-input book-check-box" id="std3" value="3" style="margin: 0">
                                        <label class="custom-control-label" for="std3" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Publisher | Year | Author</td>
                                <td>Used For</td>
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
