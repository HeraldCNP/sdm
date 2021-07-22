<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {!! SEO::generate() !!}
    {{-- <meta name="description" content="Laboratorio Químico Instrumental San Martin de la ciudad de Potosí Bolivia realizamos análisis de minerales confiables, rápidos y precisos"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Herald Choque Vargas - WonderGroup" />
    <meta name="copyright" content="Laboratorio Químico Instrumental San Martin" />
    <meta name="robots" content="index, follow"/>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/loader.svg') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .btnEnviar{
            width: 100%;
            background: #046493;
            text-align: center;
            padding: 15px;
            text-transform: uppercase;
            font-family: "Barlow", sans-serif;
            line-height: 1.2;
            line-height: 29px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.03em;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
    </style>
    <script data-ad-client="ca-pub-7125877501142047" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N7LRR2Z5FC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-N7LRR2Z5FC');
    </script>
    <script data-ad-client="ca-pub-7125877501142047" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your plugin de chat code -->
<div class="fb-customerchat"
  attribution="biz_inbox"
  page_id="100305768513315">
</div>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img class="img-fluid" src="{{ asset('img/logo/loader.svg') }}" alt="Logo Laboratorio Quimico Instrumenta San Martin" >
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>Telefono: +591 75726777 - 62 21145</li>
                                    <li>Email: labsanmartinbo@gmail.com</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/Laboratorio-Quim%C3%ADco-San-Mart%C3%ADn-100305768513315/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('inicio') }}"><img  src="{{ asset('img/logo/logo.svg') }}" alt="Logo Laboratorio Quimico Instrumenta San Martin" height="55px"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('inicio') }}">Inicio</a></li>
                                            <li><a href="#servicios" id="goServicios">Servicios</a></li>
                                            <li><a href="#somos" id="goSomos">Quienes Somos</a></li>
                                            <li><a href="#noticias" id="goNoticias">Noticias</a></li>
                                            <li><a href="{{ route('contacto') }}" id="goContacto">Contacto</a></li>
                                            <div class="d-block d-sm-block d-md-none">
                                                <li><a href="{{ route('login') }}">Ingresar</a></li>
                                            </div>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="{{ route('login') }}" class="btn header-btn">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    @yield('content')
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- footer Heading -->
                <div class="footer-heading">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>¡Entendemos la importancia de su tiempo!</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <span class="contact-number f-right" style="font-size: 25px">+591 75726777 - 62 21145</span>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Empresa</h4>
                                <ul>
                                    <li><a href="#servicios" id="goServicios">Servicios</a></li>
                                    <li><a href="#somos" id="goSomos">Quienes Somos</a></li>
                                    <li><a href="#noticias" id="goNoticias">Noticias</a></li>
                                    <li><a href="{{ route('contacto') }}" id="goContacto">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Horarios de atención</h4>
                                <ul>
                                    <li>Lunes-Viernes 8:00 - 17:00</li>
                                    <li>Sabado 8:00-15:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Enlaces de Interes</h4>
                                <ul>
                                    <li><a href="https://www.senarecom.gob.bo/"target="_blank">Senarecom</a></li>
                                    <li><a href="http://www.mineria.gob.bo/"target="_blank">Ministerio de mineria</a></li>
                                    <li><a href="http://www.dgsc.gob.bo/"target="_blank"> D. G. S. C.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img class="img-fluid" src="{{ asset('img/logo/logo.svg') }}" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Estamos para Servir y apoyar a la comunidad con honestidad, profesionalismo y elevados principios éticos, con la excelencia siempre en perspectiva.</p>
                                </div>
                            </div>
                            <!-- Footer Social -->
                            <div class="footer-social ">
                                <a target="_blank" href="https://www.facebook.com/Laboratorio-Quim%C3%ADco-San-Mart%C3%ADn-100305768513315/"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>
  Todos los derechos reservados | Laboratorio Quimico Instrumental San Martin <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://wonder.com.bo" target="_blank">WonderGroup</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/animated.headline.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    {{-- vue --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script>
        const app = new Vue({
            el: '#form',
            data: {
                alerts: [],
                code: null,
            },
            methods: {
                checkForm: function (e) {
                    this.alerts = [];

                    if (!this.code) {
                        this.alerts.push('El codigo de paquete es obligatorio.');
                    } else if (!this.validCode(this.code)) {
                        this.alerts.push('El codigo de paquete debe ser válido.');
                    }

                    if (!this.alerts.length) {
                        return true;
                    }
                    e.preventDefault();
                },
                validCode: function (code) {
                var reg = /^[a-zA-Z0-9\_\-]{1,15}$/;
                return reg.test(code);
                }
            }
        })


        const app2 = new Vue({
            el: '#form2',
            data: {
                alerts: [],
                nombre: null,
                mensaje: null,
            },
            methods: {
                checkForm2: function (e) {
                    this.alerts = [];

                    if (!this.nombre) {
                        this.alerts.push('El nombre  es obligatorio.');
                    } else if (!this.validCode(this.nombre)) {
                        this.alerts.push('El nombre debe ser válido.');
                    }
                    if (!this.mensaje) {
                        this.alerts.push('El nombre  es obligatorio.');
                    } else if (!this.validMsj(this.mensaje)) {
                        this.alerts.push('El mensaje debe ser válido.');
                    }

                    if (!this.alerts.length) {
                        let url = "https://api.whatsapp.com/send?phone=59175726777&text=*Mensaje de la Web*%0A*Nombre:*%0A" + this.nombre + "%0A*Mensaje:*%0A" + this.mensaje;
                        window.open(url);
                        return true;
                    }
                    e.preventDefault();
                },
                validCode: function (nombre) {
                var reg = /^[a-zA-Z]{1,15}$/;
                return reg.test(nombre);
                },
                validMsj: function (mensaje) {
                var reg = /^[a-zA-Z0-9\s?¿!¡]{1,200}$/;
                return reg.test(mensaje);
                }
            }
        })
    </script>
</body>
</html>
