@extends('layout.template')
@section('CuerpoInterno')
<form id="frmEditarCliente" action="{{url('cliente/editar')}}" method="post" >
		<p>EDITAR CLIENTE</p>

		<!--label for="txtDni">Dni : </label><label id="obli">*</label><br>
		<input type="text" name="txtDni" id="txtDni" class="tm" autocomplete="txtDni" value="{{#tCliente->dni}}"  ><br><br>

		<label for="txtnombre">Nombre : </label><label id="obli">*</label> <br>
		<input type="text" name="txtnombre" id="txtnombre"  class="tm" autocomplete="txtnombre" value="{{#tCliente->nombre}}"  ><br><br>

		<label for="txtApellido">Apellido : </label><label id="obli">*</label><br>
		<input type="text" name="txtApellido" id="txtApellido"  class="tm"  autocomplete="txtApellido" value="{{#tCliente->apellido}}" ><br><br>


		<label for="txtDirecion">Direccion : </label><label id="obli">*</label><br>
		<input type="text" name="txtDirecion" id="txtDirecion"  class="tm"  autocomplete="txtDirecion" value="{{#tCliente->direccion}}" ><br><br>

		<label for="txtEmail">Email : </label><label id="obli">*</label><br>
		<input type="text" name="txtEmail" id="txtEmail"  class="tm"  autocomplete="txtEmail" value="{{#tCliente->correo}}" ><br><br>

		<label for="txtTelefono">Telefono : </label><label id="obli">*</label><br>
		<input type="text" name="txtTelefono" id="txtTelefono"  class="tm"  autocomplete="txtTelefono" value="{{#tCliente->telefono}}" ><br><br>	

		<label for="txtSexo">Sexo : </label><br>
		<select class="tm">
			<option id="f">Femenino</option>
			<option id="m">Masculino</option>
		</select>
		
		{{csrf_field()}}
		<input type="text" name="cvIdCliente" name="cvIdCliente" value="{{#tCliente->IdCliente}}"-->
		<input type="button" name="editar" value="MODIFICAR CLIENTE" class="btnRegistrar" onclick="editarCliente();" ><br><br>
</form>
<script type="text/javascript">
	function editarCliente()
	{

		if(confirm('Seguro que quiere Editar')){
			$('#frmEditarCliente').submit();
		}

	}

</script>
@endSection