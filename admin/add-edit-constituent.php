<?php include('includes/header.php'); $page="constituent" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <h4>Add/Edit Constituent</h4>
            <div class="box-heading">
                <label>
                    <input type="file" name="input-name" style="display: none;" />
                    <div id="change-profile-image"><i class="fas fa-camera"></i></div>
                </label>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="form-with-placeholder">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="form-with-placeholder">
                                    <label for="">Email Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="form-with-placeholder">
                                    <label for="">Age</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-flag"></i>
                                </div>
                                <div class="form-with-placeholder">
                                    <label for="">Political Party</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">$political.partyname</option>
                                        <option value="">$political.partyname</option>
                                        <option value="">$political.partyname</option>
                                        <option value="">$political.partyname</option>
                                        <option value="">$political.partyname</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="form-with-placeholder">
                                    <label for="">Races</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">$race.name</option>
                                        <option value="">$race.name</option>
                                        <option value="">$race.name</option>
                                        <option value="">$race.name</option>
                                        <option value="">$race.name</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-with-placeholder">
                        <label for="">Why are you running (256 characters)</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-with-placeholder">
                        <label for="">What are you too 5 priorities</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-with-placeholder">
                        <label for="">Bio</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="box-left-side">

                </div>
                <div class="box-right-side">
                    <a href="" class="btn btn-outline-primary">Cancel</a>
                    <a href="" class="btn btn-primary">Save Changes</a>
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