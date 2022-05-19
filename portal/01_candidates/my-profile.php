<?php require_once('../app.php'); ?>
<?php $page = 'MyProfile';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/candidates-nav.php') ?>
    <div class="page-title" style="background-image: url('<?php echo BASE_URL ?>/assets/img/page-title-bg.png')">
        <!-- <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg> -->
        <div class="page-title-front">
            <div class="container">
                <div class="page-left">
                    <h4 class="page-name">My Profile</h4>
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
                            <div class="text-center">
                                <a href="./edit-my-profile.php" class="btn btn-primary">Edit my profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <h5>Bio</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolores expedita quibusdam, ullam labore iusto, possimus similique dolorum in repellendus nemo fugit est, voluptatibus temporibus atque reiciendis quam! Illo qui in quidem amet odio, aspernatur itaque! Minus ducimus facere aut possimus magni, harum quod maxime debitis magnam optio laboriosam, corrupti hic fuga inventore cupiditate! Rem possimus, accusamus tempore, distinctio explicabo perferendis voluptatum nesciunt commodi quis cupiditate totam, quisquam ratione dignissimos officia quia. Maiores, quas numquam! Quia rerum minima odio deleniti beatae, quaerat iure nam ex, voluptas officiis fugiat consectetur culpa, placeat necessitatibus? Eum quos eaque tempora? Officia, necessitatibus libero.</p>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <h5>Why are you running (256 characters)</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolores expedita quibusdam, ullam labore iusto, possimus similique dolorum in repellendus nemo fugit est, voluptatibus temporibus atque reiciendis quam! Illo qui in quidem amet odio, aspernatur itaque! Minus ducimus facere aut possimus magni, harum quod maxime debitis magnam optio laboriosam, corrupti hic fuga inventore cupiditate! Rem possimus, accusamus tempore, distinctio explicabo perferendis voluptatum nesciunt commodi quis cupiditate totam, quisquam ratione dignissimos officia quia. Maiores, quas numquam! Quia rerum minima odio deleniti beatae, quaerat iure nam ex, voluptas officiis fugiat consectetur culpa, placeat necessitatibus? Eum quos eaque tempora? Officia, necessitatibus libero.</p>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <h5>What are you too 5 priorities</h5>
                                <p><span class="badge badge-primary">$priorities</span> <span class="badge badge-primary">$priorities</span> <span class="badge badge-primary">$priorities</span> <span class="badge badge-primary">$priorities</span> <span class="badge badge-primary">$priorities</span> <span class="badge badge-primary">$priorities</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footer.php') ?>