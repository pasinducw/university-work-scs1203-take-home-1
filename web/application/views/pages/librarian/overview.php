<link rel="stylesheet" href="<?php echo base_url('assets/css/librarian/overview.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Overview</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Books Basic Details</p>

    <!--
    <div style="width:300px">
        <form method="post" name="search-books-form">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="input-book-name" placeholder="Book Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" name="search-books-form" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>-->

    <table class="custom-table" id="books-basic-detail-show-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Publisher</th>
                <th>ISBN</th>
                <th>Authors</th>
                <th>No. Of Coppies</th>
                <th>Available</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book) {?>
            <tr>
                <td><?php echo $book->title; ?></td>
                <td><?php echo $book->publisher; ?></td>
                <td><?php echo $book->book_id; ?></td>
                <td><?php echo $book->authors; ?></td>
                <td><?php echo $book->copies; ?></td>
                <td><?php echo $book->available; ?></td>
                <td>
                    <?php echo form_open('/librarian/book', array(), array('delete-book-request' => true)) ?>
                    <input type="hidden" name="delete-book-isbn" value="<?php echo $book->book_id ?>" />
                    <p style="text-align:center;margin:0">
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </p>
                    </form>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    <br>
    <br>

    <!--
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
    </table> -->

    <br>
    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Text Books</p>

    <table class="custom-table" id="books-basic-detail-show-table">
        <thead>
            <tr>
                <th>Book</th>
                <th>Course</th>
                <th>Used By</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($textBooks as $book) {?>
            <tr>
                <td><?php echo $book->title . ' by ' . $book->authors; ?> </td>
                <td><?php echo $book->course; ?></td>
                <td><?php echo $book->professor; ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</div>