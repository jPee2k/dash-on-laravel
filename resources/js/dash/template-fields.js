// show-hide field form on template page
const $fieldFormWrapper = $('#field-form');
const $fieldFormBtn = $('#add-form-field');

$fieldFormBtn.click(function () {
    if ($fieldFormWrapper.css('display') === 'none') {
        showBlock($fieldFormWrapper, $fieldFormBtn, 'Hide');
    } else {
        hideBlock($fieldFormWrapper, $fieldFormBtn, 'Add field');
    }
});

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

/* --------->>> AJAX <<<--------- */

// Save New Field uses Ajax Form
function saveField(e) {
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
                    getExistFields($templateFieldsWrapper);
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
        });
    }
}

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

// Refresh Exists Fields
function getExistFields($wrapper, selector = '') {
    const url = changeUrl($wrapper, 'template-id', selectedTemplateId);

    changeUrl($editTemplateLink, '', selectedTemplateId);

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        headers: {
            'X-CSRF-Token': token
        },

        success: function (response) {
            if (typeof response !== 'undefined') {
                $wrapper.html(response);
            }

            if ($wrapper.children().length && selector) {
                $(selector).show();
            } else if (selector) {
                $(selector).hide();
            }

            removeLoader();
        },
        error: function (response) {
            removeLoader();
        }
    });
}

/* --------->>> / AJAX <<<--------- */
