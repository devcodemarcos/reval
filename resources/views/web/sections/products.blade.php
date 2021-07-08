@extends('web.layout')

@section('title', 'Productos')

@section('content')

@include('web.sections.static.cover', [
    'section' => $category->name,
    'wallpaper' => $category->slug . '.jpg'
])

<section id="main-container" class="main-container pb-2">
    <div class="container">
        <div class="row">

            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="{{ asset('storage/' . $product->photo) }}" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('images/products/' . $category->slug . '.jpg') }}" alt="{{ $category->slug }}-icon">
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title">
                                <a href="{{ route('product', ['category' => $category->slug, 'product' => $product->slug]) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <p>{{ substr($product->description, 0, 130) }}...</p>
                            <a class="learn-more d-inline-block" href="{{ route('product', ['category' => $category->slug, 'product' => $product->slug]) }}" aria-label="service-details">
                                <i class="fa fa-caret-right"></i> Más detalles
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 mb-4">
                <div class="float-right">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </div>
</section>

@endsection