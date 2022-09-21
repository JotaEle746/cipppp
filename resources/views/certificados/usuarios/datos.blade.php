@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row mt-2 d-flex">
            <div class="col text-right ">
                <a class="btn btn-secondary" href="">Volver</a>
            </div>
        </div>
        <div class="col bor">
            <div class="card" class="" style="width: 100%;">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Datos personales:
                    </div>
                    <div class="card-body">
                        {{-- <form action="" method="POST">
                            @csrf --}}
                            <div class="form-group mb-2">
                                <label for="dni">Número de DNI:</label>
                                {{-- <input type="text" required name="dni" id="dni" placeholder="" class="" maxlength="8"> --}}
                                <label for="" class="form-control">{{$colegiado->dni}}</label>
                            </div>
                            <div class="form-group mb-2">
                                <label for="nombres">Nombre:</label>
                                <label for="" class="form-control">{{$colegiado->nombres}}</label>
                            </div>
                            <div class="row">
                                <div class="form-group mb-2 col-6">
                                    <label for="a_paterno">Apellido Paterno:</label>
                                    <label for="" class="form-control">{{$colegiado->a_paterno}}</label>
                                </div>
                                <div class="form-group mb-2 col-6">
                                    <label for="a_materno">Apellido Materno:</label>
                                    <label for="" class="form-control">{{$colegiado->a_materno}}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-2 col-6">
                                    <label for="email">Email:</label>
                                    <label for="" class="form-control">{{$colegiado->email}}</label>
                                </div>
                                <div class="form-group mb-2 col-6">
                                    <label for="direccion">Dirección:</label>
                                    <label for="" class="form-control">{{$colegiado->direccion}}</label>
                                </div>
                            </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        Datos del curso:
                    </div>
                    <div class="card-body">
                        
                            <div class="form-group mb-2">
                                <label for="dni">Nombre del curso:</label>
                                <label for="" class="form-control">{{$cursos->nombre}}</label>
                            </div>
                            <div class="form-group mb-2">
                                <label for="nombres">Temario:</label>
                                <label for="" class="form-control">{{$cursos->temario}}</label>
                            </div>
                            <div class="form-group mb-2">
                                <label for="nombres">Enlace:</label>
                                <label for="" class="form-control"><a href="#">{{$cursos->enlace}}</a></label>
                            </div>
                            <div class="row">
                                <div class="form-group mb-2 col-6">
                                    <label for="a_paterno">Duración en días:</label>
                                    <label for="" class="form-control">{{$cursos->duracion}}</label>
                                </div>
                                <div class="form-group mb-2 col-6">
                                    <label for="a_materno">Estado:</label>
                                    <label for="" class="form-control">{{$cursos->estado}}</label>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="form-group mb-2 col-6">
                                    <label for="email">Fecha de Inicio:</label>
                                    <label for="" class="form-control">{{$cursos->fecha_inicio}}</label>
                                </div>
                                <div class="form-group mb-2 col-6">
                                    <label for="direccion">Fecha de finalización:</label>
                                    <label for="" class="form-control">{{$cursos->fecha_fin}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{route('certificadopdf', [$cursos->id, $colegiado->id])}}" class="card-link btn btn-light border-dark">Imprimir certificado</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
