@extends('layout.template')
@section('CuerpoInterno')
	<form  class="formulario" id="frmeditarProductos" action="{{url('producto/editar')}}" method="post">
		<p>EDITAR PRODUCTOSs</p>

		<label>Imagen</label><br>
		<input type="file" name="fileImagen" id="fileImagen" ><br><br>

		<label for="txtnombre">Nombre : </label> <label id="obli">*</label> <br>
		<input type="text" name="txtnombre" id="txtnombre" class="tm" placeholder="nombre del producto"> <br><br>

		<label for="txtnombre">Precio : </label> <label id="obli">*</label> <br>
		<input type="text" name="txtnombre" id="txtnombre" class="tm" placeholder="precio"> <br><br>

		<label for="txtDescripcion">Descripcion : </label> <label id="obli">*</label> <br>
		<input type="text" name="txtDescripcion" id="txtDescripcion" class="tm" placeholder="descripcion"> <br><br>

		<label for="txtnombre">Stock : </label> <label id="obli">*</label> <br>
		<input type="text" name="txtnombre" id="txtnombre" class="tm" placeholder="Stock"> <br><br>

		{{csrf_field()}}
		<input type="button" name="editar" value="REGISTAR PRODUCTO" class="btnRegistrar" onclick="editarProducto();">
	</form>

	<script type="text/javascript">
		function editarProducto(){
			if (confirm('Seguro que quiere Editar')) {
				$('#frmeditarProductos').submit();
			}
		}
	</script>
@endsection