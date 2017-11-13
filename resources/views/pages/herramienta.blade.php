@extends('layouts.default')

@section('content')

    <div id="animado" class="container">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <img src="/img/construccion.gif">

    </div>

@endsection