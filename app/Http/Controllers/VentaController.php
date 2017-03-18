<?php

namespace App\Http\COntrollers;

use Illuminate\Http\Request;


class VentaController extends Controller
{
	
	public function actionVer()
	{
		return view('venta/ver');
	}

	public function actionAgregarVenta(){
		return view('venta/agregarventa');
	}
}

?>