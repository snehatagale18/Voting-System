<a href="./candidates-detail.php">
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
            <div class="d-flex ml-auto">
                <div class="ml-3">
                    <div class="candidates-card-head">Matched %</div>
                    <div class="circle-progress" data-percentage="50">
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
                <div class="ml-3">
                    <div class="candidates-card-head">Vote Now</div>
                    <button class="thumbs-up-icon"><i data-feather="thumbs-up"></i></button>
                </div>
            </div>
        </div>
    </div>
</a>