<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'musicas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nome', 'duracao', 'id_artistas'];

	protected $guarded = ['id'];

	public function artista()
	{
		return $this->belongsTo('App\Artista');
	}

}
