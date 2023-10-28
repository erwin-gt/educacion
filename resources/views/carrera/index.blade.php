@extends('home')
@section('content')

<div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>Carreras</h3>
        <br><br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
        Agregar Carrera
        </button>

        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Carrera</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($carreras as $carrera)
                    <tr class="">
                        <td scope="row">{{$carrera->idcarrera}}</td>
                        <td>{{$carrera->nombre_carrera}}</td>

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