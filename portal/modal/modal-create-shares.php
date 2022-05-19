<div class="modal fade create-post" id="create-post" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create a share</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" style="width: 100%;">
                    <div class="post-upload">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <figure class="user-image">
                                    <img src="<?php echo BASE_URL ?>/assets/img/avatar.png" alt="">
                                </figure>
                                <div class="both-post-wrp">
                                    <div class="create-post-wrp">
                                        <textarea type="text" class="form-control no-border" rows="2" placeholder="Share something..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="float-left">
                    <a href="#" class="circle-icon"><i data-feather="image"></i></a>
                    <a href="#" class="circle-icon"><i data-feather="paperclip"></i></a>
                    <a href="#" class="circle-icon"><i data-feather="file-text"></i></a>
                    <input type="file" name="input-name" style="display: none;" />
                </div>
                <a href="#" class="btn btn-danger btn-sm pull-right">Share</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>