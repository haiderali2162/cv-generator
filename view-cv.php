<?php
session_start();

if (!isset($_POST['submit'])) {
    die('nothing to show');
}

// print_r($_POST);

// echo basename($_FILES['dp']['tmp_name']);
// print_r($_FILES);

$target = "./images/";
$target_file = $target . basename($_FILES['dp']['name']);

if (move_uploaded_file($_FILES['dp']['tmp_name'], $target_file))
    $img_full_path = 'images/' . basename($_FILES['dp']['name']);
else echo "error moving file";
// print_r(getimagesize($_FILES['dp']['tmp_name']));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View CV</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- <i class="fa fa-linkedin-square" aria-hidden="true"></i> -->
    <div class="wrapper">

        <div class="cv-header">
            <div class="name-container fname" draggable="true">
                <h2><?php echo $_POST['fname']; ?></h2>
            </div>
            <div class="img-container" draggable="true">
                <img src="<?php echo $img_full_path; ?>" alt="" width="150" height="150">
            </div>
            <!-- end of img-container -->
            <div class="name-container lname" draggable="true">
                <h2><?php echo $_POST['lname']; ?></h2>
            </div>
            <!-- end of name-container -->
        </div>
        <!-- end of the cv-header -->
        <!-- ================================================================== -->

        <div class="sum-addr-container">
            <section class="summary">
                <h1>Summary</h1>
                <p>
                    <?php echo $_POST['summary']; ?>
                </p>
            </section>
            <section class="addr-info">
                <h1>Contact</h1>
                <div class="contact-info">
                    <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> - <?= $_POST['address']; ?></h3>
                </div>

                <div class="contact-info">
                    <h3><span><i class="fa fa-phone" aria-hidden="true"></i></span> - <?= $_POST['contact-no']; ?></h3>
                </div>

                <div class="contact-info">
                    <h3> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> - <?= $_POST['email']; ?></h3>
                </div>
            </section>
        </div>
        <!-- end of the sum-addr-container -->

        <div class="ca-ed-container">

            <div class="career-info">
                <h1>Career</h1>
                <?php for ($i = 1; $i <= 5; ++$i) { ?>
                    <div class="career-list">
                        <div class="career-date">
                            <?php if ($i == 1) : ?>
                                <h3><?= "Present" ?></h3>
                            <?php else : ?>
                                <h3><?php echo $_POST['cr-e-date-' . $i]; ?></h3>
                            <?php endif; ?>
                            <h3><?php echo $_POST['cr-s-date-' . $i]; ?></h3>
                        </div>
                        <!-- end of the career-date -->
                        <div class="career-detail">
                            <div class="ca-header">
                                <h2 class="job-title"> <?= $_POST['job-title-' . $i]; ?> </h2>
                                <h2 class="company-name"> <?= $_POST['company-name-' . $i]; ?> </h2>
                            </div>
                            <!-- end of the ca-header -->
                            <div class="ca-description">
                                <p><?= $_POST['ca-desc-' . $i]; ?></p>
                            </div>
                            <!-- end of the ca-description -->
                        </div>
                        <!-- end of the career-detail -->
                    </div>
                    <!-- end of the career-list -->
                <?php } ?>

            </div>
            <!-- end of the career-info -->


            <div class="edu-skill-container">

                <div class="edu-container">
                    <h1>Education</h1>
                    <div class="edu-info-container">
                        <h2>University</h2>
                        <div class="edu-info">
                            <h4><?= $_POST['uni-name']; ?></h4>
                            <h4><?= $_POST['uni-start-date'] . '--' . $_POST['uni-end-date']; ?></h4>
                        </div>
                        <!-- end of the edu-info -->
                        <div class="edu-info">
                            <h4>Module</h4>
                            <h4> <?= $_POST['modules']; ?> </h4>
                        </div>
                        <div class="edu-info">
                            <h4>Course Details</h4>
                            <p><?= $_POST['uni-course-info']; ?></p>
                        </div>
                        <!-- end of the edu-info -->
                    </div>
                    <!-- end of the edu-info-container -->

                    <div class="edu-info-container">
                        <h2>College</h2>
                        <div class="edu-info">
                            <h4><?= $_POST['colg-name']; ?></h4>
                            <h4><?= $_POST['colg-start-date'] . '--' . $_POST['colg-end-date']; ?></h4>
                        </div>
                        <!-- end of the edu-info -->
                        <div class="edu-info">
                            <h4>Module</h4>
                            <h4> <?= $_POST['subjects']; ?> </h4>
                        </div>
                        <div class="edu-info">
                            <h4>Course Details</h4>
                            <p><?= $_POST['colg-course-info']; ?></p>
                        </div>
                        <!-- end of the edu-info -->
                    </div>
                    <!-- end of the edu-info-container -->

                    <div class="edu-info-container">
                        <h2>School</h2>
                        <div class="edu-info">
                            <h4><?= $_POST['school-name']; ?></h4>
                            <h4><?= $_POST['colg-start-date'] . '--' . $_POST['colg-end-date']; ?></h4>
                        </div>
                        <!-- end of the edu-info -->
                        <div class="edu-info">
                            <h4>Course Details</h4>
                            <p><?= $_POST['school-course-info']; ?></p>
                        </div>
                        <!-- end of the edu-info -->
                    </div>
                    <!-- end of the edu-info-container -->

                </div>
                <!-- end of the edu-container -->
                <div class="skill-container">
                    <h1>Skills</h1>
                    <?php for ($i = 1; $i <= 5; ++$i) { ?>
                        <?php if (!empty($_POST['skill-' . $i] || !empty($_POST['skill-level-' . $i]))) : ?>
                            <div class="skill-detail">
                                <h4><?= $_POST['skill-' . $i]; ?></h4>
                                <progress min="0" max="10" value="<?= $_POST['skill-level-' . $i]; ?>">
                            </div>
                            <!-- end of the skill-detail -->
                        <?php endif; ?>
                    <?php } ?>
                </div>

            </div>

        </div>
        <!-- end of the ca-ed-container -->


        <footer>

            <div class="social-link">
                <!-- <i class="fa fa-facebook-square" aria-hidden="true"></i> -  -->
                <h5><?= $_POST['fb']; ?></h5>
            </div>
            <div class="social-link">
                <!-- <i class="fa fa-instagram" aria-hidden="true"></i> -  -->
                <h5><?= $_POST['insta']; ?></h5>
            </div>
            <div class="social-link">
                <!-- <i class="fa fa-twitter" aria-hidden="true"></i> -  -->
                <h5><?= $_POST['twitter']; ?></h5>
            </div>
            <div class="social-link">
                <!-- <span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> - -->
                <h5> <?= $_POST['link']; ?></h5>
            </div>
        </footer>


    </div>
    <!-- end of the wrapper -->


</body>

</html>