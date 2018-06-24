<link rel="stylesheet" href="<?php echo base_url('assets/css/librarian/overview.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Overview</h2>
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
                <th>ISBN</th>
                <th>No. Of Coppies</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Pub</td>
                <td>32425636</td>
                <td>12</td>
                <td><h5><span class="badge badge-danger">0</span></h5></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Pub</td>
                <td>32425636</td>
                <td>12</td>
                <td><h5><span class="badge badge-success">7</span></h5></td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Not Returned Books</p>

    <table class="custom-table" id="books-not-returned-detail-show-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Borrowd Date</th>
                <th>Last Date</th>
                <th>Copy ID</th>
                <th>Student</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>2017-06-04</td>
                <td>2017-06-07</td>
                <td>12233</td>
                <td>Student</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>2017-06-04</td>
                <td>2017-06-07</td>
                <td>12233</td>
                <td>Student</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>2017-06-04</td>
                <td>2017-06-07</td>
                <td>12233</td>
                <td>Student</td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Text Books</p>

    <table class="custom-table" id="books-text-book-show-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Course</th>
                <th>Used By</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Course</td>
                <td>name | name</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Course</td>
                <td>name | name</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Title</td>
                <td>Course</td>
                <td>name | name</td>
            </tr>
            
        </tbody>
    </table>

</div>