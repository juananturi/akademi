@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? 'Mostrar Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Curso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $curso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $curso->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $curso->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $curso->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
