<?php require_once('../app.php'); ?>
<?php $page = 'races'; $portal = 'constituent';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/constituent-nav.php') ?>
    <div class="page-title" style="background-image: url('<?php echo BASE_URL ?>/assets/img/page-title-bg.png')">
        <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg>
        <div class="page-title-front">
            <div class="container">
                <div class="page-left">
                    <h3 class="page-name">Races</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <?php include('../components/raceCard.php') ?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <?php include('../components/raceCard.php') ?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <?php include('../components/raceCard.php') ?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <?php include('../components/raceCard.php') ?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <?php include('../components/raceCard.php') ?>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <?php include('../components/raceCard.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php include('../includes/footer.php') ?>