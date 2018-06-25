<link rel="stylesheet" href="<?php echo base_url('assets/css/librarian/book.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Authors</h2>
    <br>

    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Authors</p>

    <div style="width:300px">
        <?php echo form_open('/librarian/author', array(), array('search-author-request' => true)) ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="input-filter-author-name" placeholder="Author Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" name="search-books-form" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <table class="custom-table" id="books-basic-detail-show-table">
        <thead>
            <tr>
                <th>Author Name</th>
                <th>Is a professor</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $author) {?>
            <tr>
                <td><?php echo $author->author_name; ?></td>
                <td><?php echo isset($author->professor_id) ? 'Yes' : 'No'; ?></td>
                <td>
                    <?php echo form_open('/librarian/author', array(), array('remove-author-request' => true)) ?>
                    <input type="hidden" name="input-delete-author-name" value="<?php echo $author->author_name; ?>" />
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

    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Add Authors</p>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <?php echo form_open('/librarian/author', array(), array('add-author-request' => true)) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Author Name</label>
                                <input type="text" class="form-control" id="input-author-name" name="input-author-name" placeholder="Author Name">
                                <small id="input-author-nameHelp" class="form-text text-muted">Enter Author Name</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-prof">Professor Link</label>
                                <select class="custom-select" oninput="selectInputProf(event)" id="select-prof" name="select-prof">
                                    <option value="" selected>None</option>
                                    <?php foreach ($professors as $professor) {?>
                                        <option value="<?php echo $professor->employee_id; ?>">
                                            <?php echo $professor->first_name . ' ' . $professor->last_name; ?>
                                        </option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <p style="text-align:center"><button type="submit" name="add-book-form" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Author</button></p>
                </form>
                <?php echo validation_errors(); ?>


            </div>
            <div class="col-md-5">
                <?php echo form_open('/librarian/author', array(), array('search-professor-request' => true)) ?>
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
                                <th>Department</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($professors as $professor) {?>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                        <input type="checkbox" onclick="selectProf(event)" class="custom-control-input prof-check-box"
                                        id="pr<?php echo $professor->employee_id; ?>" value="<?php echo $professor->employee_id; ?>" style="margin: 0">
                                        <label class="custom-control-label" for="pr<?php echo $professor->employee_id; ?>" style="margin: 0"></label>
                                    </div>
                                </td>
                                <td><?php echo $professor->department; ?></td>
                                <td><?php echo $professor->first_name . ' ' . $professor->last_name; ?></td>
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

        function selectInputProf(event) {
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