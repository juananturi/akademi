<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $estudiante->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $estudiante->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $estudiante->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_doc') }}
            {{ Form::text('tipo_doc', $estudiante->tipo_doc, ['class' => 'form-control' . ($errors->has('tipo_doc') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('tipo_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_doc') }}
            {{ Form::text('numero_doc', $estudiante->numero_doc, ['class' => 'form-control' . ($errors->has('numero_doc') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
            {!! $errors->first('numero_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doc_identidad') }}
            {{ Form::file('doc_identidad', $estudiante->doc_identidad, ['class' => 'form-control' . ($errors->has('doc_identidad') ? ' is-invalid' : ''), 'placeholder' => 'Documento Identidad']) }}
            {!! $errors->first('doc_identidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $estudiante->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estrato') }}
            {{ Form::text('estrato', $estudiante->estrato, ['class' => 'form-control' . ($errors->has('estrato') ? ' is-invalid' : ''), 'placeholder' => 'Estrato']) }}
            {!! $errors->first('estrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_municipio_nac') }}
            {{ Form::text('id_municipio_nac', $estudiante->id_municipio_nac, ['class' => 'form-control' . ($errors->has('id_municipio_nac') ? ' is-invalid' : ''), 'placeholder' => 'Id Municipio Nacasimiento']) }}
            {!! $errors->first('id_municipio_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_municipio_exp') }}
            {{ Form::text('id_municipio_exp', $estudiante->id_municipio_exp, ['class' => 'form-control' . ($errors->has('id_municipio_exp') ? ' is-invalid' : ''), 'placeholder' => 'Id Municipio de Expedicion']) }}
            {!! $errors->first('id_municipio_exp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_curso') }}
            {{ Form::text('id_curso', $estudiante->id_curso, ['class' => 'form-control' . ($errors->has('id_curso') ? ' is-invalid' : ''), 'placeholder' => 'Id Curso']) }}
            {!! $errors->first('id_curso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>