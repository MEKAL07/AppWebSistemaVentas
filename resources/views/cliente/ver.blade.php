@extends('layout.template')
@section('CuerpoInternoVer')
<input type="button" name="agregar" id="btnAgregar" value="Agregar" onclick="agregarCliente();">
<table border="2">
	<thead>
		<tr>
			<th>Id cliente</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Dni</th>
			<th>Direccion</th>
			<th>Correo Electronico</th>
			<th>Teléfono</th>
			<th>Sexo</th>
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
				<td></td>
				<td>
					<input type="button" name="editar" id="btnEditar" value="EDITAR" onclick="editarCliente();">
					<input type="button" name="eliminar" id="btnEliminar" value="ELIMINAR" onclick="eliminarCliente();">					
				</td>
			</tr>
		
	</tbody>
</table>
<script type="text/javascript">
	function agregarCliente(){
		window.location.href='{{url('cliente/registrar')}}';
	}

	function editarCliente(){
		window.location.href='{{url('cliente/editar')}}';
	}
</script>
@endsection