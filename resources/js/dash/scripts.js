// token
const token = $('meta[name="csrf-token"]').attr('content');

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

// preloader
function addLoader(currClass = 'body') {
    const $class = $(currClass);
    const loader = '<div class="lds-ring"><div></div><div></div><div></div><div></div></div>';

    $class.css('pointer-events', 'none');
    $class.prepend('<div id="background"></div>');
    $class.append(loader);
}

function removeLoader(currClass = 'body') {
    const $class = $(currClass);

    $class.css('pointer-events', '');
    $('#background').remove();
    $('.lds-ring').remove();
}

// show\hide field form on template page
const $fieldFormWrapper = $('#field-form');
const $fieldFormBtn = $('#add-form-field');

$fieldFormBtn.click(function () {
    if ($fieldFormWrapper.css('display') === 'none') {
        showBlock($fieldFormWrapper, $fieldFormBtn, 'Hide');
    } else {
        hideBlock($fieldFormWrapper, $fieldFormBtn, 'Add field');
    }
});

function showBlock(wrapper, button, text) {
    wrapper.show();
    button.text(text);
}

function hideBlock(wrapper, button, text) {
    wrapper.hide();
    button.text(text);
}

function getSuccessAlert() {
    Swal.fire({
        // position: 'top-end',
        type: 'success',
        title: 'The field has been saved',
        showConfirmButton: true,
        timer: 3000
    });
}

function clearFields(array) {
    array.forEach(function ($field) {
        if ($field.is('input')) {
            $field.val('');
        } else if ($field.is('select')) {
            $field.prop('selectedIndex', 0);
        }
    });
}

const $saveFieldBtn = $('#field-edit .form-sbt');
let isSend = false;

$saveFieldBtn.click(function (e) {
    e.preventDefault(0);
    addLoader();

    const $fieldForm = document.getElementById('field-edit');
    const formData = new FormData($fieldForm);

    const url = $('#field-edit').data('url');

    if (!isSend) {
        isSend = true;

        $.ajax({
                url: url,
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
                    if (typeof response.info !== 'undefined' && response.info === 'success') {
                        getSuccessAlert();
                        hideBlock($fieldFormWrapper, $fieldFormBtn, 'Add field');

                        const $fieldName = $('#field-edit input[name="field-name"]');
                        const $fieldPrefix = $('#field-edit input[name="field-prefix"]');
                        const $fieldType = $('#field-edit select[name="field-type"]');

                        clearFields([$fieldName, $fieldPrefix, $fieldType]);
                    }

                    isSend = false;
                    removeLoader();
                },

                error: function (response) {
                    if (typeof response.responseJSON.errors !== 'undefined') {
                        const errorsObj = response.responseJSON.errors;

                        Object.keys(errorsObj).forEach(function (key) {
                            let errorItems = errorsObj[key];
                            let errorMessage = (typeof errorItems[0] !== 'undefined') ? errorItems[0] : '';

                            let $errorMessage = $('<small class="text-danger">' + errorMessage + '</small>');
                            let $currInput = $('#field-edit *[name=' + key + ']').closest('.form-group');
                            $errorMessage.appendTo($currInput).delay(3000).slideUp(800, function () {
                                $errorMessage.remove();
                            });
                        });
                    }

                    isSend = false;
                    removeLoader();
                }
            }
        );
    }

});

// Insert fields in view -> dashboard.template.edit
$(function () {
    const $fieldsWrapper = $('#fields');

    if (!$fieldsWrapper.length) {
        return false;
    }

    const url = $fieldsWrapper.data('url');

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'html',
        headers: {
            'X-CSRF-Token': token
        },

        success: function (response) {
            if (typeof response !== 'undefined') {
                $fieldsWrapper.html(response);
            }
        },
        error: function (response) {
            //
        }
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
