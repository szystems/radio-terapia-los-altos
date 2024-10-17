@extends('layouts.app')

@section('content')

    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="{{ asset('terapia/img/about-1.jpg') }}" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="{{ asset('terapia/img/about-2.jpg') }}" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                        </div>
                        {{-- <div class="about-experience">Radio Terapia Los Altos</div> --}}
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">Bienvenido</h4>
                        <h1 class="display-3 mb-4">Radio Terapia Los Altos</h1>
                        <p class="mb-4">El primer Centro de Radioterapia del Occidente: “Radioterapia Los Altos”, especializado en el tratamiento del cáncer mediante el tratamiento de radiación. Nuestro objetivo es dar a conocer nuestros servicios de radioterapia y braquiterapia, para que sus asegurados del interior del país tengan un tratamiento de alta calidad y cerca de sus hogares. Contamos con una ubicación accesible y tecnología de última generación. Nuestros principales objetivos son:</p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Proporcionar tratamientos de radioterapia de alta calidad.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Garantizar la seguridad y el bienestar de los pacientes.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Optimizar la accesibilidad y la equidad en la atención.</p>
                        </div>
                        <a href="{{ url('nosotros') }}" class="btn btn-primary rounded-pill text-white py-3 px-5">Ver mas...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Radio Terapia Los Altos </h4>
                </div>
                <h1 class="display-3 mb-4">¿Porque escogernos?</h1>
                <p class="mb-0">Proporcionamos atención de radioterapia de alta calidad y centrada en el paciente, utilizando tecnología avanzada y un enfoque multidisciplinario para ofrecer tratamientos eficaces y personalizados. Nos comprometemos a mejorar la salud y el bienestar de la comunidad a través de la excelencia del centro, la educación continua, y el acceso equitativo a servicios de braquiterapia, con el objetivo de combatir el cáncer y elevar la calidad de vida de nuestros pacientes.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-diagnoses fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Área de Recuperación</h5>
                                <p class="mb-0">Espacio dedicado a la recuperación post-tratamiento, donde los pacientes pueden descansar y recibir atención médica adecuada.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="bi bi-hourglass-split fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Sala de Espera</h5>
                                <p class="mb-0">Área confortable y tranquila destinada a los pacientes y sus acompañantes mientras esperan su turno para ser atendidos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-user-md fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Clínica de Médicos-Oncólogos</h5>
                                <p class="mb-0">Consultorios especializados donde los pacientes reciben atención y tratamiento de oncólogos altamente capacitados.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="bi bi-car-front fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Área de Parqueo</h5>
                                <p class="mb-0">Espacio designado para el estacionamiento de vehículos, asegurando comodidad y accesibilidad para los pacientes y visitantes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="bi bi-person-fill-slash fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Área de Vestidores</h5>
                                <p class="mb-0">Instalaciones equipadas con privacidad y comodidad para que los pacientes se cambien antes de los tratamientos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="bi bi-person-wheelchair fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Áreas para incapacitados</h5>
                                <p class="mb-0">Espacios adaptados con accesibilidad para personas con discapacidades, garantizando que todos los pacientes puedan acceder a los servicios.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Área de Físico-Médico</h5>
                                <p class="mb-0">Sección dedicada a la rehabilitación física y terapias médicas, donde los pacientes pueden recibir tratamientos especializados.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4">
                        <div class="col-12">
                            <div class="feature-icon mb-4">
                                <div class="p-3 d-inline-flex bg-white rounded">
                                    <i class="fas fa-hospital-user fa-4x text-primary"></i>
                                </div>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">Área de Examenes</h5>
                                <p class="mb-0">Zona destinada a la realización de exámenes diagnósticos y pruebas médicas, equipada con tecnología avanzada para una atención precisa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a href="{{ url('servicios') }}" class="btn btn-primary rounded-pill text-white py-3 px-5">Ver Servicios...</a>
                    <a href="{{ url('personal') }}" class="btn btn-primary rounded-pill text-white py-3 px-5">Ver Personal...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

@endsection
