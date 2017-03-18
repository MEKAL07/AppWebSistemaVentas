<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

/**
* https://MEKAL0702@gitlab.com/JainorMontesRetamozo/AppWebSistemaVentas.git
*/
class TUsuario extends Model
{
	protected $table='tusuario'	;
	protected $primarykey='dniUsuario';
	public $incrementing=false;
	public $timestamps=false;

}

?>