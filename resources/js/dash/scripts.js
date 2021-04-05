// uploading image-name
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

// flash
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
