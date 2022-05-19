<?php require_once('../app.php'); ?>
<?php $page = 'races';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/constituent-nav.php') ?>
    <div class="page-title" style="background-image: url('<?php echo BASE_URL ?>/assets/img/page-title-bg.png')">
        <!-- <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg> -->
        <div class="page-title-front">
            <div class="container">
                <div class="page-left">
                    <a href="races.php" class="back-arrow"><i data-feather="arrow-left"></i></a>
                    <h4 class="page-name">$race.name</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="white-box stick">
                        <div class="member-profile-card pt-3">
                            <figure class="">
                                <img src="<?php echo BASE_URL ?>/assets/img/fundraiser-2.jpg" alt="" class="w-100">
                            </figure>
                            <div class="member-info-box">
                                <div class="member-info-box-body">
                                    <div class="member-info">
                                        <span class="member-info-h">Party</span>
                                        <span class="member-info-d">$race.party</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Age</span>
                                        <span class="member-info-d">$age</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Year</span>
                                        <span class="member-info-d">$race.year</span>
                                    </div>
                                    <div class="member-info">
                                        <span class="member-info-h">Office ran for</span>
                                        <span class="member-info-d">$officeranfor</span>
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
                        <h4 class="white-box-name">Description</h4>
                        <div class="card-info-head">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h5>Bio</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, natus eius! Ea culpa, delectus quis tempore quae excepturi ipsa voluptate eius quos illum, corrupti alias explicabo enim aspernatur natus quo voluptas repellendus animi dolores eligendi, est quam eveniet officia eos!s</p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <h5>Why are you running</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim possimus nihil optio, architecto, fugit aperiam blanditiis ratione veritatis magni suscipit, ea sed incidunt itaque doloribus deserunt soluta pariatur eveniet quam? Saepe molestias laudantium quam quidem voluptate neque corporis perspiciatis unde!</p>
                                </div>
                            </div>
                            <div class="collapse" id="t_more">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <h5>Office Running</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolores expedita quibusdam, ullam labore iusto, possimus similique dolorum in repellendus nemo fugit est, voluptatibus temporibus atque reiciendis quam! Illo qui in quidem amet odio, aspernatur itaque! Minus ducimus facere aut possimus magni, harum quod maxime debitis magnam optio laboriosam, corrupti hic fuga inventore cupiditate! Rem possimus, accusamus tempore, distinctio explicabo perferendis voluptatum nesciunt commodi quis cupiditate totam, quisquam ratione dignissimos officia quia. Maiores, quas numquam! Quia rerum minima odio deleniti beatae, quaerat iure nam ex, voluptas officiis fugiat consectetur culpa, placeat necessitatibus? Eum quos eaque tempora? Officia, necessitatibus libero.</p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <h5>What are you too 5 priorities</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolores expedita quibusdam, ullam labore iusto, possimus similique dolorum in repellendus nemo fugit est, voluptatibus temporibus atque reiciendis quam! Illo qui in quidem amet odio, aspernatur itaque! Minus ducimus facere aut possimus magni, harum quod maxime debitis magnam optio laboriosam, corrupti hic fuga inventore cupiditate! Rem possimus, accusamus tempore, distinctio explicabo perferendis voluptatum nesciunt commodi quis cupiditate totam, quisquam ratione dignissimos officia quia. Maiores, quas numquam! Quia rerum minima odio deleniti beatae, quaerat iure nam ex, voluptas officiis fugiat consectetur culpa, placeat necessitatibus? Eum quos eaque tempora? Officia, necessitatibus libero.</p>
                                    </div>
                                </div>
                            </div>
                            <a data-toggle="collapse" class="more_icon collapsed" href="#t_more" role="button" aria-expanded="false" aria-controls="w_more">
                                Show all information
                                <i class="fas fa-angle-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="white-box">
                        <h4 class="white-box-name">Candidates</h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                <a href="#">
                                    <?php include('../components/candidatesCard.php') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footer.php') ?>