@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Banda</div>

				<div class="panel-body">
					@if (count($bandas) == 0)
						Você não integra nenhuma banda =(
					@else
						<ul>
				            @foreach( $bandas as $banda )
				                <li><a href="{{ route('banda.show', [$banda->nome]) }}">{{ $banda->nome }}</a></li>
				            @endforeach
				        </ul>
					@endif

					<hr>

					<a href="{{ route('banda.create') }}" class="btn btn-default">
						<i class="glyphicon glyphicon-plus"></i>
						<span>Criar Banda</span>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
