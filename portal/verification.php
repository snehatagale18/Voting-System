<?php require_once('./app.php'); ?>
<?php include('includes/header.php') ?>
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
                    <h4>Verification</h4>
                    <p>Enter code send to your email or mobile </p>
                </div>
            </div>
            <form action="#">
                <div class="verification-boxes">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="form-control">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="form-control">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="form-control">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="form-control">
                    <input type="tel" maxlength="1" pattern="[0-9]" class="form-control">
                </div>
                <style>
                    .verification-boxes {
                        display: flex;
                        display: -webkit-flex;
                        margin-bottom: 40px;
                    }

                    .verification-boxes .form-control {
                        display: block;
                        height: 50px;
                        margin-right: 10px;
                        text-align: center;
                        font-size: 1.25rem;
                        min-width: 0;
                    }

                    .verification-boxes .form-control:last-child {
                        margin-right: 0;
                    }
                </style>
            </form>
            <a href="./complete-profile.php" class="btn btn-danger btn-block">Verify account</a>
            <a href="" class="btn btn-link btn-block text-muted">Resend Token</a>
        </div>
    </div>
    <div class="login-image">
        <img src="<?php echo BASE_URL; ?>/assets/img/login-img.png" alt="">
    </div>
</div>
<?php include('includes/footer.php') ?>