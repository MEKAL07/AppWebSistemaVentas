<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Model\TCliente;
use DB;

class ClienteController extends Controller
{
	
	public function actionRegistrar(Request $request)
	{
		
		if($_POST){
			$tCliente= new TCliente();

			$tCliente->dniCliente=$request->input('txtDni');
			$tCliente->nombre=$request->input('txtnombre');
			$tCliente->apellido=$request->input('txtApellido');
			$tCliente->direccion=$request->input('txtDirecion');
			$tCliente->email=$request->input('txtEmail');
			$tCliente->telefono=$request->input('txtTelefono');
			$tCliente->sexo=$request->input('txtSexo');
			$tCliente->fechaRegistro=date('Y-m-d H:m:s');
			$tCliente->fechamodificacion=date('Y-m-d H:m:s');
			
			$tCliente->save();
		}

		return view('cliente/registrar');
	}

	public function actionVer(){
		return view('cliente/ver');
	}

	public function actionEditar(){
		return view('cliente/editar');
	}
}
?>