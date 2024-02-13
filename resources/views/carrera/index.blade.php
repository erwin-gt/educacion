@extends('home')
@section('content')

<div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>Carreras</h3>
        <br><br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
        Agregar Carrera
        </button>

        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Carrera</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($carreras as $carrera)
                    <tr class="">
                        <td scope="row">{{$carrera->idcarrera}}</td>
                        <td>{{$carrera->nombre}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$carrera->idcarrera}}"> Editar </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#"> Eliminar</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('carrera.create')
        
    </div>
    <div class="col-md-2"></div>
</div>

@endsection