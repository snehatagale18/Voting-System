<?php include('includes/header.php');
$page = "race" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="main-heading">
                    Add/Edit Races
                </div>
            </div>
            <div class="box-body">
                <div class="mb-3">
                    <label>
                        <input type="file" name="input-name" style="display: none;" />
                        <div id="change-profile-image"><i class="fas fa-camera"></i></div>
                    </label>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <!-- <div class="input-group-prepend">
                            <i class="fas fa-user"></i>
                        </div> -->
                        <div class="form-with-placeholder">
                            <label for="">Race Name</label>
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
                                    <label for="">Race Type</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">$race.type</option>
                                        <option value="">$race.type</option>
                                        <option value="">$race.type</option>
                                        <option value="">$race.type</option>
                                        <option value="">$race.type</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-prepend">
                                    <i class="fas fa-users"></i>
                                </div> -->
                                <div class="form-with-placeholder">
                                    <label for="">Year</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">$race.year</option>
                                        <option value="">$race.year</option>
                                        <option value="">$race.year</option>
                                        <option value="">$race.year</option>
                                        <option value="">$race.year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="input-group">
                                <!-- <div class="input-group-prepend">
                                    <i class="fas fa-flag"></i>
                                </div> -->
                                <div class="form-with-placeholder">
                                    <label for="">Term</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">$race.term</option>
                                        <option value="">$race.term</option>
                                        <option value="">$race.term</option>
                                        <option value="">$race.term</option>
                                        <option value="">$race.term</option>
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
                                <!-- <div class="input-group-prepend">
                            <i class="fas fa-user"></i>
                        </div> -->
                                <div class="form-with-placeholder">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control">
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
                                    <label for="">Office ran for</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="">$office.ran.for</option>
                                        <option value="">$office.ran.for</option>
                                        <option value="">$office.ran.for</option>
                                        <option value="">$office.ran.for</option>
                                        <option value="">$office.ran.for</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <!-- <div class="input-group-prepend">
                                    <i class="fas fa-users"></i>
                                </div> -->
                        <div class="form-with-placeholder">
                            <label for="">Candidates</label>
                            <select name="" class="form-control select2" multiple>
                                <option value=""></option>
                                <option value="">$candidate.name</option>
                                <option value="">$candidate.name</option>
                                <option value="">$candidate.name</option>
                                <option value="">$candidate.name</option>
                                <option value="">$candidate.name</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group form-textarea">
                    <div class="form-with-placeholder">
                        <label for="">Why are you running for position ?</label>
                        <textarea name="" class="form-control ckeditor" id="editor1" cols="30" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="box-left-side">
                </div>
                <div class="box-right-side">
                    <a href="./races.php" class="btn btn-outline-primary">Cancel</a>
                    <a href="./races.php" class="btn btn-primary">Save Changes</a>
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