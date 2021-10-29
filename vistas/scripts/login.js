$("#frmAcceso").on('submit',function(e)
{
    e.preventDefault();
    username=$("#usuario").val();
    password=$("#password").val();
    if ($("#usuario").val()=="" || $("#password").val()=="") {
        Swal.fire(
            'Opss',
            'Asegurate de llenar todos los campos',
            'question'
            )
    }
    else{
        $.post("../ajax/usuario.php?op=verificar",
            {"usuario":usuario,"password":password},
            function(data)
            {
                console.log(data);
                if (data!="null")
                {
                    $(location).attr("href","principal.php");            
                }
                else
                {
                    Swal.fire({
                       
                        title: 'datos incorrectos'
          
                    })
                }

            });

    }



})