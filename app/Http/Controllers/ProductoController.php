<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* 
*/
class ProductoController extends Controller
{
	
	public function actionRegistrar()
	{
		return view('producto/registrar');
	}

	public function actionVer(){
		return view('producto/ver');
	}

	public function actionEditar(){
		return view('producto/editar');
	}
}

?>