@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Setlist</div>

				<div class="panel-body">

					Seção de administração dos Setlists
					<br><br>
					Usuários cadastrados:
					<ul>
						<?php
						$users = DB::table('users')->get();

						foreach ($users as $user)
						{
							?><li><?php echo $user->name; ?></li><?php
						}
						?>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
