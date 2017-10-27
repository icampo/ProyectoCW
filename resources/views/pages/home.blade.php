@extends('layouts.default')
@section('content')

    <div class="container-fluid Inicio text-center" id="inicio">
        <h2 id="descripcion">
            <p>Bienvenido a DomoTek,</p>
            <p>DomoTek es una empresa de impresión 3D, escaneado y prototipado 3D.
                Te ofrecemos un servicio de impresión rápido y eficaz.</p>
        </h2>
    </div>

    <div class="container-fluid text-center" id="espacio">
        <h3 id="tituloCar"></h3>
    </div>

    <div class="Contacto" id="contacto">

            <div class="col-md-6 col-md-offset-3">

                <div class="well well-sm" id="formulario">
                    <p></p>
                    @if($errors -> any())
                        <div class="alert alert-danger">
                            <p>Corrige los siguientes errores:</p>
                            <p></p>
                            <ul id="validar">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" action="/contact" method="post">
                        {{csrf_field()}}
                        <fieldset>
                            <legend class="text-center">Contacta con nosotros</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Nombre</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Introduce Nombre" class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Introduce Tu Email</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="text" placeholder="Introduce Email" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Mensaje</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Introduce tu mensaje aquí" rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
    </div>

@stop