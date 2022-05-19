<?php require_once('../app.php'); ?>
<?php $page = 'MyProfile';
include('../includes/header.php'); ?>
<div class="content-wrp">
    <?php include('../includes/candidates-nav.php') ?>
    <div class="page-title" style="background-image: url('<?php echo BASE_URL ?>/assets/img/page-title-bg.png')">
        <!-- <svg width="1439" class="curved-shape" height="35" viewBox="0 0 1439 35" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1439 35V0H718.5H-1V34.8898C197.63 13.0233 447.313 0 718.5 0C990.142 0 1240.21 13.0671 1439 35Z" fill="white" />
        </svg> -->
        <div class="page-title-front">
            <div class="container">
                <div class="page-left">
                    <h4 class="page-name">Edit My Profile</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="white-box">
                <div class="box-heading">
                    <label>
                        <input type="file" name="input-name" style="display: none;" />
                        <div id="change-profile-image"><i class="fas fa-camera"></i></div>
                    </label>
                </div>
                <div class="box-body">

                    <div class="form-group">
                        <div class="input-group">
                            <!-- <div class="input-group-prepend">
                            <i class="fas fa-user"></i>
                        </div> -->
                            <div class="form-with-placeholder">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                    <i class="fas fa-flag"></i>
                                </div> -->
                                    <div class="form-with-placeholder">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                    <i class="fas fa-envelope"></i>
                                </div> -->
                                    <div class="form-with-placeholder">
                                        <label for="">Email Address</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                    <i class="fas fa-user"></i>
                                </div> -->
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
                                    <!-- <div class="input-group-prepend">
                                    <i class="fas fa-flag"></i>
                                </div> -->
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
                                    <!-- <div class="input-group-prepend">
                                    <i class="fas fa-users"></i>
                                </div> -->
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
                    <div class="form-group form-textarea">
                        <div class="form-with-placeholder">
                            <label for="">Why are you running (256 characters)</label>
                            <textarea class="form-control ckeditor" id="editor1" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <!-- <div class="input-group-prepend">
                                    <i class="fas fa-users"></i>
                                </div> -->
                            <div class="form-with-placeholder">
                                <label for="">What are you too 5 priorities</label>
                                <select name="" class="form-control select2" multiple>
                                    <option value=""></option>
                                    <option value="">$priorities</option>
                                    <option value="">$priorities</option>
                                    <option value="">$priorities</option>
                                    <option value="">$priorities</option>
                                    <option value="">$priorities</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-textarea">
                        <div class="form-with-placeholder">
                            <label for="">Bio</label>
                            <textarea class="form-control ckeditor" id="editor3" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="box-left-side">

                    </div>
                    <div class="box-right-side">
                        <a href="./my-profile.php" class="btn btn-outline-primary">Cancel</a>
                        <a href="./my-profile.php" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footer.php') ?>