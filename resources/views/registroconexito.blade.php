@extends('layouts.app')

@section('title', 'Gracias')

@section('content')

<div class="thank-you message">

<div class="container text-center">
  <span class="icon success"><i class="ri-checkbox-circle-line"></i></span>
  <h1>Gracias!</h1>
  <p class="leading">¡Hemos recibido su mensaje y le responderemos a la brevedad!</p>
</div>

</div>

@endsection

@push('scripts')
<!-- PENDIENTE AGREGAR AL HEADER MEDIANTE JQUERY LA CLASE header "header fixed dark-text" -->
@endpush