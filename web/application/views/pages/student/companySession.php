<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/student/student.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Company Sessions</h2>

    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Now Status</p>

    <div class="now-comp-enroll">
        <ul>
            <li>Year</li>
            <li>Semester</li>
            <li>Company</li>
        </ul>
    </div>
    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Your Evaluations</p>

    <table class="custom-table">
        <thead>
            <tr>
                <th>Year</th>
                <th>Semester</th>
                <th>Company</th>
                <th>Evaluation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2017</td>
                <td>2 sem</td>
                <td>comp</td>
                <td>eval</td>
            </tr>
            <tr>
                <td>2017</td>
                <td>2 sem</td>
                <td>comp</td>
                <td>eval</td>
            </tr>
            <tr>
                <td>2017</td>
                <td>2 sem</td>
                <td>comp</td>
                <td>eval</td>
            </tr>
        </tbody>
    </table>
    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Enroll for Company Session</p>
    <p class="sesction1"><i class="fa fa-angle-right"></i>&nbsp;Year&nbsp;<i class="fa fa-angle-right"></i>&nbsp;Semester</p>


    <form method="post" name="search-company-session-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-company-name" placeholder="Company Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-company-session-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="company-sesion-show-table">
        <thead>
            <tr>
                <th>Company</th>
                <th>Manager</th>
                <th>Student Cont</th>
                <th>Enroll</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>comp</td>
                <td>man</td>
                <td>std</td>
                <td>
                    <form>
                        <input type="hidden" name="enroll-comp-session-sem" value="" />
                        <input type="hidden" name="enroll-comp-session-year" value="" />
                        <p style="text-align:center;margin:0">
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-play"></i>
                            </button>
                        </p>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>