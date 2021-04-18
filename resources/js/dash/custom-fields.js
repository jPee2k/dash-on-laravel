/* --------->>> AJAX <<<--------- */

$select.on('change', buildCF);

// build custom fields
function buildCF() {
    selectedTemplateId = this.value;

    if (selectedTemplateId == 0) {
        $('#save-custom-fields').hide();

        return $customFieldsWrapper.html('');
    }

    addLoader();
    getExistFields($customFieldsWrapper, '#save-custom-fields');
}

// get form
// onsubmit
// $customFieldsForm.on('submit', saveData)
// function saveData() {}

/* --------->>> / AJAX <<<--------- */
