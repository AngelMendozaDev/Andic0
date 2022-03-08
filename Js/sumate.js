function newUser() {
    $.ajax({
        url: 'Controllers/newUs.php',
        type: 'POST',
        data: $('#form-voluntieer').serialize(),
        success: function(response) {
            if (response == 1) {
                $('#form-voluntieer')[0].reset();
                $('#closeModal').click();
                swal({ title: "Registro exitoso!", text: "Nos pondremos en contracto contigo \n \n ANDIC A.C.", icon: "success" });
            } else if (response == -1) {
                $('#form-voluntieer')[0].reset();
                $('#closeModal').click();
                swal({ title: "Registro duplicado!", text: "Parece que ya te registraste con anterioridad \n \n ANDIC A.C.", icon: "info" });
            }
        }
    });
    return false;
}

function serviceSocial() {
    $.ajax({
        url: 'Controllers/serviceSocial.php',
        type: 'POST',
        data: $('#serviceS-form').serialize(),
        success: function(response) {
            if (response == 1) {
                $('#serviceS-form')[0].reset();
                $('#closeModalS').click();
                swal("ANDIC A.C.", "Información enviada correctamente!", "success");
            }
        }
    });

    return false;
}