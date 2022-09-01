@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $docente->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $docente->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Diploma:</strong>
                            {{ $docente->diploma }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $docente->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contrato:</strong>
                            {{ $docente->fecha_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $docente->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $docente->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materia:</strong>
                            {{ $docente->id_materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
