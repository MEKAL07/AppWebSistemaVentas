@extends('layout.template')
@section('CuerpoInterno')

	<form id="frmRegistarCliente" class="formulario" action="{{url('cliente/registrar')}}" method="post">
		<p>REGISTRAR USUARIO</p>
		<label for="txtDni">Dni : </label><label id="obli">*</label><br>
		<input type="text" name="txtDni" id="txtDni" class="tm" autocomplete="txtDni" ><br><br>

		<label for="txtnombre">Nombre : </label><label id="obli">*</label> <br>
		<input type="text" name="txtnombre" id="txtnombre"  class="tm" autocomplete="txtnombre"  ><br><br>

		<label for="txtApellido">Apellido : </label><label id="obli">*</label><br>
		<input type="text" name="txtApellido" id="txtApellido"  class="tm"  autocomplete="txtApellido" ><br><br>

		<label for="txtSexo">Sexo : </label><br>
		<input type="text" name="txtSexo" id="txtSexo"  class="tm"  autocomplete="txtSexo" ><br><br><br>

		<label for="txtEmail">Email : </label><label id="obli">*</label><br>
		<input type="text" name="txtEmail" id="txtEmail"  class="tm"  autocomplete="txtEmail" ><br><br>

		<label for="txtPassword">Password : </label><label id="obli">*</label><br>
		<input type="password" name="txtPassword" id="txtPassword"  class="tm" ><br><br>
		
		<label for="txtTelefono">Celular : </label><label id="obli">*</label><br>
		<input type="text" name="txtTelefono" id="txtTelefono"  class="tm"  autocomplete="txtTelefono" ><br><br>
		
		<label>Avatar</label>
		<input type="file" name="fileAvatar" id="fileAvatar"><br><br><br>

		<label for="txtCargo">Cargo : </label><label id="obli">*</label><br>
		<input type="text" name="txtCargo" id="txtCargo"  class="tm"  autocomplete="txtCargo" ><br><br>

		{{csrf_field()}}
		<input type="button" name="registrar" value="REGISTRAR CLIENTE" class="btnRegistrar" onclick="registrarUsuario();"><br><br>
	</form>
<script type="text/javascript">
	function registrarUsuario(){

		if (confirm('Seguro que quiere Guardar')) {
			$('#frmRegistarCliente').submit();
		}
	}
	
</script>
@endsection