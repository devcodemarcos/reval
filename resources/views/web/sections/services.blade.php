@extends('web.layout')

@section('title', 'Servicios')

@section('content')

@include('web.sections.static.cover', [
    'section' => 'Servicios',
    'wallpaper' => 'services.jpg'
])

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('images/services/service-icon1.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Home Construction</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. And potato Sint vero illum, placeat
                            corporis aut accusamus.</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('images/services/service-icon2.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. And potato Sint vero illum, placeat
                            corporis aut accusamus.</p>
                    </div>
                </div><!-- Service 2 end -->
            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="{{ asset('images/services/service-color.png') }}" alt="service-avater-image">
            </div><!-- Col end -->

            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('images/services/service-icon3.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. And potato Sint vero illum, placeat
                            corporis aut accusamus.</p>
                    </div>
                </div><!-- Service 3 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('images/services/service-icon4.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. And potato Sint vero illum, placeat
                            corporis aut accusamus.</p>
                    </div>
                </div><!-- Service 4 end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->

    </div><!-- Container end -->
</section>

@endsection