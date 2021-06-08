const but = document.querySelector('#boton');

but.addEventListener('click',subir);

function subir(){
	console.log("Subiendo con datos:\nNombre: "+ document.querySelector('#nombre').value + "\nCategoria: "+ document.querySelector('#categoria').value + "\nPrecio: "+document.querySelector('#precio').value+"\nImagen: "+document.querySelector('#imagen').value);
	
	 $.ajax({
               type:"ajax",
               url: '/pullProducto',
               type: 'POST',
               data: {
				   _token: $("#csrf").val(),
					nombre:document.querySelector('#nombre').value,
					categoria:document.querySelector('#categoria').value,
					precio:document.querySelector('#precio').value,
					imagen:document.querySelector('#img64').value
			   },
               dataType: 'json',
               success: function(){
                    alert('bien');
               },
               error: function(xhr, status, error) {
				var err = JSON.parse(xhr.responseText);
				alert(err.Message);
				},
           });
}
