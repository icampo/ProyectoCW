@extends('layouts.default')

@section('content')

    <div id="textoConst">
        <h3>Página en Construcción</h3>
    </div>
    <div id="animado" class="container">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <img src="/img/construccion1.gif">

    </div>

@endsection