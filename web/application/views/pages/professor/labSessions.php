<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/datetimepicker/fonts.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/bootstrap-datetimepicker.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/labSessions.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Lab Sessions</h2>
    <br>

    <div class="container-fluid">
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
                    <?php foreach ($labSessions as $labSession) {?>
                    <tr>
                        <td><?php echo $labSession->course_name; ?></td>
                        <td><?php echo $labSession->section_id; ?></td>
                        <td><?php echo $labSession->semester; ?></td>
                        <td><?php echo $labSession->year; ?></td>
                        <td><?php echo $labSession->topic; ?></td>
                        <td><?php echo $labSession->start_time; ?></td>
                        <td><?php echo $labSession->end_time; ?></td>
                        <td><?php echo $labSession->location; ?></td>
                        <td>
                            <?php echo form_open('/professor/labSessions', array(), array('delete-lab-session' => true)); ?>
                            <input type="hidden" name="course-section" value="<?php echo $labSession->course_id . ':' . $labSession->section_id . ':' . $labSession->semester . ':' . $labSession->year; ?>">
                            <input type="hidden" name="lab-session-topic" value="<?php echo $labSession->topic; ?>">
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
        </div>

    </div>
    <br>
    <p class="sesction1">
        <i class="fa fa-angle-double-right"></i>&nbsp;Add Lab Sessions</p>
    <br>

    <?php echo form_open('/professor/labSessions', array(), array('create-lab-session' => true)); ?>

    <div class="row">
        <div class="col-md-6">
            <div style="padding-bottom:10px">
                <label class="mr-sm-2" for="select-course">Course Section</label>
                <select class="custom-select" id="select-course-section" name="select-course-section">
                    <option value="" <?php echo set_select('select-course-section', '', true); ?> selected>Choose Course Section</option>
                    <?php foreach ($assignedCourseSections as $section) {?>
                        <?php $courseSectionId = $section->course_id . ':' . $section->section_id . ':' . $section->semester . ':' . $section->year;?>
                    <option value="<?php echo $courseSectionId; ?>" <?php echo set_select('select-course-section', $courseSectionId) ?>>
                        <?php echo $section->name . ': ' . $section->section_id . ' (Year ' . $section->year . '  Semester ' . $section->semester . ')'; ?>
                    </option>
                    <?php }?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="input-lab-session-topic">Lab Session Topic</label>
                <input type="text" class="form-control" id="input-lab-session-topic" name="input-lab-session-topic" aria-describedby="input-lab-session-topicHelp"
                    placeholder="Enter Topic" value="<?php echo set_value('input-lab-session-topic'); ?>">
                <small id="input-lab-session-topicHelp" class="form-text text-muted">Enter Lab Session Topic</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="input-lab-session-start-time">Lab Session Start Time</label>
                <input type="text" class="form-control" id="input-lab-session-start-time" name="input-lab-session-start-time" aria-describedby="input-lab-session-start-timeHelp"
                    placeholder="Enter Start Time" value="<?php echo set_value('input-lab-session-start-time'); ?>">
                <small id="input-lab-session-start-timeHelp" class="form-text text-muted">Enter Lab Session Start Time</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="input-lab-session-end-time">Lab Session End Time</label>
                <input type="text" class="form-control" id="input-lab-session-end-time" name="input-lab-session-end-time" aria-describedby="input-lab-session-end-timeHelp"
                    placeholder="Enter End Time" value="<?php echo set_value('input-lab-session-end-time'); ?>">
                <small id="input-lab-session-end-timeHelp" class="form-text text-muted">Enter Lab Session End Time</small>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="input-lab-session-location">Lab Session Location</label>
                <input type="text" class="form-control" id="input-lab-session-location" name="input-lab-session-location" aria-describedby="input-lab-session-locationHelp"
                    placeholder="Enter Location" value="<?php echo set_value('input-lab-session-location'); ?>">
                <small id="input-lab-session-locationHelp" class="form-text text-muted">Enter Lab Session Location</small>
            </div>
        </div>
    </div>

    <?php echo validation_errors(); ?>
    <br/>
    <p style="text-align:center">
        <button type="submit" class="btn btn-sm btn-success" name="add-lab session-form">
            <i class="fa fa-plus"></i>&nbsp;Add Lab Session</button>
    </p>
    </form>
</div>
<script src="<?php echo base_url('assets/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/moment-with-locales.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datetimepicker.min.js'); ?>"></script>
<script>
    var time_inputs = $('#input-lab-session-end-time,#input-lab-session-start-time');
    time_inputs.datetimepicker({
        format: 'hh:mm'
    });
</script>