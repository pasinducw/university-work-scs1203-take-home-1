<link rel="stylesheet" href="<?php echo base_url('assets/css/compsessionmanager/compsession.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Student's Evaluations</h2>
    <br>

    <div class="container-fluid">
        <form method="post" name="search-company-session-form">
            <div class="row">
                <div class="col-md-3" style="padding-left:0">
                    <div style="padding-bottom:10px">
                        <!-- <label class="mr-sm-2" for="select-company-session-year">Year</label> -->
                        <select class="custom-select" id="select-company-session-year" name="select-company-session-year">
                            <option value="" selected>Choose Year</option>
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3" style="padding-left:0">
                    <div style="padding-bottom:10px">
                        <!-- <label class="mr-sm-2" for="select-company-session-year">Year</label> -->
                        <select class="custom-select" id="select-company-session-semester" name="select-company-session-semester">
                            <option value="" selected>Choose Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <p style="padding:2px 0 0 0">
                        <button type="submit" class="btn btn-sm btn-primary" name="search-company-session-form">Search</button>
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

    <div> 
        <table class="custom-table" id="company-session-show-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Manager</th>
                    <th>Company</th>
                    <th>Add or See Evaluations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>354</td>
                    <td>Year 1</td>
                    <td>Semester 1</td>
                    <td>Manager</td>
                    <td>Company</td>
                    <td>
                      
                        <a href="<?php echo $viewData['urls']['addStudentEvaluation_url']; ?>/23/45" class="btn btn-sm btn-primary" role="button">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        
                    </td>
                </tr>
                <tr>
                    <td>354</td>
                    <td>Year 1</td>
                    <td>Semester 2</td>
                    <td>Man Name</td>
                    <td>Company</td>
                    <td>
                        <a href="<?php echo $viewData['urls']['addStudentEvaluation_url']; ?>/23/45" class="btn btn-sm btn-primary" role="button">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</div>
