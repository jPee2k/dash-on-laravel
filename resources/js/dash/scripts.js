// token
const token = $('meta[name="csrf-token"]').attr('content');

// useful const
const $fieldsWrapper = $('#fields');

// uploading image-name
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

// flash
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);

// error <small>
$('small.text-danger').delay(9000).fadeOut(350);

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

function touchFieldBlock(id) {
    const $hiddenField = $('.field-area .field-' + id);
    const $minus = $('.field-area-' + id + ' .roll-up-buttons .minus');
    const $plus = $('.field-area-' + id + ' .roll-up-buttons .plus');
    const $title = $('.field-area-' + id + ' .field-title');

    if ($hiddenField.css('display') === 'none') {
        // show
        $plus.hide();
        $minus.show();

        $hiddenField.show();
        $title.hide();
    } else {
        // hide
        $minus.hide();
        $plus.show();

        $hiddenField.hide();
        $title.show();
    }
}

function getSuccessAlert(title = 'The field has been saved') {
    Swal.fire({
        // position: 'top-end',
        type: 'success',
        title: title,
        showConfirmButton: true,
        timer: 3000,
    });
}

function getErrorAlert(title = 'Oops!...', text = 'Something went wrong!') {
    Swal.fire({
        type: 'error',
        title: title,
        text: ' ' + text,
        timer: 3000,
        // footer: '<a href>Why do I have this issue?</a>'
    });
}

function confirmAction() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-primary'
        },
        buttonsStyling: false,
    });

    return swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
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

var isSend = false; // for ajax

// Save New Field uses Ajax Form
const $saveFieldBtn = $('#field-edit .form-sbt');
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
                        hideBlock($fieldFormWrapper, $fieldFormBtn, 'Add field');

                        const $fieldName = $('#field-edit input[name="name"]');
                        const $fieldPrefix = $('#field-edit input[name="prefix"]');
                        const $fieldType = $('#field-edit select[name="type"]');

                        clearFields([$fieldName, $fieldPrefix, $fieldType]);
                        getExistFields($fieldsWrapper);
                        getSuccessAlert();
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

// Update Field uses Ajax Form
function updateField(e, id) {
    e.preventDefault(0);
    addLoader();

    const $fieldForm = document.getElementById('field-update-' + id);
    const formData = new FormData($fieldForm);

    const url = $('#field-update-' + id).data('url');

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

                    const $fieldPrefix = $('#prefix-' + id);

                    if (isset(response.prefix)) {
                        $fieldPrefix.val(response.prefix);
                    }

                    if (isset(response.name) && isset(response.type)) {
                        $('.field-area-' + id + ' .field-title').text(`${response.type} - ${response.name}`);
                    }

                    getSuccessAlert();
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
                        let $currInput = $('#field-update-' + id + ' *[name=' + key + ']').closest('.form-group');
                        $errorMessage.appendTo($currInput).delay(3000).slideUp(800, function () {
                            $errorMessage.remove();
                        });
                    });
                }

                isSend = false;
                removeLoader();
            }
        });
    }
}

// Remove Field uses Ajax Form
function removeField(e, id) {
    e.preventDefault(0);

    confirmAction().then(function (result) {
        if (result.value !== true) {
            return false;
        }

        addLoader();

        const $fieldForm = document.getElementById('field-delete-' + id);
        const formData = new FormData($fieldForm);

        const url = $('#field-delete-' + id).data('url');

        if (!isSend) {
            isSend = true;

            $.ajax({
                url: url,
                type: 'DELETE',

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
                        $('.field-area-' + id).remove();
                        getSuccessAlert('The field has been deleted');
                    }

                    isSend = false;
                    removeLoader();
                },

                error: function (response) {
                    if (response) {
                        getErrorAlert();
                    }

                    isSend = false;
                    removeLoader();
                }
            });
        }
    });

}

// Insert fields in view -> dashboard.template.edit
$(function () {
    if ($fieldsWrapper.length) {
        getExistFields($fieldsWrapper);
    }
});

function getExistFields($wrapper) {
    const url = $wrapper.data('url');

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
}

function isset(value) {
    return typeof value !== 'undefined';
}
