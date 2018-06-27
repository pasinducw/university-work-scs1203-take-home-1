<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">User Creation</h2>
    <br>

    <div class="container-fluid create-user-main-cont">
        <div class="category-main-cont">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="button-cont">
                            <a href="<?php echo $viewData['urls']['adminUser']; ?>">
                                <button class="btn btn-primary">
                                    Admin
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="button-cont">
                            <a href="<?php echo $viewData['urls']['studentUser']; ?>">
                                <button class="btn btn-primary">
                                    Student
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>