<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	protected $guarded = ['id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function bandas()
	{
		return $this->belongsToMany('App\Banda', 'bandas_users', 'id_bandas', 'id_users', 'id_cargos');
	}

    public function buscarCargo()
    {
        $cargo = \DB::table('bandas_users')
            ->join('cargos', 'bandas_users.id_cargos', '=', 'cargos.id')
            ->select('cargos.descricao')
            ->where('bandas_users.id_bandas', '=', $this->id)
            ->first();

        return $cargo;
    }

}
