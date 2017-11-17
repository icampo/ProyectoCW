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

    <script type="text/javascript">

        let musica = new Audio("/img/ds.ogg");

        function PulsarTecla(event){

            tecla = event.code;

            if(tecla==='KeyB'){

                img = document.getElementById("animado");
                imagen = '<img src="/img/ee.gif" alt="imagen" />';
                img.innerHTML=imagen;
                epi='url("/img/epi.gif")';
                document.body.style.backgroundImage=epi;
                musica.play();

            }

        }

        window.onkeydown=PulsarTecla;

        window.onkeyup=function parar(event) {

            tecla = event.code;

            if(tecla==='KeyB') {
                img = document.getElementById("animado");
                imagen = '<img src="/img/construccion1.gif" alt="imagen" />';
                img.innerHTML=imagen;
                document.body.style.backgroundColor="white";
                document.body.style.backgroundImage=null;
                musica.pause();
            }
        };

    </script>

@endsection