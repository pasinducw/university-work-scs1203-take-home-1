<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/student/student.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Enroll for Courses</h2>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;You have enrolled.</p>

    <div class="courses-enroled">
         <ul>
             <li>Name</li>
             <ul>
                 <li>Department :</li>
                 <li>Creadit Hours :</li>
                 <li>College :</li>
                 <li>Prerequisities : wec , fvef , fvqfvv</li>
             </ul>
         </ul>
    </div>

    <br>

    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Enroll for Courses.</p>

    <form name="search-course-form">
        <div class="input-group mb-3" style="width:300px">
            <input type="text" class="form-control" name="input-prof-name" placeholder="Course Name">
            <div class="input-group-append">
                <button class="btn btn-primary" name="search-course-form" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="custom-table" id="course-show-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>College</th>
                <th>Prerequisities</th>
                <th>Student Count</th>
                <th>Enroll</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>comp</td>
                <td>man</td>
                <td>std</td>
                <td>std</td>
                <td>std</td>
                <td></td>
                <td>
                    <form>
                        <input type="hidden" name="enroll-coure-id" value="" />
                        <p style="text-align:center;margin:0">
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-play"></i>
                            </button>
                        </p>
                    </form>
                </td>
            </tr>
            <tr>
                <td>comp</td>
                <td>man</td>
                <td>std</td>
                <td>std</td>
                <td>std</td>
                <td></td>
                <td>
                    <form>
                        <input type="hidden" name="enroll-coure-id" value="" />
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