<?php require_once('../app.php'); ?>
<?php include('../includes/header.php') ?>
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
                    <div class="main-heading">Register</div>
                    <div class="sub-heading">Register as Constituent/Candidates: </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <i data-feather="mail"></i>
                    </div>
                    <div class="form-with-placeholder">
                        <label for="">Email Address</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <a href="./verification.php" class="btn btn-danger btn-block">Register</a>
            <div class="social-media-login">
                <div class="or">Or</div>
                <small class="text-muted d-block text-center mb-2">Continue as</small>
                <a href="" id="google-auth-button" class="social-btn" type="button" tabindex="0">
                    <span class="icon"><img src="<?php echo BASE_URL; ?>/assets/img/facebook-icon.svg" alt=""></span>
                    <span class="css-19r5em7"></span>
                </a>
                <a href="" id="google-auth-button" class="social-btn" type="button" tabindex="0">
                    <span class="icon"><img src="<?php echo BASE_URL; ?>/assets/img/google-icon.svg" alt=""></span>
                    <span class="css-19r5em7"></span>
                </a>
                <a href="" id="facebook-auth-button" class="social-btn" type="button" tabindex="0">
                    <span class="icon"><img src="<?php echo BASE_URL; ?>/assets/img/linkedin.png" alt=""></span>
                    <span class="css-19r5em7"></span>
                </a>
                <a href="" id="facebook-auth-button" class="social-btn" type="button" tabindex="0">
                    <span class="icon"><img src="<?php echo BASE_URL; ?>/assets/img/apple.png" alt=""></span>
                    <span class="css-19r5em7"></span>
                </a>
            </div>
            <hr>
            <div class="text-center">Already have account? <a href="./index.php">Login</a></div>
        </div>
    </div>
    <div class="login-image">
        <img src="<?php echo BASE_URL; ?>/assets/img/login-img.png" alt="">
    </div>
</div>
<?php include('../includes/footer.php') ?>