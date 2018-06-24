<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/labSessions.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Lab Sessions</h2>
    <br>

    <div class="container-fluid">

        <div style="width:300px">
            <form method="post" name="search-lab-session-form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="input-lab-session-topic" placeholder="Topic">
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="search-lab-session-form" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div>
            <table class="custom-table" id="show-course-section">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Section</th>
                        <th>Semester</th>
                        <th>Year</th>
                        <th>Topic</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Course</td>
                        <td>Section</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>Topic</td>
                        <td>Start Time</td>
                        <td>End Time</td>
                        <td>Location</td>
                        <td>
                            <p style="text-align:center;margin:0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Course</td>
                        <td>Section</td>
                        <td>Semester</td>
                        <td>Year</td>
                        <td>Topic</td>
                        <td>Start Time</td>
                        <td>End Time</td>
                        <td>Location</td>
                        <td>
                            <p style="text-align:center;margin:0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </p>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>

    </div>
    <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Lab Sessions</p>
    <br>

    <form method="post" name="add-lab session-form">
        <div class="row">
            <div class="col-md-3">
                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-course">Course</label>
                    <select class="custom-select" id="select-course" name="select-course">
                        <option value="" selected>Choose Course</option>
                        <option value="1">Course 1</option>
                        <option value="2">Course 2</option>
                        <option value="3">Course 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-course-section">Course Section</label>
                    <select class="custom-select" id="select-course-section" name="select-course-section">
                        <option value="" selected>Choose Course Section</option>
                        <option value="1">Course Section 1</option>
                        <option value="2">Course Section 2</option>
                        <option value="3">Course Section 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-year">Year</label>
                    <select class="custom-select" id="select-year" name="select-year">
                        <option value="" selected>Choose Year</option>
                        <option value="1">Year 1</option>
                        <option value="2">Year 2</option>
                        <option value="3">Year 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div style="padding-bottom:10px">
                    <label class="mr-sm-2" for="select-semester">Semester</label>
                    <select class="custom-select" id="select-semester" name="select-course-section">
                        <option value="" selected>Choose Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input-lab-session-topic">Lab Session Topic</label>
                    <input type="text" class="form-control" id="input-lab-session-topic" name="input-lab-session-topic" aria-describedby="input-lab-session-topicHelp" placeholder="Enter Topic">
                    <small id="input-lab-session-topicHelp" class="form-text text-muted">Enter Lab Session Topic</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input-lab-session-start-time">Lab Session Start Time</label>
                    <input type="text" class="form-control" id="input-lab-session-start-time" name="input-lab-session-start-time" aria-describedby="input-lab-session-start-timeHelp" placeholder="Enter Start Time">
                    <small id="input-lab-session-start-timeHelp" class="form-text text-muted">Enter Lab Session Start Time</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input-lab-session-end-time">Lab Session End Time</label>
                    <input type="text" class="form-control" id="input-lab-session-end-time" name="input-lab-session-end-time" aria-describedby="input-lab-session-end-timeHelp" placeholder="Enter End Time">
                    <small id="input-lab-session-end-timeHelp" class="form-text text-muted">Enter Lab Session End Time</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="input-lab-session-location">Lab Session Location</label>
                    <input type="text" class="form-control" id="input-lab-session-location" name="input-lab-session-location" aria-describedby="input-lab-session-locationHelp" placeholder="Enter Location">
                    <small id="input-lab-session-locationHelp" class="form-text text-muted">Enter Lab Session Location</small>
                </div>
            </div>
        </div>
        <p style="text-align:center">
            <button type="submit" class="btn btn-sm btn-success" name="add-lab session-form"><i class="fa fa-plus"></i>&nbsp;Add Lab Session</button>
        </p>
    </form>
    <p class="error-text">Error</p>
</div>