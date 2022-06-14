function newUser() {
        $.ajax({
            url:"Controllers/vol.php",
            type:"POST",
            data: $('#form-voluntieer').serialize(),
            success:function(response){
                console.log(response);
                if(response.trim() == 1){
                    swal("Meensaje Enviado!","Nos pondremos en contacto contigo muy pronto.","success");
                    $('#form-voluntieer')[0].reset();
                }
            }
        });
        return false;
}

function serviceSocial() {
        $.ajax({
            url:"Controllers/ss.php",
            type:"POST",
            data: $('#serviceS-form').serialize(),
            success:function(response){
                console.log(response);
                if(response.trim() == 1){
                    swal("Meensaje Enviado!","Nos pondremos en contacto contigo muy pronto.","success");
                    $('#serviceS-form')[0].reset();
                }
            }
        });
        return false;
}