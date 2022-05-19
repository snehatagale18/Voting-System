<?php include('includes/header.php');
$page = "candidate" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Shares Report</div>
                </div>
                <div class="right-heading">

                </div>
            </div>
            <div class="box-body">
                <div class="row no-gutters justify-content-end">
                    <div class="col-sm-7">
                    </div>
                    <div class="col-sm-2">
                        <h5 class="mt-3 text-right">Filter by :</h5>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-prepend">
                                    <i class="fas fa-user"></i>
                                </div> -->
                                <div class="form-with-placeholder">
                                    <label for="">Status</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">New</option>
                                        <option value="">Blocked</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th> Report By </th>
                            <th> Comments </th>
                            <th> Status</th>
                            <th> Submitted date </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Ian Mason </td>
                            <td><a href="#" data-toggle="modal" data-target="#view-post">Inappropriate content</a></td>
                            <td><label class="badge badge-success badge-xs">New</label></td>
                            <td>21 July, 2019</td>
                            <td>
                                <div class="dropdown settings-drop">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#view-post">View Post</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> Fedrick Howard </td>
                            <td><a href="#" data-toggle="modal" data-target="#view-post">Inappropriate content </a></td>
                            <td><label class="badge badge-success badge-xs">New</label></td>
                            <td>25 July, 2019</td>
                            <td>
                                <div class="dropdown settings-drop">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#view-post">View Post</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> Frankie Burke</td>
                            <td><a href="#" data-toggle="modal" data-target="#view-post">Spam</a></td>
                            <td><label class="badge badge-success badge-xs">New</label></td>
                            <td>25 July, 2019</td>
                            <td>
                                <div class="dropdown settings-drop">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#view-post">View Post</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> Jimmy Davis </td>
                            <td><a href="#" data-toggle="modal" data-target="#view-post">Harrassment and bullying</a></td>
                            <td><label class="badge badge-danger badge-xs">Blocked</label></td>
                            <td>25 July, 2019</td>
                            <td>
                                <div class="dropdown settings-drop">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                        <a class="dropdown-item" href="#">Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Brittany Manning </td>
                            <td><a href="#" data-toggle="modal" data-target="#view-post"> Inappropriate Content </a></td>
                            <td><label class="badge badge-danger badge-xs">Blocked</label></td>
                            <td>25 July, 2019</td>
                            <td>
                                <div class="dropdown settings-drop">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                        <a class="dropdown-item" href="#">Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> Terrence Chavez </td>
                            <td><a href="#" data-toggle="modal" data-target="#view-post"> Pornography or sexually abusive content </a></td>
                            <td><label class="badge badge-danger badge-xs">Blocked</label></td>
                            <td>25 July, 2019</td>
                            <td>
                                <div class="dropdown settings-drop">
                                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                        <a class="dropdown-item" href="#">Unblock</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

<!--/.content-->

<!-- Modal -->
<div class="modal fade" id="view-post" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">$report.by.name</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body abusive-post">
                <div class="cc-timeline-wrapper clearfix">
                    <ul>
                        <li>
                            <div class="timeline">
                                <div class="user-timeline">
                                    <span class="user-img">
                                        <img src="http://voterapp.iprototype.loc/assets/img/avatar.png" alt="">
                                    </span>
                                    <span class="post-time">2 min ago</span>
                                </div>
                                <div class="timeline-detail">
                                    <div class="timeline-head">
                                        <h3>Ned Stark</h3>
                                    </div>
                                    <div class="timeline-content">
                                        <div class="post-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing
                                                elit. Atque culpa debitis dicta dignissimos
                                                distinctio
                                                doloremque ducimus ea error eum,
                                                exercitationem
                                                ipsa
                                                iure minima nisi odio provident sequi vitae?
                                                Sit,
                                                suscipit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Block</button>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>