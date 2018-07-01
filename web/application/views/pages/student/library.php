<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/student/student.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Library</h2>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Borrowed Books</p>

    <div>
        <table class="custom-table" id="borrowed-book-show-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Authors</th>
                    <th>Borrowed Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>pub</td>
                    <td>123454665</td>
                    <td>a,b,d,c</td>
                    <td>2017-08-23</td>
                    <td>2017-08-30</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>pub</td>
                    <td>123454665</td>
                    <td>a,b,d,c</td>
                    <td>2017-08-23</td>
                    <td>2017-08-30</td>
                </tr>
                <tr class="return-date-ended">
                    <td>id</td>
                    <td>title</td>
                    <td>pub</td>
                    <td>123454665</td>
                    <td>a,b,d,c</td>
                    <td>2017-08-23</td>
                    <td>2017-08-30</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>pub</td>
                    <td>123454665</td>
                    <td>a,b,d,c</td>
                    <td>2017-08-23</td>
                    <td>2017-08-30</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Books Details</p>

    <form method="post" name="search-books-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-prof-name" placeholder="Book Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-books-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <br>

    <table class="custom-table" id="books-basic-detail-show-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Publisher</th>
                <th>ISBN</th>
                <th>Authors</th>
                <th>No. Of Coppies</th>
                <th>Available</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>title</td>
                <td>pub</td>
                <td>34345456</td>
                <td>a,d,f,g</td>
                <td>10</td>
                <td>3</td>
            </tr>
            <tr class="book-not-available">
                <td>title</td>
                <td>pub</td>
                <td>34345456</td>
                <td>a,d,f,g</td>
                <td>10</td>
                <td>0</td>
            </tr>
            <tr>
                <td>title</td>
                <td>pub</td>
                <td>34345456</td>
                <td>a,d,f,g</td>
                <td>10</td>
                <td>3</td>
            </tr>
        </tbody>
    </table>

</div>