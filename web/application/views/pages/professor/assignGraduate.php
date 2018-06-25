<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/assignGraduate.css') ?>">
<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Lab Session Conductors (Post-Graduates)</h2>

    <br>

    <div class="container-fluid">

        <div>
            <!--
            <div style="width:300px">
            <?php echo form_open('/professor/assignGraduate', array(), array('filter-student-assigned-lab' => true)); ?>
                <form method="post" name="search-student-asigned-lab">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="filter-assigned-student-id" placeholder="Student ID">
                        <div class="input-group-append">
                            <button class="btn btn-primary" name="search-student-asigned-lab" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            -->
            <table class="student-asigned-lab-show-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Assigned For</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($labSessions as $labSession) {?>
                    <?php if (isset($labSession->conductor_id)) {?>
                    <tr>
                        <td><?php echo $labSession->conductor_id; ?></td>
                        <td><?php echo $labSession->conductor_name; ?></td>
    <?php
$courseSectionId = $labSession->course_id . ':' . $labSession->section_id . ':' . $labSession->semester . ':' . $labSession->year;
    $courseSectionName = $labSession->course_name . ': ' . $labSession->section_id . ' (Year ' . $labSession->year . '  Semester ' . $labSession->semester . ')';

    $labSessionName = $courseSectionName . ' -> ' . $labSession->topic;
    $labSessionId = $courseSectionId . ':' . $labSession->topic;
    ?>
                        <td><?php echo $labSessionName; ?></td>
                        <td>
                            <p style="text-align:center;margin:0">
                            <?php echo form_open('/professor/assignGraduate', array(), array('delete-session-conductor-request' => true)); ?>
                            <input type="hidden" name="delete-request-session-id" value="<?php echo $labSessionId; ?>">
                            <input type="hidden" name="delete-request-student-id" value="<?php echo $labSession->conductor_id; ?>">

                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            </p>
                        </td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
        </div>
        <br>
        <p class="sesction1">
            <i class="fa fa-angle-double-right"></i>&nbsp;Assign post-graduate</p>
        <br>
        <div class="row">
            <div class="col-md-8" style="border-right:1px solid rgb(185, 185, 185);">
                <?php echo form_open('/professor/assignGraduate', array(), array('assign-post-graduate-request' => true)); ?>
                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-labsession">Lab Session</label>
                        <select class="custom-select" id="select-labsession" name="select-labsession">
                            <?php foreach ($labSessions as $labSession) {?>

<?php
$courseSectionId = $labSession->course_id . ':' . $labSession->section_id . ':' . $labSession->semester . ':' . $labSession->year;
    $courseSectionName = $labSession->course_name . ': ' . $labSession->section_id . ' (Year ' . $labSession->year . '  Semester ' . $labSession->semester . ')';

    $labSessionName = $courseSectionName . ' -> ' . $labSession->topic;
    $labSessionId = $courseSectionId . ':' . $labSession->topic;
    ?>
                            <option value="<?php echo $labSessionId; ?>" <?php echo set_select('select-course-section', $labSessionId) ?>>
                                <?php echo $labSessionName; ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>


                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-student-for-lab-session">Student</label>
                        <select class="custom-select" oninput="selectInputStd(event)" id="select-student-for-lab-session" name="select-student-for-lab-session">
                            <?php foreach ($students as $student) {?>
                            <option value="<?php echo $student->student_id; ?>">
                                <?php echo $student->first_name . ' ' . $student->last_name; ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>

                    <p style="text-align:right">
                        <button type="submit" class="btn btn-sm btn-warning">Add Student</button>
                    </p>
                </form>
            </div>
            <div class="col-md-4">
                <div>
                <?php echo form_open('/professor/assignGraduate', array(), array('post-graduate-filter-request' => true)); ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="filter-side-student-list" placeholder="Student ID">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="search-student-for-asign-lab" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="post-grad-show-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Postgraduate Student ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student) {?>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                    <input type="checkbox" onclick="selectStd(event)" class="custom-control-input post-grad-check-box"
                                        id="<?php echo $student->student_id; ?>" value="<?php echo $student->student_id; ?>" style="margin: 0">
                                    <label class="custom-control-label" for="<?php echo $student->student_id; ?>"
                                        style="margin: 0"></label>
                                </div>
                            </td>
                            <td>
                                <?php echo $student->student_id; ?>
                            </td>
                            <td>
                                <?php echo $student->first_name . ' ' . $student->last_name; ?>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
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

        function selectStd(event) {

            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;

                document.getElementById('select-student-for-lab-session').value = event.target.value;

            } else {
                document.getElementById('select-student-for-lab-session').value = "";
            }
        }

        function selectInputStd(event) {
            var checkBox = document.getElementsByClassName('custom-control-input post-grad-check-box');
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