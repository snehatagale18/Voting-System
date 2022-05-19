<?php include('includes/header.php');
$page = "candidate" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Create Survey</div>
                </div>
                <div class="right-heading">
                    <ul class="nav-indicator">
                        <li class="text-center"><a href="create-question-s1.php" class="active show"></a></li>
                        <li class="text-center"><a href="create-question-s2.php"> </a></li>
                        <li class="text-center"><a href="create-question-s3.php"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="form-with-placeholder">
                                    <label for="">Survey Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="form-with-placeholder">
                                    <label for="">Create Survey for</label>
                                    <select name="" class="form-control">
                                        <option value=""></option>
                                        <option value="Candidates">Candidates</option>
                                        <option value="Constituent">Constituent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-textarea">
                            <div class="form-with-placeholder">
                                <label for="">Description</label>
                                <textarea name="" class="form-control ckeditor" id="editor1" cols="30" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="box-left-side">
                    <a href="" class="btn btn-outline-primary disabled">Prev</a>
                </div>
                <div class="box-right-side">
                    <a href="./create-question-s2.php" class="btn btn-primary">Next</a>
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
<!--/.content-->
<?php include('includes/footer.php') ?>