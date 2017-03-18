@extends('layout.template')
@section('CuerpoInternoVer')

<input type="button" name="Agregar" value="Agregar" id="btnAgregar" onclick="agregarProducto();">

<table border="2">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre </th>
			<th>Precio</th>
			<th>Stock</th>
			<th>Fecha Registro</th>
			<th>Fecha Modificacion</th>
			<th>Caracteristicas</th>
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
				<input type="button" name="editar" id="btnEditar" value="EDITAR" class="btnEditar" onclick="editarProducto();">
				<input type="button" name="eliminar" id="btnEliminar" value="ELIMINAR" class="btnEliminar" onclick="eliminarProducto();">
			</td>

		</tr>

	</tbody>
</table>

<script type="text/javascript">
	
	function agregarProducto(){
		window.location.href='{{url('producto/registrar')}}';
	}

	function editarProducto(){
		window.location.href='{{url('producto/editar')}}';
	}
</script>
@endsection