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

// show\hide field form on template page
const $fieldFormWrapper = $('#field-form');
const $fieldFormBtn = $('#add-form-field');

$fieldFormBtn.click(function () {
    if ($fieldFormWrapper.css('display') === 'none') {
        $fieldFormWrapper.show();
        $fieldFormBtn.text('Hide');
    } else {
        $fieldFormWrapper.hide();
        $fieldFormBtn.text('Add field');
    }
});

const $saveFieldBtn = $('#field-edit .form-sbt');

$saveFieldBtn.click(function (e) {
    e.preventDefault(0);

    const $fieldForm = document.getElementById('field-edit');
    const formData = new FormData($fieldForm);
    const token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
            url: '/admin/fields',
            type: 'POST',

            headers: {
                'X-CSRF-Token': token
            },

            data: formData,
            dataType: 'json',
            cache: false,
            processData: false,
            contentType: false,

            success: function (response) {
                if (typeof response.info !== 'undefined') {
                    console.log(response.info);
                }
            },

            error: function (response) {
                if (typeof response.errors !== 'undefined') {
                    console.log(response.errors);
                }
            }
        }
    );
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
