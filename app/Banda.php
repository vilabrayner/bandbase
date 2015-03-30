<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bandas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nome', 'data_criacao'];

	protected $guarded = ['id'];

	public function integrantes()
	{
		return $this->belongsToMany('App\User', 'bandas_users', 'id_bandas', 'id_users', 'id_cargos');
	}

}
