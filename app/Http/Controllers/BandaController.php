<?php namespace App\Http\Controllers;

use DB;
use Input;
use Redirect;

use App\Banda;
use App\User;
use App\BandaUser;
use App\Cargo;

use Illuminate\Http\Request;

class BandaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Banda Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	protected $guarded = [];

	protected $rules = [
		'nome' => ['required', 'min:3'],
	];

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$bandas = User::find(\Auth::id())->bandas;

		return view('banda/index', compact('bandas'));
		//return view('banda/index');
	}

	public function create()
	{

		$cargos = Cargo::lists('descricao');

		return view('banda.create', compact('cargos'));
	}

	public function store(Request $request)
	{

		$this->validate($request, $this->rules);

		$input = Request::except('cargos');

		Banda::create($input);

		return Redirect::route('banda.index')->with('message', 'Banda criada.');
	}

	public function edit(Banda $banda)
	{
	    return view('banda.edit', compact('banda'));
	}

	public function show(Banda $banda)
	{
		$integrantes = Banda::find($banda->id)->integrantes;

		return view('banda.show', compact('banda', 'integrantes'));
	}

	public function update(Banda $banda, Request $request)
	{
		$this->validate($request, $this->rules);

		$input = array_except(Input::all(), '_method');
		$banda->update($input);

		return Redirect::route('banda.show', $banda->nome)->with('message', 'Banda atualizada.');
	}

	public function destroy(Banda $banda)
	{
		$banda->delete();

		return Redirect::route('banda.index')->with('message', 'Banda excluída.');
	}

}
