@extends('layouts.layout')
@section('content')
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1 >Laboratorio Quimico <span>Instrumental</span> San Martin</h1>
                            </div>
                            <!--Hero form -->
                            {{-- <form action="{{ route('search.package') }}" method="POST" class="search-box" id="form" @submit="checkForm">
                                @csrf
                                <div class="input-form">
                                    <input name="code" type="text" placeholder="Ingrese Código de paquete" v-model="code" required>
                                    @if ($errors->has('code'))
                                        <small class="form-text text-white">
                                            {{ $errors->first('code') }}
                                        </small>
                                    @endif
                                </div>
                                <div class="search-form">
                                    <button class="btnEnviar" type="submit">Consultar</button>
                                </div>
                                <span v-if="alerts.length">
                                    <b class="text-white">Solucione los siguientes problemas:</b>

                                    <ul>
                                      <li class="text-white" v-for="alert in alerts">@{{ alert }}</li>
                                    </ul>
                                </span>
                            </form> --}}
                            <!-- Hero Pera -->
                            {{-- <div class="hero-pera">
                                <p>Para consultar el estado del analisis</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? our info Start -->
    <div class="our-info-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="info-caption">
                            <p>Llámanos en cualquier momento</p>
                            <span>75726777 - 62 21145</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="info-caption">
                            <p>Domingo CERRADO</p>
                            <span>Lunes - Sábado 08:00 - 17:00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-place"></span>
                        </div>
                        <div class="info-caption">
                            <p>Surco N° 519</p>
                            <span>Potosí - Bolivia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our info End -->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding20" id="servicios">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Nuestros Servicios</span>
                        <h2>Realizamos analisis de </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div>
                            <img src="{{ asset('img/minerals/plata.png') }}" height="100px" class="img-fluid" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Plata</a></h5>
                            <p>La plata es uno de los metales preciosos más famosos, y se ha utilizado con fines ornamentales desde los primeros tiempos. La mayor parte de la plata se extrae del mineral de plata , pero se extraen cantidades considerables de Native Silver.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div>
                            <img src="{{ asset('img/minerals/plomo.png') }}" height="100px" class="img-fluid" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Plomo</a></h5>
                            <p>El plomo es un metal suave, gris y brillante con una alta densidad y un bajo punto de fusión. Aunque es peligroso para nuestra salud, los seres humanos lo han extraído y utilizado desde hace más de 6000 años.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div>
                            <img src="{{ asset('img/minerals/zinc.png') }}" height="100px" class="img-fluid" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Zinc</a></h5>
                            <p>El zinc es uno de los elementos menos comunes; se estima que forma parte de la corteza terrestre en un 0.0005-0.02%. Ocupa el lugar 25 en orden de abundancia entre los elementos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" id="radio" data-background="{{ asset('') }}img/gallery/music.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">

                </div>
                <div class="col-lg-4 col-md-12 mb-5 text-center">
                    <a href="http://tevesporteve.bolivia.bo" target="_blank">
                        <p class="text-white text-uppercase font-weight-bold bg-dark">Tv´s X Tv - La Mejor Imagen Para Escuchar</p>
                    </a>
                    <audio controls autoplay preload="auto" src="http://78.129.193.82:38877/;"></audio>
                </div>
                <div class="col-lg-4 col-md-12 ">

                </div>
            </div>
        </div>
    </div>

    <!-- Categories Area End -->
    <!--? About Area Start -->
    <div class="about-low-area padding-bottom mt-5" id="somos">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img src="{{ asset('img/gallery/about2.png') }}" alt="">
                        </div>
                        <div class="about-back-img d-none d-lg-block">
                            <img src="{{ asset('img/gallery/about2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="about-caption mb-50">
                        <h3 class="text-center">Cotización Diaria de Minerales</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="http://pimm.mineria.gob.bo/PyoServicios/Estadisticas/" width=680 height=550 frameborder=0 scrolling=yes></iframe>
                          </div>
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>Sobre Nosotros</span>
                            <h3>Laboratorio Químico Instrumental San Martin</h3>
                        </div>
                        <p class="text-justify">Nuestro principal objetivo, es ofrecer análisis minerales confiables, rápidos y precisos, contando con una completa infraestructura en equipos, con un moderno equipo de absorción atómica, hornos de mufla, pHmetros, para la realización de los ensayos, los servicios que brinda son Análisis Cuantitativo (determinación de elementos)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    {{-- data-background="{{ asset('') }}img/gallery/section_bg02.jpg" --}}
    <!--? Blog Area Start  "-->
    <div class="home-blog-area section-padding30 "  id="noticias">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                        <span>Nuestras noticias recientes</span>
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                @if($post->image)
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        <img class="img-fluid" src="{{ $post->image }}" alt="">
                                    </a>
                                @elseif($post->iframe)
                                    <div class="embed-responsive embed-responsive-16by9">
                                        {!! $post->iframe !!}
                                    </div>
                                @endif
                                <div class="blog-img">

                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>{{ $post->created_at->format('d') }}</span>
                                    <p>{{ $post->created_at->isoFormat('MMMM') }}</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> {{ $post->user->people->name }}</a></li>
                                    </ul>
                                    <h3><a href="{{ route('posts.show', $post->slug) }}">{{ $post->name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!--? contact-form start -->
    <section id="contacto" class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="{{ asset('') }}img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <span>Envianos un Mensaje</span>
                                    <h2>¿Necesitas Información?</h2>
                                    <p>Contacta con nosotros o déjanos un mensaje a través del formulario de contacto.</p>
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="" id="form2" class="contact-form">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-form">
                                        <label for="nombre" >Nombre</label>
                                        <input type="text" id="nombre" v-model="nombre" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="input-form">

                                          <label for="mensaje">Mensaje</label>
                                          <textarea class="form-control" name="mensaje" id="mensaje" rows="3" v-model="mensaje" required></textarea>

                                    </div>
                                </div>
                                <span v-if="alerts.length">
                                    <b>Solucione los siguientes problemas:</b>

                                    <ul>
                                      <li v-for="alert in alerts">@{{ alert }}</li>
                                    </ul>
                                </span>
                                <!-- Button -->
                                <div class="col-lg-12">
                                    <button name="submit" class="submit-btn" @click="checkForm2">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end -->


</main>
@endsection
