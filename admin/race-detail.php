<?php include('includes/header.php'); $page="race" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="top-detail-box">
                <figure class="thumbnail-image">
                    <img src="<?php echo BASE_URL ?>/assets/img/concert.jpg" alt="">
                </figure>
                <div class="detail-top-box-wrapper">
                    <h4 class="detail-name">$race.name</h4>
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
                            <div class="race-detail-box-heading">Year</div>
                            <div class="race-detail-box-value">1991</div>
                        </li>
                        <li class="race-detail-box">
                            <div class="race-detail-box-heading">Office ran for</div>
                            <div class="race-detail-box-value">1993</div>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="./add-edit-race.php" class="edit-icon"><i data-feather="edit"></i> Edit</a>
        </div>
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
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <a href="">
                        <div class="candidates-card candidates-card-min">
                            <div class="card-info mb-0">
                                <div class="card-member-info">
                                    <figure class="card-member-image">
                                        <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                    </figure>
                                    <div class="member-name-value">
                                        <div class="card-member-name">$name <br> <b>$surname</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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