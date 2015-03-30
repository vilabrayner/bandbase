<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BandaUser extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bandas_users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_bandas', 'id_users', 'id_cargos'];

}
