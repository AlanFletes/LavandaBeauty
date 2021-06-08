<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function index(){
		return view('product');
	}
	
	public function getProductos($nombre = 0){
		if($nombre == ""){
			$productos = Producto::orderby('nombre','asc')->select('*')->get();
		}else{
			$productos = Producto::select('*')->get();
		}
		$datos['data'] = $productos;
		echo json_encode($productos);
		exit;
	}
}
