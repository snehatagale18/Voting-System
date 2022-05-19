<?php include('includes/header.php');
$page = "candidate" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Create Question</div>
                </div>
                <div class="right-heading">
                    <ul class="nav-indicator">
                        <li class="text-center"><a href="create-question-s1.php"></a></li>
                        <li class="text-center"><a href="create-question-s2.php" class="active show"> </a></li>
                        <li class="text-center"><a href="create-question-s3.php"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="box-body">
                <div class="feedback-type feedback-type-questionnaire mandatory-feedback-type-questionnaire feedback-type-questionnaire-section feedback-type-lesson-plan" style="display: block;">
                    <div class="sort-wrap questionaire-form-wrp">
                        <div class="sort-content">
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> Add questions and select
                                answer types. You can rearrange questions by hover and grab and arrange move
                                icon.
                            </div>
                            <div class="questionnarie-wrap ui-sortable">
                                <div class="more-questionnarie p-20 mb-20 question-option ui-sortable-handle" id="question-id-0" question-id="0">
                                    <div class="sort-block ">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <input type="text" name="feedback[0][question]" class="form-control" placeholder="Question">
                                                <input type="hidden" name="feedback[0][order]" value="0">
                                            </div>
                                            <div class="col-sm-4 select-option-container">
                                                <select class="form-control sel-val select-option">
                                                    <option value="text-options">Text</option>
                                                    <option value="checkbox-options">Multiple Choice
                                                    </option>
                                                    <option value="radio-options" selected=""> Single Answer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="option-wrap">
                                                <div class="options">
                                                    <label class="radio-option">
                                                        <span class="icon-lf icon-circle pull-left"></span>
                                                        <span class="option-input">
                                                            <input type="text" class="form-control" placeholder="Option">
                                                        </span>
                                                        <a href="#" class="delete-options"><span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></a>
                                                    </label>
                                                    <div class="added-option"></div>
                                                    <div class="added-other"></div>
                                                    <a href="javascript:void(0)" class="add-option">Add Option</a>
                                                    <a href="javascript:void(0)" isother="true" class="add-option">Add Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-questionnarie-wrap">
                                    </div>
                                    <div class="questionnarie-action-wrapper bg-lit-gray">
                                        <label class="checkbox">
                                            <input type="checkbox" value="one" class="icheck addediCheck">
                                            required
                                        </label>
                                        <ul class="feedback-box-actions">
                                            <li>
                                                <label class="copy-question" data-toggle="tooltip" title="" data-original-title="Copy"><i class="far fa-copy"></i></label>
                                            </li>
                                            <li>
                                                <label class="delete-question" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="added-questionnarie ui-sortable-handle">
                                </div>
                            </div>
                        </div>
                        <div class="sort-footer">
                            <a href="#" class="btn btn-primary add-more-questionnarie"><i class="fa fa-aw fa-plus"></i> Add Question</a>
                        </div>
                    </div> <!-- end / sort-wrap -->
                </div>
            </div>
            <div class="box-footer">
                <div class="box-left-side">
                    <a href="./create-question-s1.php" class="btn btn-outline-primary disabled">Prev</a>
                </div>
                <div class="box-right-side">
                    <a href="./create-question-s3.php" class="btn btn-primary">Next</a>
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