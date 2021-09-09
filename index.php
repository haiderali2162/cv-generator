<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV MAKER</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper">

        <div class="welcome-heading">
            <h1> Welcome in CV Maker </h1>
            <h4>by NH DEVELOPER</h4>
        </div>

        <div class="cv-form">
            <form action="view-cv.php" method="POST" enctype="multipart/form-data">

                <fieldset>
                    <legend>Personal Info</legend>
                    <input type="text" name="fname" id="fname" placeholder="First Name">
                    <input type="text" name="lname" id="lname" placeholder="Last Name">
                    <input type="text" name="address" id="address" placeholder="Address">
                    <input type="text" name="contact-no" id="contact-no" placeholder="Contact No.">
                    <input type="email" name="email" id="email" placeholder="E-Mail">

                    <input type="file" name="dp" accept="image/*">
                </fieldset>
                <!-- end of the Personal Info fieldset -->

                <fieldset>
                    <legend>Summary</legend>
                    <textarea name="summary" id="summary" cols="50" rows="20" placeholder="Write a brief summary of yourself"></textarea>
                </fieldset>


                <fieldset>
                    <legend>Career</legend>
                    <?php for ($i = 0; $i < 5; ++$i) { ?>
                        <div class="career-date-group">
                            <input type="text" name="job-title-<?= ($i + 1); ?>" id="job-title-<?= ($i + 1); ?>" placeholder="Job Title">
                            <input type="text" name="company-name-<?= ($i + 1); ?>" id="company-name-<?= ($i + 1); ?>" placeholder="Company Name">
                            <label for="cr-s-date-<?= ($i + 1); ?>">Start Date</label>
                            <input type="date" name="cr-s-date-<?= ($i + 1); ?>" id="cr-s-date-<?= ($i + 1); ?>">

                            <?php if ($i != 0) { ?>
                                <label for="cr-e-date-<?= ($i + 1); ?>">End Date</label>
                                <input type="date" name="cr-e-date-<?= ($i + 1); ?>" id="cr-e-date-<?= ($i + 1); ?>">
                            <?php } else {
                                echo '<strong>Present</strong>';
                            } //end of the else 
                            ?>
                            <textarea name="ca-desc-<?= ($i + 1); ?>" id="ca-desc-<?= ($i + 1); ?>" cols="50" rows="20"></textarea>

                        </div>
                        <!-- end of career date group -->

                    <?php } ?>
                </fieldset>
                <!-- end of the career fieldset -->

                <fieldset>
                    <legend>Education</legend>

                    <div class="university-info">
                        <input type="text" name="uni-name" id="uni-name" placeholder="University Name">
                        <input type="text" name="modules" id="modules" placeholder="Course Modules">
                        <textarea name="uni-course-info" id="uni-course-info" cols="50" rows="20" placeholder="Course Details"></textarea>
                        <label>Start Date</label>
                        <input type="date" name="uni-start-date" id="uni-start-date">
                        <label>End Date</label>
                        <input type="date" name="uni-end-date" id="uni-end-date">
                    </div>
                    <!-- end of university info -->

                    <div class="college-info">
                        <input type="text" name="colg-name" id="colg-name" placeholder="college Name">
                        <input type="text" name="subjects" id="subjects" placeholder="Course Modules">
                        <textarea name="colg-course-info" id="colg-course-info" cols="50" rows="20" placeholder="Course Details"></textarea>
                        <label>Start Date</label>
                        <input type="date" name="colg-start-date" id="colg-start-date">
                        <label>End Date</label>
                        <input type="date" name="colg-end-date" id="colg-end-date">
                    </div>
                    <!-- end of the college info -->

                    <div class="school-info">
                        <input type="text" name="school-name" id="school-name" placeholder="School Name">
                        <textarea name="school-course-info" id="school-course-info" cols="50" rows="20" placeholder="school course details"></textarea>
                        <label>Start Date</label>
                        <input type="date" name="school-start-date" id="school-start-date">
                        <label>End Date</label>
                        <input type="date" name="school-end-date" id="school-end-date">
                    </div>
                    <!-- end of the school info -->

                </fieldset>
                <!-- end of the education fieldset -->


                <fieldset>
                    <legend>Skills</legend>

                    <?php for ($i = 1; $i <= 5; ++$i) { ?>
                        <div class="skills">
                            <input type="text" name="skill-<?= $i; ?>" id="skill-<?= $i; ?>" placeholder="Skill Name">
                            <input type="text" name="skill-level-<?= $i; ?>" id="skill-level-<?= $i; ?>" placeholder="Skill Proficiancy 10/10">
                        </div>
                    <?php } ?>
                </fieldset>


                <fieldset>
                    <legend>Social Accounts</legend>

                    <input type="text" name="fb" id="fb" placeholder="facebook">
                    <input type="text" name="twitter" id="twitter" placeholder="twitter">
                    <input type="text" name="insta" id="insta" placeholder="instagram">
                    <input type="text" name="link" id="link" placeholder="LinkedIn">
                </fieldset>

                <input type="submit" value="Generate CV" name="submit">
                <input type="reset" value="Clear">

            </form>
        </div>


    </div>


</body>

</html>