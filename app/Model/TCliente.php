<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

/**
* 
*/
class TCliente extends Model
{
	protected $table='tcliente'	;
	protected $primarykey='dniCliente';
	public $incrementing=false;
	public $timestamps=false;

}

?>