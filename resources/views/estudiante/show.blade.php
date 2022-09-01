@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Detalle Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $estudiante->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $estudiante->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $estudiante->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Doc:</strong>
                            {{ $estudiante->tipo_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Doc:</strong>
                            {{ $estudiante->numero_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Doc Identidad:</strong>
                            {{ $estudiante->doc_identidad }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $estudiante->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Estrato:</strong>
                            {{ $estudiante->estrato }}
                        </div>
                        <div class="form-group">
                            <strong>Id Municipio Nac:</strong>
                            {{ $estudiante->id_municipio_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Id Municipio Exp:</strong>
                            {{ $estudiante->id_municipio_exp }}
                        </div>
                        <div class="form-group">
                            <strong>Id Curso:</strong>
                            {{ $estudiante->id_curso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
