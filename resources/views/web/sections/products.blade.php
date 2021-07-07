@extends('web.layout')

@section('title', 'Productos')

@section('content')

@include('web.sections.static.cover', [
    'section' => $category,
    'wallpaper' => $category . '.jpg'
])

<section id="main-container" class="main-container pb-2">
    <div class="container">
        <div class="row">

            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{ asset('images/products/service1.jpg') }}" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('images/products/service-icon1.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="news-single.html">Zero Harm Everyday</a></h3>
                            <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
                                talent like. Lorem ipsum dolor suscipit.</p>
                            <a class="learn-more d-inline-block" href="news-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 mb-4">
                <!-- <nav class="paging float-right" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav> -->
                {{ $products->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
</section>

@endsection