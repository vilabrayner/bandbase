<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'artistas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nome'];

	protected $guarded = ['id'];

	public function musicas()
	{
		return $this->hasMany('App\Musica');
	}

}
