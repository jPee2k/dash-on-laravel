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

// custom fields
// const $customFieldsArea = $('#custom-fields-area');
// let textInputsCounter = 1;
// let textareasCounter = 1;
// let imageInputsCounter = 1;
//
// $('.dropdown .dropdown-menu #text').click(function () {
//     const $element =
//         '<div class="form-group">' +
//             '<label for="text' + textInputsCounter + '">Text</label>' +
//             '<input placeholder="Enter the custom text" novalidate="novalidate" name="text[]" type="text" id="text' + textInputsCounter + '" class="form-control">' +
//         '</div>';
//
//     $customFieldsArea.append($element);
//     textInputsCounter++;
// });
//
// $('.dropdown .dropdown-menu #textarea').click(function () {
//     const asd = $('<textarea class="summernote form-control" placeholder="Insert the custom data" novalidate="novalidate" name="textarea[]" cols="50" rows="10"></textarea>');
//
//
//     asd.summernote({
//         airMode: false,
//         tabsize: 4,
//         height: 300
//     });
//
//     const $element =
//         '<div class="form-group">' +
//         asd.innerText +
//         '</div>';
//
//     $customFieldsArea.append($element);
//     textareasCounter++;
// });
//
// $('.dropdown .dropdown-menu #image').click(function () {
//     const $element =
//         '<div class="custom-file form-group">' +
//             '<label for="image' + imageInputsCounter + '" class="custom-file-label">Image</label>' +
//             '<input name="image[]" type="file" id="image' + imageInputsCounter + '" class="custom-file-input form-control">' +
//         '</div>';
//
//     $customFieldsArea.append($element);
//     imageInputsCounter++;
// });
