@extends('layouts.app')

@section('title', '500')

@section('content')

<div class="fail message">

        <div class="container text-center">
          <span class="icon fail"><i class="ri-close-circle-line"></i></span>
          <h1>¡Error!</h1>
          <p class="leading">Disculpenos su mensaje no pudo ser enviado. <a href="./" class="bold">Intentelo de nuevo.</a></p>
        </div>

</div>

@endsection

@push('scripts')

<!-- PENDIENTE AGREGAR AL HEADER MEDIANTE JQUERY LA CLASE header "header fixed dark-text" -->

@endpush