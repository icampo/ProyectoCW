@extends('layouts.default')

@section('content')

    <div id="animado" class="container">
        <h3>Página en construcción</h3>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <img src="/img/construccion1.gif">

    </div>

@endsection