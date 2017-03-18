@extends('layout.template')
@section('CuerpoInternoVer')
<input type="button" name="vender" value="VENDER" id="btnAgregar" onclick="realizarVenta();">
<table border="2">
	<thead>
		<tr>
			<th>idVenta</th>
			<th>idUsuario</th>
			<th>idCliente</th>
			<th>Producto</th>
			<th>U/vendidas</th>
			<th>Fecha Modificacion</th>
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
				<td>
					
					<input type="button" name="editar"  value="DETALLE" id="btnEditar" onclick="verDetalleVenta();">
					<input type="button" name="eliminar"  value="ANULAR" id="btnEliminar" onclick="elimiarProducto();">
				</td>
				
			</tr>
	</tbody>
</table>
<script type="text/javascript">
	function realizarVenta(){
		window.location.href='{{url('venta/agregarventa')}}';
	}

	function verDetalleVenta(){
		window.location.href='{{url('venta/detalleventa')}}';
	}
</script>
@endsection

