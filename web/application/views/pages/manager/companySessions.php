<link rel="stylesheet" href="<?php echo base_url('assets/css/compsessionmanager/compsession.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Company Sessions</h2>
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
                    <th>Student Count</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>354</td>
                    <td>Year 1</td>
                    <td>Semester 1</td>
                    <td>Manager</td>
                    <td>Company</td>
                    <td>Student Count</td>
                    <td>
                        <p style="text-align:center;margin:0">
                            <a href="<?php echo $viewData['urls']['enrolments_url'];?>/34/56" role="button" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                            <!-- hide this button if students were not released from company session -->
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>354</td>
                    <td>Year 1</td>
                    <td>Semester 2</td>
                    <td>Man Name</td>
                    <td>Company</td>
                    <td>34</td>
                    <td>
                        <p style="text-align:center;margin:0">
                            <a href="<?php echo $viewData['urls']['enrolments_url'];?>" role="button" class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></a>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- <br>
    <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Add Company Sessions</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">

                <form method="post" name="add-company-session-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-company-session-year-for-add-session">Year</label>
                                <select class="custom-select" id="select-company-session-year-for-add-session" name="select-company-session-year-for-add-session">
                                    <option value="" selected>Choose Year</option>
                                    <option value="1">Year 1</option>
                                    <option value="2">Year 2</option>
                                    <option value="3">Year 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="padding-bottom:10px">
                                <label class="mr-sm-2" for="select-company-session-year-for-add-session">Semester</label>
                                <select class="custom-select" id="select-company-session-semester-for-add-session" name="select-company-session-semester-for-add-session">
                                    <option value="" selected>Choose Semester</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="padding-top:5px">
                            <div class="form-group">
                                <label for="input-company-name">Company Name</label>
                                <input type="text" class="form-control" id="input-company-name" name="input-company-name" aria-describedby="input-company-nameHelp"
                                    placeholder="Company Name">
                                <small id="input-company-nameHelp" class="form-text text-muted">Enter company name</small>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <p style="text-align:center">
                        <button type="submit" class="btn btn-sm btn-success" name="add-company-session-form"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Company Session</button>
                    </p>
                </form>
                
            </div>
            <div class="col-md-5">
                <table class="custom-table" id="year-sem-show-table">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Semesters</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Year 1</td>
                            <td>
                                <ul>
                                    <li>Semester 1</li>
                                    <li>Semester 2</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Year 2</td>
                            <td>
                                <ul>
                                    <li>Semester 1</li>
                                    <li>Semester 2</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
</div>