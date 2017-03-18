<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

/**
* https://MEKAL0702@gitlab.com/JainorMontesRetamozo/AppWebSistemaVentas.git
*/
class TCliente extends Model
{
	protected $table='tcliente'	;
	protected $primarykey='dniCliente';
	public $incrementing=false;
	public $timestamps=false;

}

?>