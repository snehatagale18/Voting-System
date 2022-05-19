<div class="card candidates-card">
    <div class="card-info">
        <div class="card-member-info">
            <figure class="card-member-image">
                <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
            </figure>
            <div class="member-name-value">
                <div class="card-member-name">$name <br> <b>$surname</b></div>
            </div>
        </div>
    </div>
    <hr>
    <div class="d-flex justify-content-lg-between align-items-center">
        <h5 class="mb-0">Matched %</h5>
        <div class="ml-auto">
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
    </div>
    <hr>
    <div class="row no-gutters">
        <div class="col-sm-4">
            <div class="card-info-data">
                <h4 class="car-info-data-title">Party</h4>
                <p>$party.name</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-info-data">
                <h4 class="car-info-data-title">Race</h4>
                <p>$race.name</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-info-data">
                <h4 class="car-info-data-title">Position</h4>
                <p>$position</p>
            </div>
        </div>
    </div>
</div>