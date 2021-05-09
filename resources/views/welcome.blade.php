@extends('layouts/layout')

@section('Acceso')
<nav class="navbar nav shadow borde-abajo borde-top">
    <div class="container">
        <h1 class="" style="font-size: 1.3rem">Venta de mascarillas</h1>
        <div class="input-group mb-3 col-6 mt-2">
            <input type="text" class="form-control" placeholder="">
            <div class="input-group-append">
                <button class="btn btn-dark" type="button">Buscar</button>
            </div>
        </div>
    </div>

</nav>
@endsection

@section('Portada')
<div class="container mt-2">
    <h2 style="font-size: 1.1rem">Productos disponibles</h2>

    <div class="form-group">
        <form action="{{route('AgregarMascarilla')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <label for="">Nombre de la mascarilla</label>
        <input type="text">
        <label for="">Categoria</label>
        <input type="text">
        <label for="">Precio</label>
        <input type="text">
        <label for="">Imagen</label>
        <input type="file" name="imagen">
        <button type="submit">Aceptar</button>            
        </form>

    </div>

    @foreach ($mascarillas as $item)
    <div class="card" style="width: 180px">
        <div class="card-tittle">
        <p>{{$item->nombre}}</p>
        </div>
        <div class="card-content">
        <img class="img-fluid" src="{{asset($item->img)}}" alt="">
        </div>
    </div>

    @endforeach

</div>
@endsection