var expReg= new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i);
      const validar = ()=>{
      var email1= document.getElementById("email1").value
      if(email1 == ""){
		  alert("Ingresar una dirección de email")
	  }else{
	  if (expReg.test(email1)){
        var email2 = document.getElementById("email2").value
        if(email2===email1){
          alert("Registrado en el sistema, recibirás las últimas noticias en tu correo electrónico!")
        }else{
          alert("Los correos no coinciden!")
        }
      }else{
        alert("La dirección de email es incorrecta.");
      }
	  }
    }
      const boton = document.querySelector("#boton")
    boton.addEventListener('click',validar)