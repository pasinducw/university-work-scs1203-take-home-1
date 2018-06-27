<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin/admin.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Students</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Student >> name</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 stdent-detail-cont">
                <div class="row">
                    <div class="col-md-6">
                        <div class="stdent-detail-item">
                            <p class="head"><i class="fa fa-angle-right"></i>&nbsp;Basic Details</p>
                            <ul>
                                <li>ID</li>
                                <li>Name</li>
                                <li>Address</li>  
                                <li>Contact No</li>    
                            </ul>
                        </div> 
                        
                    </div>
                    <div class="col-md-6">
                        <div class="stdent-detail-item">
                            <p class="head"><i class="fa fa-angle-right"></i>&nbsp;Enrolled Courses</p>
                            <ul>
                                <li>Course 1</li>
                                <li>Course 2</li>
                                <li>Course 3</li>
                            </ul>
                        </div> 
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="stdent-detail-item">
                            <p class="head"><i class="fa fa-angle-right"></i>&nbsp;Enrolled Company Sessions</p>
                            <ul>
                                <li>Company Session 1 >>> Eval </li>
                                <li>Company Session 2 >>> Eval </li>
                                <li>Company Session 3 >>> Eval </li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="stdent-detail-item">
                            <p class="head"><i class="fa fa-angle-right"></i>&nbsp;Grades</p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <p>
        <a href="<?php echo $viewData['urls']['back_url']; ?>" class="btn btn-sm btn-dark" role="button">Back</a>
    </p>
</div>