function sendInfo(){
    $.ajax({
        url:"Controllers/contact.php",
        type:"POST",
        data: $('#form-contact').serialize(),
        success:function(response){
            console.log(response);
            if(response.trim() == 1){
                swal("Meensaje Enviado!","Nos pondremos en contacto contigo muy pronto.","success");
                $('#form-contact')[0].reset();
            }
        }
    });
    return false;
}