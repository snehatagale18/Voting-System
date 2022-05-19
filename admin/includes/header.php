<?php require_once('../app.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Informed Elect </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/default.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/button.css">
    <link href="<?php echo BASE_URL; ?>/assets/plugins/fontawesome/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/plugins/chosen_v1.3.0/chosen.min.css">
    

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/vertical-layout-light/new.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/shares.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/layouts.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/quick-links.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/form.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/profile-card.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/race-card.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/progress-meter.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/permissions.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/icheck.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/feedback-form.css">
    <!-- endinject -->



    <!-- plugins:js -->
    
    <!-- jQuery 2.0.2 -->
    <script src="<?php echo BASE_URL; ?>/assets/plugins/jquery.js"></script>
    
    <script src="<?php echo BASE_URL; ?>/assets/plugins/jqueryui.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-4/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/plugins/bootstrap-4/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/assets/plugins/chosen_v1.3.0/chosen.jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/plugins/ajax-chosen/ajax-chosen.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/assets/plugins/iCheck/icheck.js"></script>

</head>

<body class="body-wrapper">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <i data-feather="menu"></i>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="../assets/img/logo.png" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="../assets/img/logo.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item py-3 border-bottom">
                                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                                <span class="badge badge-pill badge-primary float-right">View all</span>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i data-feather="bell"></i>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                                    <p class="fw-light small-text mb-0"> Just now </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i data-feather="bell"></i>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                                    <p class="fw-light small-text mb-0"> Private message </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item py-3">
                                <div class="preview-thumbnail">
                                    <i data-feather="bell"></i>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                                    <p class="fw-light small-text mb-0"> 2 days ago </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                            </div>
                            <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a> -->
                            <a class="dropdown-item" href="../index.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'home') {
                                                echo 'active';
                                            } ?> " href="index.php">
                            <i data-feather="grid"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Profiles</li>
                    <li class="nav-item <?php if ($page == 'constituent') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="./profiles.php">
                            <i data-feather="user"></i>
                            <span class="menu-title">Profiles</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if ($page == 'share') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="./shares.php">
                            <i data-feather="layout"></i>
                            <span class="menu-title">Local</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if ($page == 'race') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="./races.php">
                            <i data-feather="users"></i>
                            <span class="menu-title">Races</span>
                        </a>
                    </li>

                    <li class="nav-item nav-category">Settings</li>
                    <li class="nav-item <?php if ($page == 'role') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="./roles-permissions.php">
                            <i data-feather="lock"></i>
                            <span class="menu-title">Roles & Permissions</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if ($page == 'questions') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="./questions.php">
                            <i data-feather="help-circle"></i>
                            <span class="menu-title">Surveys</span>
                        </a>
                    </li>
                </ul>
            </nav>