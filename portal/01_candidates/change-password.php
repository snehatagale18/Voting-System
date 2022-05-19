<?php require_once('../app.php'); ?>
<?php $page = 'MyProfile';
$portal = 'candidates';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/candidates-nav.php') ?>
    <div class="page-title" style="background-image: url('<?php echo BASE_URL ?>/assets/img/page-title-bg.png')">
        <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg>
        <div class="page-title-front">
            <div class="container">
                <div class="page-left justify-content-center">
                    <h3 class="page-name">Changes Password</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    <div class="white-box">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="form-with-placeholder">
                                        <label for="">Old Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="form-with-placeholder">
                                        <label for="">New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="form-with-placeholder">
                                        <label for="">Retype New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="box-left-side">

                            </div>
                            <div class="box-right-side">
                                <a href="./shares.php" class="btn btn-outline-primary">Cancel</a>
                                <a href="./shares.php" class="btn btn-primary">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footer.php') ?>