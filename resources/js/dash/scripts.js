// uploading image-name
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

// flash
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);

// summernote
$(function () {
    $('#summernote').summernote({
        airMode: false,
        tabsize: 4,
        height: 300
    });
});

// TODO ajax make slug
// function makeSlug(e){
//     $.ajax(
//
//     )
//     $('input[name="slug"]')
// }
