<?php include('../modal/modal-create-shares.php') ?>
<?php include('../modal/modal-candidates-list.php') ?>
<?php include('../modal/modal-description.php') ?>
<?php include('../modal/modal-donate.php') ?>
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


    //For choose file
    $('.form-control-file').focus(function() {
        $(this).closest(".form-group").addClass('focus');
    })

    feather.replace()
</script>
<script>
    $('.ckeditor').each(function() {
        CKEDITOR.replace($(this).prop('id'));
    });
</script>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, ipsum?

</body>

</html>