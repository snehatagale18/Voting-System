<?php include('includes/header.php'); $page="race" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Races</div>
                </div>
            </div>
            <div class="box-body">
                <a href="./add-edit-race.php" class="btn btn-primary"><i data-feather="plus"></i> Add Race</a>
                <div class="table-responsive  mt-1">
                    <table class="table select-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Year</th>
                                <th>Term</th>
                                <th>Ran For</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <h6><a href="./race-detail.php">$race.name</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$race.type</td>
                                <td>$race.year</td>
                                <td>$race.term</td>
                                <td>$office.ran.for</td>
                                <td>
                                    <div class="badge badge-opacity-success">Present</div>
                                </td>
                                <td>
                                    <div class="dropdown settings-drop">
                                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                            <a class="dropdown-item" href="./add-edit-race.php">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <h6><a href="./race-detail.php">$race.name</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$race.type</td>
                                <td>$race.year</td>
                                <td>$race.term</td>
                                <td>$office.ran.for</td>
                                <td>
                                    <div class="badge badge-opacity-success">Present</div>
                                </td>
                                <td>
                                    <div class="dropdown settings-drop">
                                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                            <a class="dropdown-item" href="./add-edit-race.php">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex ">
                                        <div>
                                            <h6><a href="./race-detail.php">$race.name</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$race.type</td>
                                <td>$race.year</td>
                                <td>$race.term</td>
                                <td>$office.ran.for</td>
                                <td>
                                    <div class="badge badge-opacity-warning">Past</div>
                                </td>
                                <td>
                                    <div class="dropdown settings-drop">
                                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                            <a class="dropdown-item" href="./add-edit-race.php">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <h6><a href="./race-detail.php">$race.name</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$race.type</td>
                                <td>$race.year</td>
                                <td>$race.term</td>
                                <td>$office.ran.for</td>
                                <td>
                                    <div class="badge badge-opacity-warning">Past</div>
                                </td>
                                <td>
                                    <div class="dropdown settings-drop">
                                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                            <a class="dropdown-item" href="./add-edit-race.php">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <h6><a href="./race-detail.php">$race.name</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$race.type</td>
                                <td>$race.year</td>
                                <td>$race.term</td>
                                <td>$office.ran.for</td>
                                <td>
                                    <div class="badge badge-opacity-warning">Past</div>
                                </td>
                                <td>
                                    <div class="dropdown settings-drop">
                                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                            <a class="dropdown-item" href="./add-edit-race.php">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i><i class="input-helper"></i></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <h6><a href="./race-detail.php">$race.name</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>$race.type</td>
                                <td>$race.year</td>
                                <td>$race.term</td>
                                <td>$office.ran.for</td>
                                <td>
                                    <div class="badge badge-opacity-warning">Past</div>
                                </td>
                                <td>
                                    <div class="dropdown settings-drop">
                                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="settings"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                            <a class="dropdown-item" href="./add-edit-race.php">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>
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