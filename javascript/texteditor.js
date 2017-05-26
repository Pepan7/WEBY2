$(document).ready(function() {
    $('#editujem').summernote({
        lang: 'sk-SK'
    });
    $('#editujem').summernote('code',$('#totoeditovat').html());
    $('#edit').click(function () {
        $('#totoeditovat').html($('#editujem').summernote('code'));
        var editovatelnytext = $('#totoeditovat').html();
        $.ajax({
            type: "POST",
            url: "nakupyuloz.php",
            data: {'data' : editovatelnytext}
        });
    });
});