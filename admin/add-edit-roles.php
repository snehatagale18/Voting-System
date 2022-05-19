<?php include('includes/header.php');$page="roles" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Add/Edit Roles</div>
                </div>
                <div class="right-heading">
                    <a href="./add-edit-candidates.php" class="btn btn-primary btn-sm"><i data-feather="plus"></i> Add Candidates</a>
                </div>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="form-with-placeholder">
                            <label for="">Role Name <i class="fas fa-asterisk"></i></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-with-placeholder">
                        <label for="">Description</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="box-left-side">
                </div>
                <div class="box-right-side">
                    <a href="#" class="btn btn-primary">Save Changes</a>
                    <a href="#" class="btn btn-outline-primary">Cancel</a>
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