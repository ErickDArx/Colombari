@extends('layouts/layout')

@section('Acceso')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="#">
        <img class="logo" src="{{asset('img/LogoSEO.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </div>
</nav>

<form action="{{route('AgregarMascarilla')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Imagen</label>
    <input name="imagen" type="file">
    <button type="submit">Aceptar</button>
</form>

@endsection

@section('Portada')
<!-- Flickity HTML init -->
<div class="gallery js-flickity" data-flickity-options='{ "freeScroll": true, "wrapAround": true }'>
    @foreach ($mascarillas as $item)
    <div class="gallery-cell imagen img">

        <div class="m-0 row card-body position-relative">
            <img class="" src="{{asset($item->img)}}" alt="">
            <div class="col-sm-10 p-0 oscurecer">
                <div class="container-fluid mt-2 mb-2">
                    <h2 class=" font-weight-bold">Mascarilla desechable rosa para adulto</h2>
                    <button class="position-relative btn btn-primary rounded">
                        ¡Lo quiero!
                    </button>
                </div>

            </div>
            <div class=" col-sm-2 m-0 p-0 d-flex reaccion justify-content-center  align-items-center">
                <i class="corazon m-0 p-0 far fa-heart"></i>
            </div>

        </div>
    </div>

    @endforeach
</div>
@endsection