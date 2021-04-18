/* --------->>> AJAX <<<--------- */

$select.on('change', buildCF);

// build custom fields
function buildCF() {
    selectedTemplateId = this.value;

    if (selectedTemplateId == 0) {
        $('#save-custom-fields').hide();
        $editTemplateLink.hide();

        return $customFieldsWrapper.html('');
    }

    $editTemplateLink.show();

    addLoader();
    getExistFields($customFieldsWrapper, '#save-custom-fields');
}


$customFieldsForm.on('submit', saveData);
function saveData(e) {
    e.preventDefault(0);

    // get form data

    // ajax
}

/* --------->>> / AJAX <<<--------- */
