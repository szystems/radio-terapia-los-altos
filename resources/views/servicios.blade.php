@extends('layouts.app')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Servicios</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active text-primary">Servicios</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

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
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">Tecnología</h4>
                </div>
                <h1 class="display-3 mb-4">Equipo de Radioterapia y Tecnología</h1>
                <p class="mb-0">Estos equipos representan la tecnología avanzada utilizada en la clínica para proporcionar tratamientos de radioterapia de alta calidad y personalizados.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="{{ asset('terapia/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Acelerador Lineal Clínico (CLINAC)</h5>
                                <p class="mb-4">Marca: Varian
                                    Modelo: Ix
                                    Descripción: Este equipo utiliza dosis de radiación para destruir células malignas y reducir tumores. Personaliza los rayos X de fotones o electrones para ajustarse a la forma del tumor, minimizando el daño al tejido sano circundante. Ofrece varias técnicas de tratamiento, incluyendo 3DC, IMRT, IGRT, VMAT, hipofraccionamientos y tratamiento con electrones.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="{{ asset('terapia/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Tomógrafo Axial Computarizada (TAC)</h5>
                                <p class="mb-4">Descripción: Diseñado específicamente para tratamientos de simulación, este tomógrafo permite el uso de dispositivos de fijación, facilitando la colocación adecuada del paciente. Es el primer tomógrafo en Guatemala diseñado para simulación en radioterapia, proporcionando imágenes detalladas del cuerpo humano para diagnóstico y tratamiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="{{ asset('terapia/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Sistema de Gestión ARIA</h5>
                                <p class="mb-4">Descripción: Este sistema de información oncológica organiza y gestiona el perfil del paciente a lo largo de su tratamiento. Permite un flujo de trabajo eficiente, integrando actividades como consultas clínicas, simulación, planificación y entrega del tratamiento, además de registrar documentos de diagnóstico y crear informes médicos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="{{ asset('terapia/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Sistema de Planificación Eclipse</h5>
                                <p class="mb-4">Descripción: Este sistema modela la configuración geométrica del acelerador lineal para la planificación de tratamientos. Utiliza un algoritmo de cálculo (Triple A) para simular la interacción del haz de radiación con los tejidos del paciente, determinando dosis absorbidas en volúmenes de tratamiento y órganos en riesgo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                       <div class="service-img rounded-top">
                            <img src="{{ asset('terapia/img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                       </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-4">Sistema de Dosimetría</h5>
                                <p class="mb-4">Descripción: Este conjunto de equipos médicos determina la dosis de radioterapia entregada por el acelerador lineal y la dosis que recibirá el paciente. Cuenta con un sistema de control de calidad robusto y de última generación, asegurando la precisión y seguridad en la administración del tratamiento.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection
