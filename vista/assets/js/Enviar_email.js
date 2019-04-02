function sendEmail() {
            

    if (isNotEmpty($("#name")) && isNotEmpty($("#email")) && isNotEmpty($("#subject")) && isNotEmpty($("#body"))) {
      let name = $("#name").val();
      let email = $("#email").val();
      let subject = $("#subject").val();
      let body = $("#body").val();
      let expression = /\w+@\w+\.+[a-z]/;
      
      if(name.length>100){
        alert("El correo es muy largo");
        return;
      }
      if(subject.length>10){
        alert("El telefono es muy largo");
        return;
      }
      if(name != email){
        alert("Los correos no coinciden");
        return;
      }
      if(isNaN(subject)){
          alert("El telefono ingresado no es un numero");
          return;
      }
      if(!expression.test(email) ){
          alert("El email no es valido");
          return;
      }

      if(!expression.test(name) ){
          alert("Repetir email no es valido");
          return;
      }



        $.ajax({
           url: 'sendEmail.php',
           method: 'POST',
           dataType: 'json',
           data: {
               name: name,
               email: email,
               subject: subject,
               body: body
           }, success:function(response){
                if (response.status == "success"){
                    let form = document.querySelector('#form');
                    document.querySelector('#envio').addEventListener('click', function(e){
                        e.preventDefault();
                        form.reset();
                        alert('El correo fue enviado!');
                    },false);
                }else {
                    alert('Intente de nuevo!');
                }
           }
        });
    } else {
      alert("Debe llenar todos los campos");
        return;
    }   
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else
        caller.css('border', '');

    return true;
}