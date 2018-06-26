<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/textBook.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Text Books</h2>
    <br>
    <div>
        <div style="width:300px">
            <?php echo form_open('/professor/textBooks', array(), array('filter-text-book-request' => true)) ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="input-filter-text-book-title" placeholder="Text Book Name">
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
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Authors</th>
                        <th>Text Book For</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($textBooks as $book) {?>
                    <tr>
                        <td>
                            <?php echo $book->title; ?>
                        </td>
                        <td>
                            <?php echo $book->publisher; ?>
                        </td>
                        <td>
                            <?php echo $book->year; ?>
                        </td>
                        <td>
                            <?php echo $book->authors; ?>
                        </td>
                        <td>
                            <?php echo $book->course; ?>
                        </td>
                        <td>
                            <?php echo form_open('/professor/textBooks', array(), array('delete-text-book-request' => true)) ?>
                            <input type="hidden" name="delete-text-book-course" value="<?php echo $book->course_id ?>" />
                            <input type="hidden" name="delete-text-book-book_id" value="<?php echo $book->book_id; ?>" />
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
        </div>
    </div>

    <br>

    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Add Text Books For Course</p>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

                <?php echo form_open('/professor/textBooks', array(), array('add-text-book-request' => true)) ?>
                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-course">Course</label>
                    <select class="custom-select" id="select-course" name="select-course">
                        <?php foreach ($courses as $course) {?>
                        <option value="<?php echo $course->course_id; ?>">
                            <?php echo $course->name; ?>
                        </option>
                        <?php }?>
                    </select>
                </div>


                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-book">Book</label>
                    <select class="custom-select" oninput="selectInputBook(event)" id="select-book" name="select-book">
                        <?php foreach ($books as $book) {?>
                        <option value="<?php echo $book->book_id; ?>">
                            <?php echo $book->title; ?>
                        </option>
                        <?php }?>
                    </select>
                </div>

                <p style="text-align:right">
                    <button type="submit" name="add-text-book-form" class="btn btn-sm btn-warning">Add Text Book</button>
                </p>

                </form>
            </div>
            <div class="col-md-8">
                <div>
                    <?php echo form_open('/professor/textBooks', array(), array('filter-book-request' => true)) ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="input-filter-book-title" placeholder="Book Title">
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
                                <th>Title</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($books as $book) {?>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectBook(event)" class="custom-control-input book-check-box" id="<?php echo $book->book_id; ?>"
                                            value="<?php echo $book->book_id; ?>" style="margin: 0">
                                        <label class="custom-control-label" for="<?php echo $book->book_id; ?>" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $book->title; ?>
                                </td>
                                <td>
                                    <?php echo $book->publisher . ', ' . $book->year; ?>
                                </td>
                            </tr>
                            <?php }?>
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

        function selectBook(event) {
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-book').value = event.target.value;

            } else {
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