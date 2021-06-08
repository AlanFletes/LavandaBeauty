const fileInput = document.querySelector("#file");
var res = document.querySelector('#result');
var img64;
const html="<img id=\"imagen\" width=\"250\" height=\"300\" src=\"data:image/png;base64,||Imagen||\">";
  fileInput.addEventListener("change", (e) => {
	  res.innerHTML="";
    const file = e.target.files[0];
    const reader = new FileReader();
    reader.onloadend = () => {
      img64 = reader.result
        .replace("data:", "")
        .replace(/^.+,/, "");
	  res.innerHTML = html.replace("||Imagen||",img64);;
	  
    };
    reader.readAsDataURL(file);
  });
  
  const but = document.querySelector('#boton');

but.addEventListener('click',subir);

function subir(){
	 $.ajax({
               type:"ajax",
               url: '/pullProducto',
               type: 'POST',
               data: {
				   _token: $("#csrf").val(),
					nombre:document.querySelector('#nombre').value,
					descripcion:document.querySelector('#descripcion').value,
					categoria:document.querySelector('#categoria').value,
					precio:document.querySelector('#precio').value,
					imagen:img64
			   },
               dataType: 'json',
               success: function(){
                    alert('bien');
               },
               error: function(xhr, textStatus, error) {
        console.log(xhr.responseText);
        console.log(xhr.statusText);
        console.log(textStatus);
        console.log(error);
    },
           });
}