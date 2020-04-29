@extends('layouts.app')

@section('title', '500')

@section('content')

<div class="fail message">

        <div class="container text-center">
          <span class="icon fail"><i class="ri-close-circle-line"></i></span>
          <h1>Fail!</h1>
          <p class="leading">Sorry but your message was not sent! <a href="contact.html" class="bold">Try again.</a></p>
        </div>

</div>

@endsection

@push('scripts')

<!-- PENDIENTE AGREGAR AL HEADER MEDIANTE JQUERY LA CLASE header "header fixed dark-text" -->

@endpush