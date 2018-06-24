<link rel="stylesheet" href="<?php echo base_url('assets/css/librarian/book.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Books</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Books Basic Details</p>

    <div style="width:300px">
        <form method="post" name="search-books-form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="input-book-name" placeholder="Book Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" name="search-books-form" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <table class="custom-table" id="books-basic-detail-show-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Publisher</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>No. Of Coppies</th>
                <th>Available</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Pub</td>
                <td></td>
                <td>32425636</td>
                <td>12</td>
                <td><h5><span class="badge badge-danger">0</span></h5></td>
                <td>
                    <p style="text-align:center;margin:0">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </p>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Pub</td>
                <td></td>
                <td>32425636</td>
                <td>12</td>
                <td><h5><span class="badge badge-success">7</span></h5></td>
                <td>
                    <p style="text-align:center;margin:0">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Books</p>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">

                <form method="post" id="add-book-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Book Title</label>
                                <input type="text" class="form-control" id="input-book-title" name="input-book-title" aria-describedby="input-book-titleHelp" placeholder="Book Title">
                                <small id="input-book-titleHelp" class="form-text text-muted">Enter book title</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Publisher</label>
                                <input type="text" class="form-control" id="input-book-pub" name="input-book-pub" aria-describedby="input-book-pubHelp" placeholder="Book Publisher">
                                <small id="input-book-pubHelp" class="form-text text-muted">Enter book publisher</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">ISBN No.</label>
                                <input type="text" class="form-control" id="input-book-isbn" name="input-book-isbn" aria-describedby="input-book-isbnHelp" placeholder="Book ISBN No.">
                                <small id="input-book-isbnHelp" class="form-text text-muted">Enter ISBN number</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Number Of Copys</label>
                                <input type="text" class="form-control" id="input-book-copy-count" name="input-book-copy-count" aria-describedby="input-book-copy-countHelp" placeholder="Copys Count">
                                <small id="input-book-copy-countHelp" class="form-text text-muted">Enter copies count.</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-prof">Professor</label>
                                <select class="custom-select" oninput="selectInputProf(event)" id="select-prof" name="select-prof">
                                    <option value="" selected>Choose Professor</option>
                                    <option value="1">Professor 1</option>
                                    <option value="2">Professor 2</option>
                                    <option value="3">Professor 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Author Name</label>
                                <input type="text" class="form-control" id="input-book-author" name="input-book-author" aria-describedby="input-book-authorHelp" placeholder="Book Author">
                                <small id="input-book-authorHelp" class="form-text text-muted">Enter author.</small>
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center"><button type="submit" name="add-book-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Book</button></p>
                </form>
                <p class="error-text">Error</p>

            </div>
            <div class="col-md-5">
                <form method="post" name="search-prof-form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input-prof-name" placeholder="Professor Name">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-prof-form" type="submit">Search</button>
                        </div>
                    </div>
                </form>

                <div>
                    <table class="custom-table" id="add-book-prof-show-table">
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
                                <td>232</td>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box" id="pr2" value="2" style="margin: 0">
                                        <label class="custom-control-label" for="pr2" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>232</td>
                                <td>Name</td>
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
        
        function selectInputBook(event) {
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