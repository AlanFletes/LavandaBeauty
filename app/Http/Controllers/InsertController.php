<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use DB;

class InsertController extends Controller
{
	
    public function index()
	{
		return view('Subir');
	}
	public function pull(Request $request)
	{
		$insert = DB::table('productos')
			->insert(['nombre' => $request->nombre,
			'descripcion'=>$request->descripcion,
			'categoria' => $request->categoria,
			'precio'=> $request->precio,
			'imagen'=> $request->imagen]);
			return response()->json($insert);
	}
}
