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

    {{-- <div class="form-group">
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

</div> --}}

<div class="row">
    @foreach ($mascarillas as $item)
    <div class="d-flex">
        <div class="card m-2" style="">
            <div class="text-center">
                <img class="m-0 border-0 rounded-top img" src="{{asset($item->img)}}" alt="">
            </div>
            <div class="card-body">
                <h2 class="card-title border-bottom">Card title</h2>
                <div class="">
                    <div class="row">
                        <div class="col-sm-6">
                            Categoria
                        </div>
                        <div class="col-sm-6">
                            Precio
                        </div>
                        <div class="col-sm-6">
                            Cantidad
                        </div>
                    </div>
                </div>
                    <div class="text-center ">
                        <div class="d-flex">
                    <a href="#" class="mr-2 btn btn-primary">! Lo quiero ¡</a>
                    <a href="#" class=" btn btn-outline-primary">Guardar en mis favoritos</a>  
                        </div>
  
                    </div>
        
                </div>
        </div>
    </div>

    @endforeach
</div>

@endsection