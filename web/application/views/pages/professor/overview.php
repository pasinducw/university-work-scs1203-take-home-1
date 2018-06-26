<link rel="stylesheet" href="<?php echo base_url('assets/css/professor/professorOverview.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">


<div style="padding-top:20px;padding-bottom:30px">

<h2 class="heading1">Overview</h2>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">

            <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Course Sections</p>

            <div class="container-fluid">
                <ul class="course-details">
                    <?php foreach ($courseSections as $section) {?>
                    <li><p><?php echo $section->name; ?> | Semester <?php echo $section->semester; ?> | Year <?php echo $section->year; ?></p></li>
                    <?php }?>                    <br>
                    <p>
                        <a href="<?php echo $viewData['links']['change_course_section']; ?>" class="btn btn-secondary btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i>&nbsp;Change Course Sections</a>
                    </p>
                </ul>
            </div>

            <br>
            <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Lab Sessions</p>

            <div class="container-fluid">
                <ul class="course-lab-details">
                    <?php foreach ($labSessions as $key => $section) {?>
                        <li>
                            <p><?php echo $section[0]->course_name; ?> | Semester <?php echo $section[0]->semester; ?> | Year <?php echo $section[0]->year; ?></p>
                            <ul>
                                <?php foreach ($section as $session) {?>
                                <li><?php echo $session->topic; ?></li>
                                <?php }?>
                            </ul>
                        </li>
                    <?php }?>
                    <br>
                    <p>
                        <a href="<?php echo $viewData['links']['change_lab_sessions']; ?>" class="btn btn-secondary btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i>&nbsp;Change Lab Sessions</a>
                    </p>
                </ul>
            </div>

            <br>
            <!--
            <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;Text Books For Courses</p>

            <div class="container-fluid">
                <ul class="course-textBook-details">
                    <li>
                        <p>Book Name</p>
                        <ul>
                            <li>Course | Semester | Year</li>
                            <li>Course | Semester | Year</li>
                            <li>Course | Semester | Year</li>
                        </ul>
                    </li>
                    <li>
                        <p>Boon Name</p>
                        <ul>
                            <li>Course | Semester | Year</li>
                            <li>Course | Semester | Year</li>
                        </ul>
                    </li>
                    <li><p>Book Name</p></li>
                    <br>
                    <p>
                        <a href="<?php echo $viewData['links']['change_text_books']; ?>" class="btn btn-secondary btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i>&nbsp;Change Books For Courses</a>
                    </p>
                </ul>
            </div>-->

        </div>
        <div class="col-md-4">

            <p class="sesction1"><i class="fa fa-angle-double-right"></i>&nbsp;My Books</p>
            <div class="container-fluid">
                    <ul class="myBook-details">
                        <?php foreach ($books as $book) {?>
                        <li><p><?php echo $book->title; ?></p>
                        </li>
                        <?php }?>
                        <br>
                    </ul>
                </div>
            </div>
    </div>
</div>




</div>