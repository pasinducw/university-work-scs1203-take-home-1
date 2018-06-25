<link rel="stylesheet" href="<?php echo base_url('assets/css/librarian/book.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Books</h2>
    <br>

    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Books Basic Details</p>

    <div style="width:300px">
        <?php echo form_open('/librarian/book', array(), array('filter-book-request' => true)) ?>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="input-filter-book-title" placeholder="Book Title">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-books-form" type="submit">Search</button>
            </div>
        </div>
        </form>
    </div>

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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Books</p>

                <?php echo form_open('/librarian/book', array(), array('add-book-request' => true)) ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-return-date">Book Title</label>
                            <input type="text" class="form-control" id="input-book-title" name="input-book-title" aria-describedby="input-book-titleHelp"
                                placeholder="Book Title">
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
                            <input type="text" class="form-control" id="input-book-isbn" name="input-book-isbn" aria-describedby="input-book-isbnHelp"
                                placeholder="Book ISBN No.">
                            <small id="input-book-isbnHelp" class="form-text text-muted">Enter ISBN number</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-return-date">Publish Year</label>
                            <input type="text" class="form-control" id="input-book-publish-year" name="input-book-publish-year" aria-describedby="input-book-copy-countHelp"
                                placeholder="Published year">
                            <small id="input-book-publish-yearHelp" class="form-text text-muted">Enter published year.</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-return-date">Number Of Copies</label>
                            <input type="text" class="form-control" id="input-book-copy-count" name="input-book-copy-count" aria-describedby="input-book-copy-countHelp"
                                placeholder="Copies Count">
                            <small id="input-book-copy-countHelp" class="form-text text-muted">Enter copies count.</small>
                        </div>
                    </div>
                </div>

                <p style="text-align:left">
                    <button type="submit" name="add-book-form" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>&nbsp;&nbsp;Add Book</button>
                </p>
                </form>

                <?php echo validation_errors(); ?>

            </div>
            <div class="col-md-5">
                <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Map Authors to Books</p>
                <?php echo form_open('/librarian/book', array(), array('add-author-to-book-request' => true)) ?>
                <div class="row">
                    <div class="col-md-6">
                        <label class="mr-sm-2" for="add-author-request-book">Book</label>
                        <select class="custom-select" name="add-author-request-book">
                            <?php foreach ($books as $book) {?>
                            <option value="<?php echo $book->book_id; ?>">
                                <?php echo $book->title; ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="mr-sm-2" for="add-author-request-author">Author</label>
                        <select class="custom-select" name="add-author-request-author">
                            <?php foreach ($authors as $author) {?>
                            <option value="<?php echo $author->author_name; ?>">
                                <?php echo $author->author_name; ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <br/>
                <p style="text-align:right">
                    <button type="submit" name="add-book-form" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>&nbsp;&nbsp;Add Author</button>
                </p>
                </form>
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

        function selectProf(event) {
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-prof').value = event.target.value;

            } else {
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