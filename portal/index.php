<?php require_once('./app.php'); ?>
<?php include('./includes/header.php') ?>
<div class="login-wrapper">
    <div class="login-white-space">
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="login-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Lets get started</div>
                    <div class="sub-heading">Login or Register to continue: </div>
                </div>

            </div>
            <ul class="nav nav-tabs white-box-tab mx-0 mb-4 justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#Candidates" role="tab">Candidates</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#Constituent" role="tab">Constituent</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="Candidates" role="tabpanel">
                    <a href="./01_candidates" class="btn btn-danger btn-block mb-3">Login to continue</a>
                    <a href="./01_candidates/register.php" class="btn btn-outline-danger btn-block mb-3">Register</a>
                </div>
                <div class="tab-pane" id="Constituent" role="tabpanel">
                    <a href="./02_constituent" class="btn btn-danger btn-block mb-3">Login to continue</a>
                    <a href="./02_constituent/register.php" class="btn btn-outline-danger btn-block mb-3">Register</a>
                </div>
            </div>
        </div>
    </div>
    <div class="login-image">
        <img src="<?php echo BASE_URL; ?>/assets/img/login-img.png" alt="">
    </div>
</div>
<?php include('includes/footer.php') ?>