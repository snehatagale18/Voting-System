<?php require_once('../app.php'); ?>
<?php include('../includes/header.php') ?>
<div class="login-wrapper">
    <div class="login-white-space login-white-space-full-box">
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="box-heading">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Complete Profile</div>
                    <div class="sub-heading">Complete your profile to continue: </div>
                </div>
            </div>
            <div class="right-heading">
                <label>
                    <input type="file" name="input-name" style="display: none;" />
                    <div id="change-profile-image"><i class="fas fa-camera"></i></div>
                </label>
            </div>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="form-with-placeholder">
                                <label for="">Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="form-with-placeholder">
                                <label for="">Retype password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-with-placeholder">
                    <label for="">Why are you running (256 characters)</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="form-with-placeholder">
                    <label for="">What are you too 5 priorities</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="form-with-placeholder">
                    <label for="">Bio</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="box-left-side">

            </div>
            <div class="box-right-side">
                <a href="./question-1.php" class="btn btn-danger">Next</a>
            </div>
        </div>
    </div>
</div>
<?php include('../includes/footer.php') ?>