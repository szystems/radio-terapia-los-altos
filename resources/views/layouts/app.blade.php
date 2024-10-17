<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Radio Terapia Los Altos</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel="icon" type="image/x-icon" href="{{ asset('terapia/img/logos/favicon2.ico') }}">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('terapia/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('terapia/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('terapia/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('terapia/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Kilometro 194 Carretera Inter-Americana Salcaja Quetzaltenango, Guatemala</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+(502)3456-7890</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>info@radioterapialosaltos.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <img src="{{ asset('terapia/img/logos/logooriginalhorizontal.png') }}" alt="Logo" class="me-3">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/','home') ? 'active':''  }}">Inicio</a>
                        <a href="{{ url('nosotros') }}" class="nav-item nav-link {{ Request::is('nosotros') ? 'active':''  }}">Nosotros</a>
                        <a href="{{ url('servicios') }}" class="nav-item nav-link {{ Request::is('servicios') ? 'active':''  }}">Servicios</a>
                        <a href="{{ url('personal') }}" class="nav-item nav-link {{ Request::is('personal') ? 'active':''  }}">Personal</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="blog.html" class="dropdown-item">Our Blog</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}
                        <a href="{{ url('contacto') }}" class="nav-item nav-link {{ Request::is('contacto') ? 'active':''  }}">Contacto</a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Solicitar Cita</a>
                </div>
            </nav>

            @if(Request::is('/') || Request::is('home'))
                <!-- Carousel Start -->
                <div class="header-carousel owl-carousel">
                    <div class="header-carousel-item">
                        <img src="{{ asset('terapia/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption">
                            <div class="carousel-caption-content p-3">
                                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Radio Terapia Los Altos</h5>
                                <h1 class="display-1 text-capitalize text-white mb-4">El primer Centro de Radioterapia del Occidente</h1>
                                <p class="mb-5 fs-5">especializado en el tratamiento del cáncer mediante el tratamiento de radiación.</p>
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Solicitar una Cita</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="header-carousel-item">
                        <img src="{{ asset('terapia/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption">
                            <div class="carousel-caption-content p-3">
                                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Radio Terapia Los Altos</h5>
                                <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                                <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </p>
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Book Appointment</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- Carousel End -->
            @endif
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')

            <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <img src="{{ asset('terapia/img/logos/logoblancohorizontal.png') }}" alt="Logo" class="img-fluid">
                            <p>especializado en el tratamiento del cáncer mediante el tratamiento de radiación.</p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column" align="center">
                            <h4 class="mb-4 text-white">Links</h4>
                            <a href="{{ url('/') }}"><i class="fas fa-angle-right me-2"></i> Inicio</a>
                            <a href="{{ url('nosotros') }}"><i class="fas fa-angle-right me-2"></i> Nosotros</a>
                            <a href="{{ url('servicios') }}"><i class="fas fa-angle-right me-2"></i> Servicios</a>
                            <a href="{{ url('personal') }}"><i class="fas fa-angle-right me-2"></i> Personal</a>
                            <a href="{{ url('contacto') }}"><i class="fas fa-angle-right me-2"></i> Contacto</a>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Terapia Services</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> All Services</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Massage Therapy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Rehabilitation</a>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Contacto</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> Kilometro 194 Carretera Inter-Americana Salcaja Quetzaltenango, Guatemala</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@radioterapialosaltos.com</a>
                            {{-- <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a> --}}
                            <a href=""><i class="fas fa-phone me-2"></i> +(502)3456-7890</a>
                            {{-- <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="https://radioterapialosaltos.com"><i class="fas fa-copyright text-light me-2"></i>radioterapialosaltos.com</a>, Todos los derechos reservados.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        ©
        <script>
            document.write(new Date().getFullYear())
        </script>,
        {{ __('Diseñado por') }}
        <a href="https://www.szystems.com" class="font-weight-bold" target="_blank">Szystems</a> & <a href="">Studio 208</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('terapia/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('terapia/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('terapia/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('terapia/lib/owlcarousel/owl.carousel.min.js') }}"></script>


        <!-- Template Javascript -->
        <script src="{{ asset('terapia/js/main.js') }}"></script>

    </body>

</html>
