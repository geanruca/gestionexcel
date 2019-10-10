@extends('layout.app')
@section('content')
    <section id="hero_in" class="contacts">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>
                    Formulario de contacto
                </h1>
            </div>
        </div>
    </section>
    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h4>Formulario de contacto</h4>
                    <div id="message-contact"></div>
                    <form method="POST" action="{{ route('enviar_contacto') }}" autocomplete="on">
                        @CSRF
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="text" id="nombre" name="nombre">
                                    <label class="input_label">
                                        <span class="input__label-content">Nombre completo</span>
                                    </label>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="text" id="telefono" name="telefono">
                                    <label class="input_label">
                                        <span class="input__label-content">Teléfono de contacto</span>
                                    </label>
                                </span>
                            </div>

                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="email" id="email" name="email">
                                    <label class="input_label">
                                        <span class="input__label-content">Email</span>
                                    </label>
                                </span>
                            </div>

                            <div class="col-md-6">
                                <span class="input">
                                    <input class="input_field" type="text" id="tema" name="tema">
                                    <label class="input_label">
                                        <span class="input__label-content">Tema</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <!-- /row -->
                        <span class="input">
                                <textarea class="input_field" id="mensaje" name="mensaje" style="height:150px;"></textarea>
                                <label class="input_label">
                                    <span class="input__label-content">Ingrese su mensaje</span>
                                </label>
                        </span>
                        <p class="add_top_30"><input type="submit" value="Enviar" class="btn_1 rounded" id="submit-contact"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection