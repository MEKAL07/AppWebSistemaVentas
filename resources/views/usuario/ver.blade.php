@extends('layout.template')
@section('CuerpoInternoVer')
<input type="button" name="agregar" id="btnAgregar" value="Agregar" onclick="agregarUsuario();">
<table border="2">
	<thead>
		<tr>
			<th>idUsurio</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Dni</th>
			<th>Sexo</th>
			<th>Correo Electronico</th>
			<th>Celular</th>			
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
				<td>
					<input type="button" name="editar" id="btnEditar" value="EDITAR" onclick="editarUsuario();">
					<input type="button" name="eliminar" id="btnEliminar" value="ELIMINAR" onclick="eliminarCliente();">
					
				</td>
			</tr>
		
	</tbody>
</table>
<script type="text/javascript">
	function agregarUsuario(){
		window.location.href='{{url('usuario/registrar')}}';
	}

	function editarUsuario(){
		window.location.href='{{url('usuario/editar')}}';
	}
</script>
@endsection