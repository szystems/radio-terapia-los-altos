@extends('layouts.app')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contacto</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Inicio</a></li>
                <li class="breadcrumb-item active text-primary">Contacto</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style mb-4">
                    <h4 class="sub-title text-white px-3 mb-0">Contacto</h4>
                </div>
                <p class="mb-0 text-black-50">En nuestra clínica de radioterapia, estamos comprometidos con tu bienestar y salud. Si tienes preguntas sobre nuestros servicios, deseas programar una cita o necesitas más información, no dudes en ponerte en contacto con nosotros. Nuestro equipo de profesionales está aquí para ayudarte en cada paso del camino.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                    <h2 class="display-5 text-white mb-2">¿Necesitas ayuda o tienes alguna pregunta? ¡Estamos aquí para ti!</h2>
                    <p class="mb-4 text-white">Llena el formulario a continuación para ponerte en contacto con nosotros. Nuestro equipo de profesionales estará encantado de ayudarte con cualquier consulta o inquietud que tengas sobre nuestros servicios de radioterapia. Estamos comprometidos con tu bienestar y salud, y nos esforzamos por brindarte la mejor atención posible.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white" id="name" placeholder="Tu Nombre">
                                    <label for="name">Tu Nombre</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent border border-white" id="email" placeholder="Tu Email">
                                    <label for="email">Tu Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Tu Teléfono">
                                    <label for="phone">Tu Teléfono</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white" id="project" placeholder="Proyecto">
                                    <label for="project">Proyecto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border border-white" id="subject" placeholder="Asunto">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="Mensaje..." style="height: 160px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-light text-primary w-100 py-3">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-transparent rounded">
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Dirección</h4>
                            <p class="mb-0 text-white"> Kilometro 194 Carretera Inter-Americana Salcaja Quetzaltenango, Guatemala.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center mb-4">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Teléfono</h4>
                            <p class="mb-0 text-white"> +(502)3456-7890</p>
                            <p class="mb-0 text-white"> +(502)3456-7890</p>
                        </div>

                        <div class="d-flex flex-column align-items-center text-center">
                            <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                            <h4 class="text-dark">Email</h4>
                            <p class="mb-0 text-white">info@radioterapialosaltos.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="d-flex justify-content-center mb-4">
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="rounded h-100">
                        <iframe class="rounded w-100"

                        style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.365149505483!2d-91.47605516016483!3d14.86084656845955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858ea392b6dc26dd%3A0x15ad0fb443ed102!2sCEMIC%20Quetzaltenango!5e0!3m2!1ses-419!2sgt!4v1729123360607!5m2!1ses-419!2sgt"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
