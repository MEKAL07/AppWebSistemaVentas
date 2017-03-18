<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
* 
*/
class UsuarioController extends Controller
{
	
	function actionVer()
	{
		return view('usuario/ver');
	}

	function actionRegistrar(){
		return view('usuario/registrar');
	}

	function actionEditar(){
		return view('usuario/editar');
	}
}
?>