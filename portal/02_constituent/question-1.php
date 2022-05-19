<?php require_once('../app.php'); ?>
<?php include('../includes/header.php') ?>
<div class="login-wrapper">
    <div class="login-white-space login-white-space-full-box">
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="box-heading">
            <div class="heading">
                <h4 class="main-heading">Question 1</h4>
            </div>
            <div class="right-heading">
                <ul class="step-progress"></ul>
            </div>
        </div>
        <div class="box-body">
            <div class="question-box">
                <h4 class="question">How often you use this app?</h4>
                <label class="control control--checkbox">First Answer
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Second Answer
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Third Answer
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox">Fourth Answer
                    <input type="checkbox" />
                    <div class="control__indicator"></div>
                </label>
            </div>
            <div class="question-box">
                <h4 class="question">How often you use facebook?</h4>
                <label class="control control--radio">First Answer
                    <input type="radio" name="radio" checked="checked" />
                    <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">Second Answer
                    <input type="radio" name="radio" />
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-left-side">
                <a href="#" class="btn btn-outline-danger">Previous</a>
            </div>
            <div class="box-right-side">
                <a href="./question-2.php" class="btn btn-danger">Next</a>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php') ?>