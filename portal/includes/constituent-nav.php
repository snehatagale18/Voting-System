<?php require_once('../app.php'); ?>
<header class="site-header logo--left" role="banner">
    <div class="container">
        <div class="menu-grid">
            <div class="row-item left">
                <div class="responsive-menu-toggler">
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#salmonNavbarContent">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="site-logo">
                    <a class="brand" href=""><img src="<?php echo BASE_URL ?>/assets/img/logo.png" class="skip-lazy"></a>
                </div>
                <div class="primary-menu">
                    <div class="builder-item">
                        <div class="item--menu">
                            <div class="nv-nav-wrap">
                                <div role="navigation" class="collapse navbar-collapse nav-menu-primary" aria-label="Primary Menu" id="salmonNavbarContent">
                                    <ul id="nv-primary-navigation-main" class="primary-menu-ul nav-ul">
                                        <li id="constituentShares" class="menu-item <?php if ($page == 'constituent-shares') {
                                                            echo 'active';
                                                        } ?>">
                                            <a href="<?php echo BASE_URL ?>/portal/02_constituent/shares.php">
                                                <i data-feather="layout"></i>
                                                <span class="menu-item-title-wrap">Local</span>
                                            </a>
                                        </li>
                                        <li id="constituentRaces" class="menu-item <?php if ($page == 'races') {
                                                            echo 'active';
                                                        } ?>">
                                            <div class="menu-item-name-cart">
                                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/races.php">
                                                    <i data-feather="users"></i>
                                                    <span class="menu-item-title-wrap">Races</span>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- <li class="menu-item <?php if ($page == 'candidates') {
                                                            echo 'active';
                                                        } ?>">
                                            <div class="menu-item-name-cart">
                                                <a href="<?php echo BASE_URL ?>/portal/02_constituent/candidates.php">
                                                    <i data-feather="user"></i>
                                                    <span class="menu-item-title-wrap">Candidates</span>
                                                </a>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-item right">
                <div class="secondary-menu">
                    <div class="builder-item">
                        <!-- <div class="item--menu">
                            <div class="nv-nav-wrap">
                                <div role="navigation" class="collapse navbar-collapse nav-menu-primary" aria-label="Primary Menu" id="salmonNavbarContent">
                                    <ul id="nv-primary-navigation-main" class="primary-menu-ul nav-ul">
                                        <li class="menu-item">
                                            <div class="menu-item-name-bell">
                                                <a href="">
                                                    <span class="menu-item-title-wrap"><i data-feather="bell"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="menu-item">
                                            <div class="menu-item-name-search">
                                                <a href="">
                                                    <span class="menu-item-title-wrap"><i data-feather="search"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="item--menu profile-menu <?php if ($page == 'MyProfile') {
                                                            echo 'active';
                                                        } ?>">
                            <div class="dropdown">
                                <div class="dropdown-toggle profile-menu-image" id="dropdownMenuButton" data-toggle="dropdown">
                                    <img src="<?php echo BASE_URL ?>/assets/img/avatar8.jpg" class="img-circle" id="constituentProfile" alt="">
                                </div>
                                <div class="dropdown-menu dropleft" aria-labelledby="dropdownMenuButton">
                                    <div class="p-2">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="profile-menu-image mr-2">
                                                <img alt="Logo" src="<?php echo BASE_URL ?>/assets/img/avatar8.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center"><b>Max Smith</b></div>
                                                <a href="#" class="text-muted text-hover-primary"><small>max@kt.com</small></a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <a class="dropdown-item" href="./my-profile.php">My Profile</a>
                                    <a class="dropdown-item" href="./question-1.php">Update Survey</a>
                                    <a class="dropdown-item" href="./change-password.php">Change Password</a>
                                    <a class="dropdown-item" href="../index.php">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    // Instance the tour
    var tour = new Tour({
        steps: [{
                element: "#constituentShares",
                title: "Shares",
                content: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, ipsum?",
                placement: "bottom"
            },
            {
                element: "#constituentRaces",
                title: "Races",
                content: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, ipsum?",
                placement: "bottom"
            },
            {
                element: "#constituentProfile",
                title: "Profile",
                content: "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, ipsum?",
                placement: "bottom"
            }
        ]
    });

    // Initialize the tour
    tour.init();

    // Start the tour
    tour.start();
</script>