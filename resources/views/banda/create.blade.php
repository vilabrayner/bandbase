@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Banda</div>

				<div class="panel-body">
					<h2>Criar Banda</h2>

 					{!! Form::model(new App\Banda, ['route' => ['banda.store']]) !!}
				        @include('banda/partials/_form', ['submit_text' => 'Criar Banda'])
				    {!! Form::close() !!}

					<hr>

					<a href="{{ route('banda.index') }}" class="btn btn-default">
						<i class="glyphicon glyphicon-chevron-left"></i>
						<span>Voltar</span>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
