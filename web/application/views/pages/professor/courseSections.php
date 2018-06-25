<link rel="stylesheet" href="<?php echo base_url('assets/css/common/table.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/courseSection.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<div style="padding-top:20px;padding-bottom:30px">

    <h2 class="heading1">Course Sections</h2>
    <br>

    <div class="container-fluid">
        <div style="width:300px">
            <?php echo form_open('/professor/courseSections'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="input-course-name"
                        value="<?php echo $courseFilter; ?>"
                     placeholder="Course Name">
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="search-course-form" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <label class="mr-sm-2" for="select-book">Unassigned Course Section</label>
        <div>
            <table class="custom-table" id="show-course-section">
                <thead>
                    <tr>
                        <th></th>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Year</th>
                        <th>C. Hours</th>
                        <th>Section No</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($courseSections as $section) {?>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox" style="padding:3px 5px 3px 5px">
                                <input type="checkbox" onclick="selectCoureSection(event)" class="custom-control-input course-section-check-box"
                                id="<?php echo $section->course_id . ':' . $section->section_id . ':' . $section->semester . ':' . $section->year ?>"
                                value="<?php echo $section->course_id . ':' . $section->section_id . ':' . $section->semester . ':' . $section->year ?>" style="margin: 0">
                                <label class="custom-control-label" for="<?php echo $section->course_id . ':' . $section->section_id . ':' . $section->semester . ':' . $section->year ?>" style="margin: 0"></label>
                            </div>
                        </td>
                        <td><?php echo $section->department; ?></td>
                        <td><?php echo $section->name; ?></td>
                        <td><?php echo $section->semester; ?></td>
                        <td><?php echo $section->year; ?></td>
                        <td><?php echo $section->credit_hours; ?></td>
                        <td><?php echo $section->section_id; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <br>

            <?php echo form_open('/professor/courseSections', array(), array("input-course-name" => $courseFilter)); ?>
            <div class="row">
                <div class="col-md-10">
                    <div style="padding-bottom:10px">
                        <label class="mr-sm-2" for="select-book">Course Section</label>
                        <select class="custom-select" oninput="selectInputCourseSection(event)" id="select-course-section" name="select-course-section">
                            <option value="" selected>Choose Course Section</option>
                            <?php foreach ($courseSections as $section) {?>
                                <option value="<?php echo $section->course_id . ':' . $section->section_id . ':' . $section->semester . ':' . $section->year ?>">
                                <?php echo $section->name . ': ' . $section->section_id . ' (Year ' . $section->year . '  Semester ' . $section->semester . ')'; ?>
                                </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <p style="text-align:center;padding:32px 0 0 0">
                        <button type="submit" class="btn btn-sm btn-success" name="add-to-mycourse-section-form"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add To My Sections</button>
                    </p>
                </div>
            </div>
        </form>
        <!--<p class="error-text">Error</p>-->

        <br>

        <div>
            <label class="mr-sm-2" for="select-book">My Course Section</label>
            <table class="custom-table" id="show-course-section">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th>Name</th>
                        <th>Semester</th>
                        <th>Year</th>
                        <th>C. Hours</th>
                        <th>Section No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($assignedCourseSections as $section) {?>
                    <tr>
                        <td><?php echo $section->department; ?></td>
                        <td><?php echo $section->name; ?></td>
                        <td><?php echo $section->semester; ?></td>
                        <td><?php echo $section->year; ?></td>
                        <td><?php echo $section->credit_hours; ?></td>
                        <td><?php echo $section->section_id; ?></td>
                        <td>
                            <?php echo form_open('/professor/courseSections'); ?>
                            <input type="hidden" name="unassign-section" value="<?php echo $section->course_id . ':' . $section->section_id . ':' . $section->semester . ':' . $section->year ?>">
                            <p style="text-align:center;margin:0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </p>
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
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

        function selectCoureSection(event){
            console.log(event);
            if (catCheckBoxCheck(event.target.className)) {
                var checkBox = document.getElementsByClassName(event.target.className);
                for (var y = 0; y < checkBox.length; y++) {
                    if (checkBox[y].checked) {
                        checkBox[y].checked = false;
                    }
                }
                event.target.checked = true;
                console.log('here');

                document.getElementById('select-course-section').value = event.target.value;

            }else{
                document.getElementById('select-course-section').value = "";
            }
        }

        function selectInputCourseSection(event) {
            var checkBox = document.getElementsByClassName('custom-control-input course-section-check-box');
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