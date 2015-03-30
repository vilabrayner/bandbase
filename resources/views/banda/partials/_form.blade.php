<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('data_criacao', 'Data de Criação:') !!}
    {!! Form::text('data_criacao', null, array('class' => 'form-control input-sm','placeholder' => 'Data','data-provide' => 'datepicker')) !!}
</div>
<div class="form-group">
	{!! Form::label('cargos', 'Cargo:') !!}
	{!! Form::select('cargos', $cargos, Input::old('id'), array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
