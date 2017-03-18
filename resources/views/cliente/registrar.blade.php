@extends('layout.template')
@section('CuerpoInterno')

	<form id="frmRegistarCliente" class="formulario" action="{{url('cliente/registrar')}}" method="post" enctype="multipart/form.data">
		<p>REGISTRAR CLIENTEs</p>

		<label for="txtDni">Dni : </label><label id="obli">*</label><br>
		<input type="text" name="txtDni" id="txtDni" class="tm" autocomplete="on" placeholder="dni o cernet de estranjeria" ><br><br>

		<label for="txtnombre">Nombre : </label><label id="obli">*</label> <br>
		<input type="text" name="txtnombre" id="txtnombre"  class="tm" autocomplete="txtnombre" placeholder="escriba su Nombre"  ><br><br>

		<label for="txtApellido">Apellido : </label><label id="obli">*</label><br>
		<input type="text" name="txtApellido" id="txtApellido"  class="tm"  autocomplete="txtApellido" placeholder="escriba su Apellido" ><br><br>		

		<label for="txtDirecion">Direccion : </label><label id="obli">*</label><br>
		<input type="text" name="txtDirecion" id="txtDirecion"  class="tm"  autocomplete="txtDirecion" placeholder="Av. o Jr example " ><br><br>

		<label for="txtEmail">Email : </label><label id="obli">*</label><br>
		<input type="text" name="txtEmail" id="txtEmail"  class="tm"  autocomplete="txtEmail" placeholder="examples@gmail " ><br><br>

		<label for="txtTelefono">Telefono : </label><label id="obli">*</label><br>
		<input type="text" name="txtTelefono" id="txtTelefono"  class="tm"  autocomplete="txtTelefono" placeholder="963258741" ><br><br>

		<label for="txtSexo">Sexo : </label><br>
		<select class="tm" id="txtSexo" name="txtSexo">
			<option id="f">Femenino</option>
			<option id="m">Masculino</option>
		</select>
		<br><br>

		{{csrf_field()}}
		<input type="button" name="registrar" value="REGISTRAR CLIENTE" class="btnRegistrar" onclick="registrarCliente();" ><br><br>
	</form>
	<script type="text/javascript">

		function registrarCliente(){
			$('#frmRegistarCliente').submit();
		}
		
	</script>
@endsection