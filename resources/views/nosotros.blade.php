@extends('layouts.app')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nosotros</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active text-primary">Nosotros</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

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
                        <h4 class="sub-title pe-3 mb-0">¿Quiénes somos? </h4>
                        <h1 class="display-3 mb-4">Radio Terapia Los Altos</h1>
                        <p class="mb-4">El primer Centro de Radioterapia del Occidente: “Radioterapia Los Altos”, especializado en el tratamiento del cáncer mediante el tratamiento de radiación. Nuestro objetivo es dar a conocer nuestros servicios de radioterapia y braquiterapia, para que sus asegurados del interior del país tengan un tratamiento de alta calidad y cerca de sus hogares. Contamos con una ubicación accesible y tecnología de última generación.</p>
                        <p class="mb-4">Cada paciente que recibe tratamiento radiante en Radioterapia Los Altos cuenta con una atención única y personalizada, respaldada por un equipo interdisciplinario de profesionales que trabajan de manera proactiva, sinérgica, humanista y, sobre todo, con la más alta profesionalidad. Nuestro compromiso es garantizar que cada paciente obtenga la mejor atención y recuperación de manera integral.</p>
                        <p class="mb-4">Nuestros principales objetivos son:</p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Proporcionar tratamientos de radioterapia de alta calidad:</b> Ofrecer a los pacientes tratamientos precisos y efectivos utilizando tecnología avanzada y protocolos de atención basados en evidencia para mejorar los resultados clínicos y la calidad de vida.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Garantizar la seguridad y el bienestar de los pacientes:</b> Implementar estrictos controles de seguridad y procedimientos estandarizados para minimizar los riesgos asociados con la radioterapia y asegurar un entorno de atención seguro y cómodo.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Optimizar la accesibilidad y la equidad en la atención:</b> Asegurar que los servicios de radioterapia estén disponibles para todas las personas que los necesiten, sin importar su situación económica, geográfica o social, mediante vínculos laborales con las aseguradoras.</p>
                        </div>
                        <p class="mb-4"><b>Misión: </b>Ser Líder en el tratamiento oncológico de la región del occidente y del país, reconocido por la excelencia en la atención integral al paciente, la innovación en la radioterapia, y el compromiso con la equidad en el acceso a servicios de salud de calidad, mejorando significativamente la calidad de vida de nuestros pacientes y contribuyendo al avance del tratamiento del cáncer en el occidente y en todo el país.</p>
                        <p class="mb-4"><b>Visión: </b>Proporcionar atención de radioterapia de alta calidad y centrada en el paciente, utilizando tecnología avanzada y un enfoque multidisciplinario para ofrecer tratamientos eficaces y personalizados. Nos comprometemos a mejorar la salud y el bienestar de la comunidad a través de la excelencia del centro, la educación continua, y el acceso equitativo a servicios de braquiterapia, con el objetivo de combatir el cáncer y elevar la calidad de vida de nuestros pacientes.</p>
                        <p class="mb-4">Nuestros valores:</p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Excelencia:</b> Mantenemos un compromiso inquebrantable con la calidad, buscando siempre los más altos estándares en atención médica, innovación tecnológica y resultados clínicos.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Integridad:</b> Actuamos con honestidad, ética y transparencia en todas nuestras interacciones interpersonales, asegurando que cada paciente reciba un tratamiento justo y basado en evidencia.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Responsabilidad: </b> Nos responsabilizamos por la seguridad y el bienestar de nuestros pacientes, manteniendo un enfoque proactivo en la calidad del servicio y la mejora continua.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> <b>Equidad: </b> Promovemos la igualdad en el acceso a nuestros servicios, asegurando que todas las personas, independientemente de su situación socioeconómica, reciban la atención que necesitan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                {{-- <div class="sub-style">
                    <h4 class="sub-title px-3 mb-0">What We Do</h4>
                </div> --}}
                <h1 class="display-3 mb-4">Historia</h1>
                <p class="mb-0">Este proyecto surgió de la necesidad existente en el occidente del país, impulsada por emprendedores quetzaltecos en buscan de mejorar las condiciones de la región. Estamos seguros que este proyecto mejorará significativamente la accesibilidad a servicios esenciales y dará pie a nuevos proyectos que tanto necesita el país. Contar con un asegurado que pueda recibir todos los servicios en su lugar de origen o en localidades cercanas ofrece un claro beneficio tanto para el asegurado como para la aseguradora, al reducir costos de transporte, hospedaje, alimentación y los riesgos que conlleva un viaje a la ciudad. Además, los pacientes que cuentan con el apoyo familiar y pudiendo permanecer en un entorno donde se sienten seguros (su hogar) suelen mostrar mejor tolerancia y adherencia al tratamiento, lo que se traduce en mejores resultados oncológicos.</p>
                <p class="mb-0">Este proyecto surgió de la necesidad existente en el occidente del país, impulsada por emprendedores quetzaltecos en buscan de mejorar las condiciones de la región. Estamos seguros que este proyecto mejorará significativamente la accesibilidad a servicios esenciales y dará pie a nuevos proyectos que tanto necesita el país. Contar con un asegurado que pueda recibir todos los servicios en su lugar de origen o en localidades cercanas ofrece un claro beneficio tanto para el asegurado como para la aseguradora, al reducir costos de transporte, hospedaje, alimentación y los riesgos que conlleva un viaje a la ciudad. Además, los pacientes que cuentan con el apoyo familiar y pudiendo permanecer en un entorno donde se sienten seguros (su hogar) suelen mostrar mejor tolerancia y adherencia al tratamiento, lo que se traduce en mejores resultados oncológicos.</p>
                <p class="mb-0">El cáncer es una de las enfermedades más devastadoras para la sociedad. A nivel global, afecta a más de 18 millones de personas y provoca aproximadamente 9.5 millones de muertes al año. Aunque existen diferentes tipos de tratamientos, un cuidado integral debe incluir opciones como cirugía, quimioterapia y radioterapia. Se estima que el 50% de los pacientes con cáncer requieren tratamiento con radioterapia.</p>
                <p class="mb-0">En Guatemala, para el año 2022, se estimó que 17,870 pacientes fueron afectados por cáncer, y se espera que este número aumente en los próximos años debido al incremento en la detección temprana y al envejecimiento de la población. Actualmente, las opciones de tratamiento con radioterapia en el país están limitadas a la Ciudad de Guatemala, lo que genera barreras logísticas y de acceso para quienes necesitan este tipo de atención.</p>
                <p class="mb-0">Los pacientes con diagnóstico de cáncer ya forman parte de una población vulnerable, debido a que el tratamiento es largo, costoso y generalmente necesitan el apoyo de un familiar. Además, algunos pacientes enfrentan barreras lingüísticas debido a la diversidad de idiomas que se hablan en Guatemala (como K’iche’, Mam, etc.). Por ello, surge la necesidad de crear un centro de radioterapia en un punto estratégico como Quetzaltenango, uno de los departamentos más importantes de Guatemala, cuya cabecera departamental es la segunda ciudad más relevante del país.</p>
                <p class="mb-0">Radioterapia Los Altos tiene como objetivo brindar servicios de radioterapia a la población de Quetzaltenango y a las regiones del sur y noroccidente, que representan el 38% de la población de Guatemala. Se espera que la incidencia de casos de cáncer en esta área sea proporcional a su población.</p>
            </div>
        </div>
    </div>
    <!-- Services End -->

@endsection
