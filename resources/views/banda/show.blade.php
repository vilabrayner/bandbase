@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Banda</div>

				<div class="panel-body">

					<div>
						<ul class="nav nav-pills">
							<li class="active"><a href="#dados" data-toggle="pill">Dados Gerais</a></li>
							<li><a href="#integrantes" data-toggle="pill">Integrantes</a></li>
						</ul>
						<div class="tab-content">
							<div id="dados" class="tab-pane active">
								<h4>
									Nome: {{ $banda->nome }}
								</h4>
                                <h4>
									Data: {{ date("d/m/Y",strtotime($banda->data_criacao)) }}
								</h4>
							</div>

							<div id="integrantes" class="tab-pane">
									@if (count($integrantes) == 0)
										Não há integrantes =(
									@else
										@foreach( $integrantes as $integrante )
                                            <?php

                                            $cargo = $integrante->buscarCargo();

                                            ?>
                                            <h4>{{ $integrante->name }}</h4>({{ $cargo->descricao }})
										@endforeach
									@endif
							</div>
						</div>
					</div>

					<hr>

					<p>
						<a href="#" class="btn btn-default">
							<i class="glyphicon glyphicon-plus"></i>
							<span>Adicionar Integrante</span>
						</a>
					</p>
					<p>
						<a href="{{ route('banda.index') }}" class="btn btn-default">
							<i class="glyphicon glyphicon-chevron-left"></i>
							<span>Voltar</span>
						</a>
					</p>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
