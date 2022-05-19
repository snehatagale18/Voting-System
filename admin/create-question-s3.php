<?php include('includes/header.php');
$page = "candidate" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Preview Questions</div>
                </div>
                <div class="right-heading">
                    <ul class="nav-indicator">
                        <li class="text-center"><a href="create-question-s1.php"></a></li>
                        <li class="text-center"><a href="create-question-s2.php"> </a></li>
                        <li class="text-center"><a href="create-question-s3.php" class="active show"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="feedback-type feedback-type-questionnaire feedback-type-polls mandatory-feedback-type-questionnaire mandatory-feedback-type-polls feedback-preview feedback-type-lesson-plan feedback-type-client-survey" style="display: block;">
                            <div class="question-block"><label><b>1. First Question</b></label>
                                <div class="clearfix"></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Option 1
                                    </label></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Option 2
                                    </label></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Other
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="question-block"><label><b>2. Second Question</b></label>
                                <div class="clearfix"></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Option 1
                                    </label></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Option 2
                                    </label></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Other
                                    </label>
                                </div>
                            </div>
                            <hr>
                            <div class="question-block"><label><b>3. Third Question</b></label>
                                <div class="clearfix"></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Option 1
                                    </label></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Option 2
                                    </label></div>
                                <div class=""><label class="other_text radio mt-0">
                                        <input type="radio" class="icheck" name="option1"> Other
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="box-left-side">
                        <a href="./create-question-s2.php" class="btn btn-outline-primary disabled">Prev</a>
                    </div>
                    <div class="box-right-side">
                        <a href="./questions.php" class="btn btn-primary">Finish</a>
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
    <!-- questionnaire -->

    <!--/.content-->
    <?php include('includes/footer.php') ?>