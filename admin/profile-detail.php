<?php include('includes/header.php');
$page = "candidate" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box has-tab">
            <div class="top-detail-box">
                <figure class="thumbnail-image">
                    <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                </figure>
                <div class="detail-top-box-wrapper">
                    <h4 class="detail-name">$candidate.name</h4>
                    <ul class="race-detail-list">
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
            </div>
            <nav>
                <div class="nav nav-tabs white-box-tab" id="nav-tab" role="tablist">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Overview" type="button" role="tab" aria-selected="true">Overview</button>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Races" type="button" role="tab" aria-selected="false">Races</button>
                </div>
            </nav>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="Overview" role="tabpanel">
                
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
            <div class="tab-pane fade" id="Races" role="tabpanel">
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
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Powered by : <a href="#" target="_blank">Innovia Group</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<?php include('includes/footer.php'); ?>