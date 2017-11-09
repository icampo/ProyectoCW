@extends('layouts.default')
@section('content')

    <div class="container-fluid Inicio text-center" id="inicio">
        <h2 id="descripcion">
            <p>Bienvenido a DomoTek,</p>
            <p>DomoTek es una empresa de impresión 3D, escaneado y prototipado 3D.
                Te ofrecemos un servicio de impresión rápido y eficaz.</p>
        </h2>
    </div>

    <section id="servicios">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Servicios disponibles en domotek.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">E-Comercio</h4>
                    <p class="text-muted">Posibilidad de comprar impresoras y robots vía Online.</p>
                </div>
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Aplicación Web</h4>
                    <p class="text-muted">Funcionalidad para programar y utilización del robot vía web.</p>
                </div>
                <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Web Segura</h4>
                    <p class="text-muted">Estamos trabajando en ello.</p>
                </div>
            </div>
        </div>
    </section>

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