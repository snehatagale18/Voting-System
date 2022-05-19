<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- End custom js for this page-->
<script>
    //Form labels Version 2
    const inputs = document.querySelectorAll(".form-control");

    function addcl() {
        let closest = this.closest(".form-group");
        closest.classList.add("focus");
    }

    function remcl() {
        let closest = this.closest(".form-group");
        if (this.value == "") {
            closest.classList.remove("focus");
        }
    }
    inputs.forEach(input => {
        input.addEventListener("focus", addcl);
        input.addEventListener("blur", remcl);
    });
</script>
<script>
    $('.ckeditor').each(function() {
        CKEDITOR.replace($(this).prop('id'));
    });
    $(".select2").select2();

    feather.replace();

    $(".navbar-toggler").click(function() {
        $("body").toggleClass("sidebar-icon-only");
    });
</script>
<script>
    $(".icheck").iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal'
    });
</script>
<script>
    $(".chosen-select").chosen();
</script>
<script type="text/javascript">
    $(function() {

        var CkbOption =
            '<div class="options"><label> <span class="icon-lf pull-left"></span> <span class="option-input"><input type="text" class="form-control" placeholder="Option"> </span> <span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></label><div class="added-option"></div><div class="added-other"></div><a href="javascript:void(0)" class="add-option">Add Option</a> <a href="javascript:void(0)" class="add-other">Add Other</a></div>';
        var CkbAddOption =
            '<label> <span class="icon-lf pull-left"></span> <span class="option-input"><input type="text" class="form-control" placeholder="Option"> </span> <span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></label>';
        var CkbAddOther =
            '<label> <span class="icon-lf pull-left"></span> <span class="option-input"><span class="form-control"> Other</span> </span> <span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></label>';
        var RdoOption =
            '<div class="options"><label> <span class="icon-lf icon-circle pull-left"></span> <span class="option-input"><input type="text" class="form-control" placeholder="Option"> </span> <span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></label><div class="added-option"></div><div class="added-other"></div><a href="javascript:void(0)" class="add-option">Add Option</a> <a href="javascript:void(0)" class="add-other">Add Other</a></div>';
        var RdoAddOption =
            '<label> <span class="icon-lf icon-circle pull-left"></span> <span class="option-input"><input type="text" class="form-control" placeholder="Option"> </span> <span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></label>';
        var RdoAddOther =
            '<label> <span class="icon-lf icon-circle pull-left"></span> <span class="option-input"><span class="form-control">Other</span></span> <span class="icon-rt pull-right"><i class="far fa-times-circle" aria-hidden="true"></i> </span></label>';
        var AddQuestionnaire =
            '<div class="more-questionnarie question-option p-20 mb-20"><div class="sort-block "><div class="row"><div class="col-sm-8"><input type="text" class="form-control" placeholder="Question"></div><div class="col-sm-4"><select class="chosen-select form-control select-option"><option value="">Text </option><option value="checkbox-options">Checkbox Options </option><option value="radio-options"> Radio Options</option></select></div></div><div class="feedback-form-box"><div class="option-wrap"></div></div></div><div class="more-questionnarie-wrap"></div><div class="questionnarie-action-wrapper bg-lit-gray"><label class="checkbox"><input type="checkbox" class="icheck addediCheck"> required </label><ul class="feedback-box-actions"><li></li><li><label class="copy-question" data-toggle="tooltip" title="" data-original-title="Copy"><i class="far fa-copy" aria-hidden="true"></i></label></li><li><label class="delete-question" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt" aria-hidden="true"></i></label></li></ul></div></div>';
        var TextOption = '';
        $(document).on("change", ".select-option", function() {
            var parentDiv = $(this).closest(".question-option");
            var option = $(this).val();
            if (option == "checkbox-options") {
                parentDiv.find(".option-wrap").html(CkbOption);

            } else if (option == "radio-options") {
                parentDiv.find(".option-wrap").html(RdoOption);

            } else if (option == "text-options") {
                parentDiv.find(".option-wrap").html(TextOption);
            }
        });

        $(document).on("click", ".add-option", function() {
            var parentDiv = $(this).closest(".question-option");
            var selectedoption = parentDiv.find(".sel-val").val();
            console.log(selectedoption);
            if (selectedoption == "checkbox-options") {

                parentDiv.find(".added-option").append(CkbAddOption);
            } else {
                parentDiv.find(".added-option").append(RdoAddOption);
            }
        });
        $(document).on("click", ".add-other", function() {
            var parentDiv = $(this).closest(".question-option");
            var selectedoption = parentDiv.find(".sel-val").val();
            if (selectedoption == "checkbox-options") {

                parentDiv.find(".added-other").html(CkbAddOther);
            } else {
                parentDiv.find(".added-other").html(RdoAddOther);
            }

            $(this).hide();

        });
        $(".add-more-questionnarie").click(function(e) {
            e.preventDefault();
            $(".added-questionnarie").append(AddQuestionnaire);
            setTimeout(function() {
                $(".addediCheck").iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
            }, 100);

        });

        //sortable
        $(".questionnarie-wrap").sortable();
        //$('.homepage-editable-box').sortable();
        $(".homepage-editable-box").sortable({
            handle: ".comp-move-box"
        });

        //submit hide
        $(".submit-action").on("click", function() {
            $(".submit-effect").hide();
        });


    });
</script>

</body>

</html>