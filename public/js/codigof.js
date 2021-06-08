console.log("JS Cargado")
var current = document.querySelector('#current')
const pagCat=current.innerHTML
	const productos = [
		{nombre:'JoJo\'s Bizarre Adventure Brochas de maquillaje, 5 piezas, juego de brochas de maquillaje profesional',categoria:'brochas',precio:'100',imagen:'https://images-na.ssl-images-amazon.com/images/I/71QAsu9MuRL._AC_SL1000_.jpg'},
		{nombre:'Pincel de maquillaje suave multifuncional portátil, herramienta de maquillaje de madera de 3cm/2020 pulgadas, 10 Uds., novedad de 1,2',categoria:'brochas',precio:'100',imagen:'https://ae01.alicdn.com/kf/H0f50372c3bee4f22a14a274ca5b814f9P/Pincel-de-maquillaje-suave-multifuncional-port-til-herramienta-de-maquillaje-de-madera-de-3cm-2020-pulgadas.jpg'},
		{nombre:'Set de brochas de maquillaje profesional negras de lujo BEILI de 40/35/15 piezas, cepillos de base de polvo grandes, brochas de maquillaje para pelo de cabra',categoria:'brochas',precio:'100',imagen:'https://ae01.alicdn.com/kf/HTB124MkayDxK1RjSsphq6zHrpXan/Set-de-brochas-de-maquillaje-profesional-negras-de-lujo-BEILI-de-40-35-15-piezas-cepillos.jpg'},
		{nombre:'Docolor-Juego de brochas de maquillaje, 15 uds, para base en polvo, sombra de ojos, pelo sintético, coloridas',categoria:'brochas',precio:'512',imagen:'https://ae01.alicdn.com/kf/H621fb168278e4af798d8cde3e8c26da8d/Docolor-Juego-de-brochas-de-maquillaje-15-uds-para-base-en-polvo-sombra-de-ojos-pelo.jpg'},
		{nombre:'LAIKOU-brocha ideal para manicura de uñas, accesorios para uñas, brocha en color rosa para eliminar polvo de manicura de uñas artísticas en gel',categoria:'brochas',precio:'89',imagen:'https://ae01.alicdn.com/kf/HTB10.42PxnaK1RjSZFtq6zC2VXaW/LAIKOU-brocha-ideal-para-manicura-de-u-as-accesorios-para-u-as-brocha-en-color-rosa.jpg'},
		{nombre:'Brocha de maquillaje multifunción Con garra de gato, brocha para polvos de contorno, herramienta de belleza cosmética',categoria:'brochas',precio:'64',imagen:'https://ae01.alicdn.com/kf/Hfbe61d5c4aa44c068f42ab1b3b168a77A/Brocha-de-maquillaje-multifunci-n-Con-garra-de-gato-brocha-para-polvos-de-contorno-herramienta-de.jpg'},
		{nombre:'LIPHOP-tinte labial líquido de larga duración, 6 colores, resistente al agua, Sexy, mate, maquillaje de tatuaje',categoria:'maquillaje',precio:'53',imagen:'https://ae01.alicdn.com/kf/Ha357ef0c22eb471c8c6ee178ffd1a1ddj/LIPHOP-tinte-labial-l-quido-de-larga-duraci-n-6-colores-resistente-al-agua-Sexy-mate.jpg'},
		{nombre:'Delineador de ojos líquido 2 en 1, con forma de estrella y flores de corazón, maquillaje, doble cara, negro, resistente al agua',categoria:'maquillaje',precio:'102',imagen:'https://ae01.alicdn.com/kf/H7b2a473e26d44b2aac54473c51aef5baw/Delineador-de-ojos-l-quido-2-en-1-con-forma-de-estrella-y-flores-de-coraz.jpg'},
		{nombre:'Lápiz Delineador de ojos líquido, color blanco neón, mate, maquillaje líquido resistente al agua, azul, marrón, negro, cosméticos, 1 Uds.',categoria:'maquillaje',precio:'28',imagen:'https://ae01.alicdn.com/kf/H3384fbf98bbe4383accdf07978ddc776e/L-piz-Delineador-de-ojos-l-quido-color-blanco-ne-n-mate-maquillaje-l-quido-resistente.jpg'},
		{nombre:'Bálsamo labial hidratante, crema para el cuidado de los labios, conjunto de maquillaje, Base de lápiz labial, hidratante, 1 Uds.',categoria:'maquillaje',precio:'16',imagen:'https://ae01.alicdn.com/kf/H2468030ee4c9434eb255c8680926f6bdU/B-lsamo-labial-hidratante-crema-para-el-cuidado-de-los-labios-conjunto-de-maquillaje-Base-de.jpg'},
		{nombre:'Paleta de sombras de ojos acrílicas 9 colores mate nacarado Color tierra, paleta de maquillaje, maquillaje coreano resistente al agua TSLM1',categoria:'maquillaje',precio:'60',imagen:'https://ae01.alicdn.com/kf/H83737b7591654a31a096962cf7085df9V/Paleta-de-sombras-de-ojos-acr-licas-9-colores-mate-nacarado-Color-tierra-paleta-de-maquillaje.jpg'},
		{nombre:'1PC impermeable, de secado rápido pestañas Curling alargamiento maquillaje de pestañas Mascara de partido usar los ojos cosméticos para maquillaje Dropship',categoria:'maquillaje',precio:'25',imagen:'https://ae01.alicdn.com/kf/H0229d9dddfd84b0a98f0ff320ba9265eN/1PC-impermeable-de-secado-r-pido-pesta-as-Curling-alargamiento-maquillaje-de-pesta-as-Mascara-de.jpg'},
		{nombre:'Maquillaje hidratante con cierre de aluminio para el cuidado de la piel, crema frontal de 24K, oro rosa, esencia de 30m, Blanqueador',categoria:'cuidado de la piel',precio:'93',imagen:'https://ae01.alicdn.com/kf/H7fb8e72bac554bd9a00744e70e3259d3i/Maquillaje-hidratante-con-cierre-de-aluminio-para-el-cuidado-de-la-piel-crema-frontal-de-24K.jpg'},
		{nombre:'Juego de cuidado de la piel Facial, esencia de colágeno hidratante de flores de cerezo, parches para los ojos, suero Facial y mascarilla Facial, conjunto de maquillaje de belleza',categoria:'cuidado de la piel', precio:'66',imagen:'https://ae01.alicdn.com/kf/Hb92ae2fbd40840c2887815bd20f51559s/Juego-de-cuidado-de-la-piel-Facial-esencia-de-col-geno-hidratante-de-flores-de-cerezo.jpg'},
		{nombre:'Ácido Hialurónico cara crema blanqueadora para la piel para el cuidado de la cara acné tratamiento hidratante crema de Caracol vibración masajeador',categoria:'cuidado de la piel',precio:'101',imagen:'https://ae01.alicdn.com/kf/Hde556b4dd9e843dca75b0d96bd017330Q/cido-Hialur-nico-cara-crema-blanqueadora-para-la-piel-para-el-cuidado-de-la-cara.jpg'},
		{nombre:'Nuevo 2 Color limpieza mascarilla para espinillas de nariz eliminar espinillas acné Remover Negro claro cabeza cara cuidado productos Kit de TSLM1',categoria:'cuidado de la piel',precio:'15',imagen:'https://ae01.alicdn.com/kf/He4dc7288e00b4116a2b4de5c0e9046898/Nuevo-2-Color-limpieza-mascarilla-para-espinillas-de-nariz-eliminar-espinillas-acn-Remover-Negro-claro-cabeza.jpg'},
		{nombre:'Mascarilla Facial comprimida desechable, mascarilla hidratante de algodón ultrafina, DIY, con envoltorio para cuidado, 30 unidad/bolsa',categoria:'cuidado de la piel',precio:'18',imagen:'https://ae01.alicdn.com/kf/Hf5550f0a9b66463e9c399772acf94b45T/Mascarilla-Facial-comprimida-desechable-mascarilla-hidratante-de-algod-n-ultrafina-DIY-con-envoltorio-para-cuidado-30.jpg'},
		{nombre:'Cápsulas de ácido hialurónico, esencia hidratante, suero facial antienvejecimiento, crema blanqueadora para el cuidado facial, 30 Uds./botella, TXTB1',categoria:'cuidado de la piel',precio:'52',imagen:'https://ae01.alicdn.com/kf/Hf1b5df17ef7e44a7bd6e854940191f09u/C-psulas-de-cido-hialur-nico-esencia-hidratante-suero-facial-antienvejecimiento-crema-blanqueadora-para-el-cuidado.jpg'}		
	]
	const inner ="<li><figure><a class=\"aa-product-img\" href=\"#\"><img width=\"250\" height=\"300\" src=\"||Imagen||\"></a><figcaption><h4 class=\"aa-product-title\"><a href=\"#\">||Titulo||</a></h4><span class=\"aa-product-price\">$||Precio||</span><span class=\"aa-product-price\"><del></del></span><p class=\"aa-product-descrip\">||Descripcion||</p></figcaption></figure><div class=\"aa-product-hvr-content\"><a href=\"#\" data-toggle2=\"tooltip\" data-placement=\"top\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quick-view-modal\"><span class=\"fa fa-search\"></span></a></div></li>"
	const formulario = document.querySelector('#formulario');
	const boton = document.querySelector('#boton');
	console.log("Preps OK")
	const filtrar= ()=>{
		console.log("Filtrando")
		document.getElementById("productos").innerHTML=""
		var miner = inner;
		const texto = formulario.value.toLowerCase()
		for(let producto of productos){
		if(producto.nombre.indexOf(texto) !== -1  && producto.categoria.toLowerCase() == pagCat.toLowerCase()){
			var elemento = document.getElementById("productos")
			minner = inner.replace("||Titulo||",(producto.nombre).substring(0,50))
			minner = minner.replace("||Precio||",producto.precio)
			minner = minner.replace("||Imagen||",producto.imagen)
			elemento.innerHTML += minner;
		}
	}
	if(document.getElementById("productos").innerHTML === ''){
	document.getElementById("productos").innerHTML = `<H1>No se encontró el producto</H1>`
	}
	}
	filtrar();
	boton.addEventListener('click', filtrar)
	//formulario.addEventListener('keyup',filtrar)
