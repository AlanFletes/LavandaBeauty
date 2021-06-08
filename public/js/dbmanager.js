const fom= document.querySelector("#formulario");
const but= document.querySelector("#boton");
const prod= document.querySelector("#productos");
var current = document.querySelector('#current')
var boxes = [];
const pagCat=current.innerHTML
const inner ="<li><figure><a class=\"aa-product-img\" href=\"#\"><img  width=\"250\" height=\"300\" src=\"data:image/png;base64,||Imagen||\"></a><figcaption><h4 class=\"aa-product-title\"><a href=\"#\">||Titulo||</a></h4><span class=\"aa-product-price\">$||Precio||</span><span class=\"aa-product-price\"><del></del></span><p class=\"aa-product-descrip\">||Descripcion||</p></figcaption></figure><div class=\"aa-product-hvr-content\"><a href=\"#\" id=\"||ids||\" data-toggle2=\"tooltip\" data-placement=\"top\" title=\"\" data-toggle=\"modal\" data-target=\"#quick-view-modal\" data-original-title=\"Ver detalles\"><span class=\"fa fa-search\"></span></a></div></li>";
$('#boton').click(function(){
	fetchRecords(fom.value.toLowerCase());
});
fom.addEventListener('keyup',fetchRecords);
fetchRecords("A");
function fetchRecords(nombre){
	document.getElementById("productos").innerHTML=""
		if(nombre==""){
			nombre=fom.value.toLowerCase();
		}
       $.ajax({
         url: 'getProductos/'+nombre,
         type: 'get',
         dataType: 'json',
         success: function(response){
		var elemento = document.getElementById("productos")
           var len = 0;
           if(response!= null){
              len = response.length;
           }
		   
           if(len > 0){
				
				var miner = inner;
				const texto = fom.value.toLowerCase()
				$contador=1;
			  response.forEach(function(entry) {
				if(entry.Nombre.includes(texto) && entry.Categoria.toLowerCase() == pagCat.toLowerCase()){
					minner = inner.replace("||Titulo||",(entry.Nombre).substring(0,50))
					minner = minner.replace("||Precio||",entry.Precio)
					minner = minner.replace("||Imagen||",entry.Imagen)
					minner = minner.replace("||Descripcion||",entry.Descripcion)
					minner = minner.replace("||ids||","box"+entry.idProduct)
					elemento.innerHTML += minner;
					$contador++;
					var obj = {idProduct:entry.idProduct,Nombre:entry.Nombre,Descripcion:entry.Descripcion,Precio:entry.Precio,Imagen:entry.Imagen};
					boxes.push(obj);
			  }
			}
			  
			  );
			  setClickEvents();
              }
           else{
			   elemento.innerHTML = "<h1>No se encontraron resultados</h1>"
           }

         }
});}
function setClickEvents(){
	
	boxes.forEach(function(box){
		document.querySelector(('#box'+box.idProduct).toString()).addEventListener('click',(a) =>{
		document.querySelector('#prodname').innerHTML = box.Nombre;
		document.querySelector('#prodprec').innerHTML = "$ " + box.Precio;
		document.querySelector('#procdec').innerHTML = box.Descripcion;
		document.querySelector('#prodcat').innerHTML = pagCat;
		var blb=base64toBlob(box.Imagen,'image/png');
		var blblink=window.URL.createObjectURL(blb);
		var im = "<a class=\"simpleLens-lens-image\" data-lens-image=\"||Imagen||\"><img id=\"imged\" src=\"||Imagen||\" class=\"simpleLens-big-image\"></a>";
		var tcont="<a href=\"#\" class=\"simpleLens-thumbnail-wrapper\"\r\n                                  data-lens-image=\""+blblink+"\"\r\n                                     data-big-image=\""+blblink+"\">\r\n                                      <img height='55' width='45' src=\""+blblink+"\">\r\n                                  <\/a>                                    \r\n                                  <a href=\"#\" class=\"simpleLens-thumbnail-wrapper\"\r\n                                     data-lens-image=\""+blblink+"\"\r\n                                     data-big-image=\""+blblink+"\">\r\n                                      <img height='55' width='45' src=\""+blblink+"\">\r\n                                  <\/a>\r\n\r\n                                  <a href=\"#\" class=\"simpleLens-thumbnail-wrapper\"\r\n                                     data-lens-image=\""+blblink+"\"\r\n                                     data-big-image=\""+blblink+"\">\r\n                                      <img height='55' width='45' src=\""+blblink+"\">\r\n                                  <\/a>";
		im = im.replace("||Imagen||",blblink);
		document.querySelector('#slcontainer').innerHTML = tcont;
		document.querySelector('#sldimage').innerHTML = im.replace("||Imagen||",blblink);
	})}
	);
	$ma = document.querySelector('#magarea');

	$orgst = $ma.style;
	$ma.addEventListener('mousemove',function(event){
		$clientX = event.clientX;//- $ma.offsetLeft;
		$clientY = event.clientY;// - $ma.offsetTop;
		$wi = $ma.offsetWidth;
		$mh = $ma.offsetHeight;
		$clientX = ($clientX) / $wi * 15;
		$clientY = $clientY / $mh * 15;
		$im = document.querySelector('#imged');
		//$im.style = 'max-width: 100%;min-width: 100%;position: absolute;left: 50%;top:50%;transform: translate(-50%,-50%);pointer-events: none;';
		$ims = $im.style;
		$im.addEventListener('mouseleave',function(){
			$im.style = $ims;
		});
		$im.style.transform = 'translate(-'+$clientX+'%,-'+$clientY+'%) scale(2)';
		//$ma.style.transform = 'translate(-50%,-50%) scale(2)';
	});
	$ma.addEventListener('mouseleave',function(){
		$ma.style = $orgst;
	});
	reloadStylesheets();
	reloadJs("jquery.simpleLens.js");
}
function base64toBlob(base64Data, contentType) {
    contentType = contentType || '';
    var sliceSize = 1024;
    var byteCharacters = atob(base64Data);
    var bytesLength = byteCharacters.length;
    var slicesCount = Math.ceil(bytesLength / sliceSize);
    var byteArrays = new Array(slicesCount);

    for (var sliceIndex = 0; sliceIndex < slicesCount; ++sliceIndex) {
        var begin = sliceIndex * sliceSize;
        var end = Math.min(begin + sliceSize, bytesLength);

        var bytes = new Array(end - begin);
        for (var offset = begin, i = 0; offset < end; ++i, ++offset) {
            bytes[i] = byteCharacters[offset].charCodeAt(0);
        }
        byteArrays[sliceIndex] = new Uint8Array(bytes);
    }
    return new Blob(byteArrays, { type: contentType });
}
function reloadStylesheets() {
    var queryString = '?reload=' + new Date().getTime();
    $('link[rel="stylesheet"]').each(function () {
        this.href = this.href.replace(/\?.*|$/, queryString);
    });
}
function reloadJs(src) {
    src = $('script[src$="' + src + '"]').attr("src");
    $('script[src$="' + src + '"]').remove();
    $('<script/>').attr('src', src).appendTo('head');
}