/* 

Project Name : UME Website

Created By : Arjun Singh from Mypcot

*/
$(document).ready(function(){
    // remove alert messages for empty input fields
    $(document).on('keyup', '.required', function (event) {
        $(this).removeClass('border-danger');
    });

    $(document).on('change', '.required', function (event) {
        $(this).removeClass('border-danger');
        $(this).siblings('.select2-container').find('.selection').find('.select2-selection').removeClass('border-danger');
    });

    $(document).on('keyup', '#website', function (event) {
        $(this).removeClass('border-danger');
    });
});

function submitForm(form_id, form_method,subcriber=null) {
    var form = $("#" + form_id);
    var formdata = false;
    if (window.FormData) {
        formdata = new FormData(form[0]);
    }
    var can = 0;
    $("#" + form_id)
        .find(".required")
        .each(function () {
            var here = $(this);
            if (here.val() == "") {
                here.addClass("border-danger");
                here.siblings(".select2-container")
                    .find(".selection")
                    .find(".select2-selection")
                    .addClass("border-danger");
                can++;
            }
        });
    if (can == 0) {
        $.ajax({
            url: form.attr("action"),
            type: form_method,
            dataType: "html",
            data: formdata ? formdata : form.serialize(),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                form.find(".btn-primary").attr("disabled", true);
                //addLoading();
            },
            success: function (data) {
                form.find(".btn-primary").attr("disabled", false);
                var response = JSON.parse(data);
                if (response["success"] == 0) {
                    Swal.fire({
                        position: 'top',
                        icon: 'error',
                        text: response["message"],
                        showConfirmButton: false,
                        timer: 2000
                    });
                } else {
                    $token_val = document.querySelector('input[name=_token]').value;
                    $("#" + form_id).find('input:not([disabled])').val('');
                    $("#" + form_id).find('select').val('');
                    $("#" + form_id).find('textarea').val('');
                    document.querySelector('#'+form_id+' input[name=_token]').value = $token_val;
                    Swal.fire({
                        position: 'top',
                        icon: 'success',
                        text: response["message"],
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
            },
            error: function () {
                var errorMsg = "Something went wrong, please try again later.";
                form.find(".btn-primary").attr("disabled", false);
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                });
            },
        });
    } else {
        var ih = $(".border-danger").last().closest(".tab-pane").attr("id");
        $("#" + ih + "-tab").click();
    }
}

$('#website').on('change', function(){
    var urlString = $('#website').val();
    var urlPattern = new RegExp('^(https?:\\/\\/)?'+ // validate protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // validate domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // validate OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // validate port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // validate query string
        '(\\#[-a-z\\d_]*)?$','i'); // validate fragment locator
    if(!(!!urlPattern.test(urlString))) {
        $('#website').val('');
        $('#website').addClass('border-danger');
    }
});

function filterNonNumeric(input) {
    var regex = /^\d+$/;
    var inputValue = input.value.trim();
    
    if (!regex.test(inputValue)) {
        input.value = inputValue.replace(/\D/g, '');
    }
}

function handleFileInputChange() {
    var fileInput = document.getElementById('cv_path');
    var file = fileInput.files[0]; // Get the selected file

    if (file) {
        var allowedExtensions = [".pdf", ".doc", ".docx"];
        var fileExtension = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();

        if (!allowedExtensions.includes(fileExtension)) {
            Swal.fire({
                position: 'top',
                icon: 'error',
                text: 'Please select a PDF or DOC file.',
                showConfirmButton: false,
                timer: 3000
            });
            fileInput.value = "";
        }
    }
}

function validateNameInput(input) {
    var regex = /^[A-Za-z\s]+$/;
    var inputValue = input.value.trim();
    
    if (!regex.test(inputValue)) {
        input.value = inputValue.replace(/[^A-Za-z\s]/g, '');
    }
}
