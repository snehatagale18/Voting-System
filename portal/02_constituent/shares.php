<?php require_once('../app.php'); ?>
<?php $page = 'constituent-shares';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/constituent-nav.php') ?>
    <div class="page-title" style="background-image: url('./assets/img/page-title-bg.png')">
        <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg>
        <div class="page-title-front">
            <div class="container">
                <div class="page-left">
                    <h3 class="page-name">Shares</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="white-box stick">
                        <div class="member-profile-card">
                            <div class="member-image-wrp">
                                <figure class="member-image">
                                    <span class="circle-it">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar8.jpg" alt="" class="img-responsive">
                                    </span>
                                </figure>
                            </div>
                            <div class="member-card-name">$member.name</div>
                            <div class="member-profile-status"><i data-feather="check-circle"></i> Verified</div>
                            <div class="member-info-box">
                                <div class="member-info-box-head">
                                    <div class="member-info-box-head-icon"><i data-feather="user"></i></div>
                                    <div class="member-info-box-head-name">Basic Information</div>
                                </div>
                                <div class="member-info-box-body">
                                    <div class="member-info">
                                        <span class="member-info-h">Email</span>
                                        <span class="member-info-d">your@email.com</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Mobile</span>
                                        <span class="member-info-d">+97785452457</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Party</span>
                                        <span class="member-info-d">Democate</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Age</span>
                                        <span class="member-info-d">45</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Race</span>
                                        <span class="member-info-d">Black or African American</span>
                                    </div>
                                </div>
                            </div>
                            <style>

                            </style>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="white-box">
                        <?php include('../components/shares.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footer.php') ?>