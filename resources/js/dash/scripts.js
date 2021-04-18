// token
const token = $('meta[name="csrf-token"]').attr('content');

// useful const
const $templateFieldsWrapper = $('#fields'); // template fields wrapper
const $customFieldsWrapper = $('#custom-fields-area'); // custom fields wrapper

const $select = $('#nav-tab-content #templates'); // select for custom field
const $customFieldsForm = $('form#custom-fields-form'); // custom fields form

// for ajax
var isSend = false;
var selectedTemplateId = $select.children("option:selected").val();

// helpers
function isset(value) {
    return typeof value !== 'undefined';
}

function getWrapperId($wrapper) {
    if (isset($wrapper[0].id)) {
        return $wrapper[0].id;
    }

    return false;
}

// uploading image-name
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

// flash
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);

// error <small>
$('small.text-danger').delay(9000).fadeOut(350);


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


function showBlock(wrapper, button, text) {
    wrapper.show();
    button.text(text);
}

function hideBlock(wrapper, button, text) {
    wrapper.hide();
    button.text(text);
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


function changeUrl($wrapper, search, replace) {
    let url = '';

    if ($wrapper.data('url')) {
        url = $wrapper.data('url').replace(search, replace);
        $wrapper.attr('data-url', url);
    } else if ($wrapper.data('href')) {
        url = $wrapper.data('href') + `/${replace}/edit`;
        $wrapper.attr('href', url);
    }

    return url;
}


/* -------->>> DOC READY <<<-------- */
$(function () {
    // summernote
    $('#summernote').summernote({
        airMode: false,
        tabsize: 4,
        height: 300
    });

    // Insert fields in view -> dashboard.template.edit
    // template-fields.js
    if ($templateFieldsWrapper.length) {
        // load exists template fields
        getExistFields($templateFieldsWrapper);
    }

    if ($customFieldsWrapper.length) {
        // load exists custom fields
        getExistFields($customFieldsWrapper, '#save-custom-fields');
    }
});
/* -------->>> / DOC READY <<<-------- */
