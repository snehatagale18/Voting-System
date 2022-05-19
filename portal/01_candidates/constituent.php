<?php require_once('../app.php'); ?>
<?php $page = 'constituent';
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
                    <h3 class="page-name">Constituent</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="white-box">
                        <h4>Overview by age</h4>
                        <canvas id="myChart" width="400" height="400"></canvas>
                        <script>
                            const ctx = document.getElementById('myChart').getContext('2d');
                            const myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['18-30', '31-40', '41-50', '51-60', '61-70', '71-80'],
                                    datasets: [{
                                        label: '# of Votes',
                                        data: [12, 18, 3, 5, 2, 3],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h4>Overview by gender</h4>
                        <canvas id="myGender" width="400" height="500"></canvas>
                        <script>
                            var ctx2 = document.getElementById("myGender");
                            var myGender = new Chart(ctx2, {
                                type: 'pie',
                                data: {
                                    labels: ['Male', 'Female', 'Others'],
                                    datasets: [{
                                        label: '# of Tomatoes',
                                        data: [12, 19, 3],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.5)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    //cutoutPercentage: 40,
                                    responsive: false,

                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footer.php') ?>