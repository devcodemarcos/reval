@extends('web.layout')

@section('title', 'Inicio')

@section('content')

<div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction Industry</h3>
                        <p data-animation-in="slideInLeft" data-duration-in="1.2">
                            <a href="services.html" class="slider btn btn-primary">Our Services</a>
                            <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
        <div class="slider-content text-left">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                        <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                        <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Choice is Simple</h3>
                        <p data-animation-in="slideInRight">
                            <a href="services.html" class="slider btn btn-primary border">Our Services</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
        <div class="slider-content text-right">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown">Meet Our Engineers</h2>
                        <h3 class="slide-sub-title" data-animation-in="fadeIn">We believe sustainability</h3>
                        <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that
                            determines how you achieve success.</p>
                        <div data-animation-in="slideInLeft">
                            <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                            <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="call-to-action-box no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">Entendemos tus necesidades</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-dark" href="{{ route('contact') }}#cotizacion">Solicita una cotización</a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section>

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <!-- <h2 class="into-title">Nosotros</h2> -->
                    <h3 class="into-sub-title">Liderando el mercado</h3>
                    <p>
                        En REVAL S.A. DE C.V. nos dedicamos a prestar servicios especializados para atenderle en sus
                        requerimientos.
                        Nuestros procesos y productos son de la mejor calidad y nuestra trayectoria es la mejor garantia de
                        nuestra
                        excelencia y confiabilidad, misma que ponemos a disposicion a nivel internacional.
                    </p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-trophy"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Reputación de excelencia</h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-sliders-h"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Creamos relaciones de trabajo</h3>
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-thumbs-up"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Guiados por el compromiso</h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Equipo de profesionales</h3>
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Productos y Servicios</h3>
                <div id="page-slider" class="page-slider small-bg">
                    <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Leadership</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Relationships</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Performance</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- Row end -->
    </div><!-- Container end -->
</section>

@endsection

@push('scripts')
<script>
    // banner-carousel
    function bannerCarouselOne() {
        $('.banner-carousel.banner-carousel-1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            dots: true,
            speed: 600,
            arrows: true,
            prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>'
        });
        $('.banner-carousel.banner-carousel-1').slickAnimation();
    }
    bannerCarouselOne();

    // pageSlider
    function pageSlider() {
        $('.page-slider').slick({
            fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            speed: 600,
            arrows: true,
            prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>'
        });
    }
    pageSlider();
</script>
@endpush