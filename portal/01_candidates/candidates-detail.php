<?php require_once('../app.php'); ?>
<?php $page = 'candidates';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/candidates-nav.php') ?>
    <div class="page-title" style="background-image: url('<?php echo BASE_URL ?>/assets/img/page-title-bg.png')">
        <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg>
        <div class="page-title-front">
            <div class="container">
                <div class="page-left">
                    <a href="races.php" class="back-arrow"><i data-feather="arrow-left"></i></a>
                    <h4 class="page-name">$candidate.name</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="white-box has-tab">
                <div class="top-detail-box">
                    <figure class="thumbnail-image">
                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                    </figure>
                    <div class="detail-top-box-wrapper">
                        <h4 class="detail-name">$candidate.name</h4>
                        <ul class="race-detail-list">
                            <li class="race-detail-box">
                                <div class="race-detail-box-heading">Matched %</div>
                                <div class="race-detail-box-value">
                                    <div class="circle-progress d-inline-block" data-percentage="50">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                        <div class="progress-value">
                                            <div>
                                                50%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="race-detail-box">
                                <div class="race-detail-box-heading">Party</div>
                                <div class="race-detail-box-value">Democrate</div>
                            </li>
                            <li class="race-detail-box">
                                <div class="race-detail-box-heading">Age</div>
                                <div class="race-detail-box-value">45</div>
                            </li>
                            <li class="race-detail-box">
                                <div class="race-detail-box-heading">Race</div>
                                <div class="race-detail-box-value">$race.name</div>
                            </li>
                        </ul>
                    </div>
                    <div class="ml-auto">
                        <button href="#" data-toggle="tooltip" title="Vote Now" class="thumbs-up-icon lg d-inline-block ml-2"><i data-feather="thumbs-up"></i></button>
                        <a href="#DonateNow" data-toggle="modal" class="donate-icon lg d-inline-block ml-2 text-center"><span class="d-block" data-toggle="tooltip" title="Donate Now"><i data-feather="heart"></i></span></a>
                    </div>
                </div>
                <ul class="nav nav-tabs white-box-tab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#Overview" role="tab">Overview</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#Races" role="tab">Races</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane show active" id="Overview" role="tabpanel">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h5>Bio</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolores expedita quibusdam, ullam labore iusto, possimus similique dolorum in repellendus nemo fugit est, voluptatibus temporibus atque reiciendis quam! Illo qui in quidem amet odio, aspernatur itaque! Minus ducimus facere aut possimus magni, harum quod maxime debitis magnam optio laboriosam, corrupti hic fuga inventore cupiditate! Rem possimus, accusamus tempore, distinctio explicabo perferendis voluptatum nesciunt commodi quis cupiditate totam, quisquam ratione dignissimos officia quia. Maiores, quas numquam! Quia rerum minima odio deleniti beatae, quaerat iure nam ex, voluptas officiis fugiat consectetur culpa, placeat necessitatibus? Eum quos eaque tempora? Officia, necessitatibus libero.</p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h5>Why are you running (256 characters)</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolores expedita quibusdam, ullam labore iusto, possimus similique dolorum in repellendus nemo fugit est, voluptatibus temporibus atque reiciendis quam! Illo qui in quidem amet odio, aspernatur itaque! Minus ducimus facere aut possimus magni, harum quod maxime debitis magnam optio laboriosam, corrupti hic fuga inventore cupiditate! Rem possimus, accusamus tempore, distinctio explicabo perferendis voluptatum nesciunt commodi quis cupiditate totam, quisquam ratione dignissimos officia quia. Maiores, quas numquam! Quia rerum minima odio deleniti beatae, quaerat iure nam ex, voluptas officiis fugiat consectetur culpa, placeat necessitatibus? Eum quos eaque tempora? Officia, necessitatibus libero.</p>
                            </div>
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
                </div>
                <div class="tab-pane" id="Races" role="tabpanel">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/race-detail.php">
                                    <?php include('../components/raceCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/race-detail.php">
                                    <?php include('../components/raceCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/race-detail.php">
                                    <?php include('../components/raceCard.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/race-detail.php">
                                    <?php include('../components/raceCardPast.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/race-detail.php">
                                    <?php include('../components/raceCardPast.php') ?>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/race-detail.php">
                                    <?php include('../components/raceCardPast.php') ?>
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