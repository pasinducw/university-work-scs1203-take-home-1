<link rel="stylesheet" href="<?php echo base_url('assets/css/compsessionmanager/compsession.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Student's Evaluations</h2>
    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Edit Evaluations</p>

    <p class="edit-evsl-std-name">Student : Name</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form method="post" name="edit-student-eval-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-return-date">Year</label>
                                <input type="text" class="form-control" id="input-comp-session-year" name="input-comp-session-year" aria-describedby="input-comp-session-yearHelp" placeholder="Year" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-comp-session-semester">Semester</label>
                                <input type="text" class="form-control" id="input-comp-session-semester" name="input-comp-session-semester" aria-describedby="iinput-comp-session-semesterHelp" placeholder="Semester" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-student-id">Student ID</label>
                                <input type="text" class="form-control" id="input-student-id" name="input-student-id" aria-describedby="input-student-idHelp" placeholder="Student ID" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input-student-eval">Evaluation</label>
                                <input type="text" class="form-control" id="input-student-eval" name="input-student-eval" aria-describedby="input-student-evalHelp" placeholder="Evaluation">
                            </div>
                        </div>
                    </div>
                    <p style="text-align:center">
                        <a href="../../../<?php echo $viewData['urls']['back_url']; ?>" type="button" class="btn btn-sm btn-secondary" role="button">Back</a>
                        <button type="submit" name="edit-student-eval-form" class="btn btn-sm btn-warning">
                            <i class="fa fa-edit"></i>&nbsp;Edit Evaluation
                        </button>
                    </p>
                </form>
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</div>