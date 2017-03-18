@extends('layout.template')
@section('CuerpoInterno')
<form id="frmralizarVenta" class="formulario" action="{{url('venta/agregarventa')}}" method="post" enctype="multipart/form.data">
	<p>REALIZANDO LA VENTA</p>
	<label for="txtidVenta">idVenta </label><label id="obli">*</label><br>
	<input type="text" name="txtidVenta" id="txtidVenta" placeholder="21548700" class="tm"><br><br>

	<label for="txtDniUsuario">Dni usario</label><label id="obli">*</label><br>
	<input type="text" name="txtDniUsuario" id="txtDniUsuario" placeholder="21548700" class="tm"><br><br>

	<label for="txtDniCliente">Dni Cliente</label><label id="obli">*</label><br>
	<input type="text" name="txtDniCliente" id="txtDniCliente" placeholder="21548700" class="tm"><br><br>
txtDniCliente
	<label for="txtProducto">Producto</label><label id="obli">*</label><br>
	<input type="text" name="txtProducto" id="txtProducto" placeholder="nombre del producto" class="tm"><br><br>

	<label for="txtDescripcion">Descripcion</label><label id="obli">*</label><br>
	<input type="text" name="txtDescripcion" id="txtDescripcion" placeholder="descripcion del producto" class="tm"><br><br>

	<label for="txtCantidad">Cantidad</label><label id="obli">*</label><br>
	<input type="text" name="txtCantidad" id="txtCantidad" placeholder="cantidad de producto" class="tm"><br><br>

	<label for="txtPrecioUnitario">Precion Unitario</label><label id="obli">*</label><br>
	<input type="text" name="txtPrecioUnitario" id="txtPrecioUnitario" placeholder="precio del producto" class="tm"><br><br>

	<label for="txtImporte">Importe</label><label id="obli">*</label><br>
	<input type="text" name="txtImporte" id="txtImporte" placeholder="45.00" class="tm"><br><br>

	<label for="txtPrecioTotal">Precio Total</label><label id="obli">*</label><br>
	<input type="text" name="txtPrecioTotal" id="txtPrecioTotal" placeholder="100'000.00" class="tm"><br><br>

	{{csrf_field()}}

	<input type="button" name="vender" id="btnAgregar" value="REALIZAR VENTA" onclick="realizarVenta();">
</form>

<script type="text/javascript">
	
	function realizarVenta() {
		$('#frmralizarVenta').submit();
	}
</script>
@endsection