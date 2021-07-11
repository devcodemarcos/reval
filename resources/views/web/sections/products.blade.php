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

            @forelse ($products as $product)
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
            @empty
            <div class="col-12">
                <div class="error-page text-center">
                    <div class="error-code">
                        <svg style="height: 30vh;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 368 368" style="enable-background:new 0 0 368 368;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M184,224c-29.824,0-58.232,12.632-77.96,34.664c-2.944,3.296-2.664,8.344,0.624,11.296c1.52,1.368,3.432,2.04,5.336,2.04
				c2.192,0,4.384-0.896,5.96-2.664C134.656,250.688,158.728,240,184,240c25.28,0,49.352,10.688,66.04,29.336
				c2.944,3.296,8.008,3.568,11.296,0.624c3.288-2.944,3.568-8,0.624-11.296C242.24,236.64,213.832,224,184,224z" />
                                        <path d="M184,0C82.536,0,0,82.544,0,184s82.536,184,184,184s184-82.544,184-184S285.464,0,184,0z M184,352
				c-92.632,0-168-75.36-168-168S91.368,16,184,16s168,75.36,168,168S276.632,352,184,352z" />
                                        <path d="M280,128c-4.424,0-8,3.584-8,8c0,13.232-10.768,24-24,24s-24-10.768-24-24c0-4.416-3.576-8-8-8s-8,3.584-8,8
				c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40C288,131.584,284.424,128,280,128z" />
                                        <path d="M160,136c0-4.416-3.576-8-8-8s-8,3.584-8,8c0,13.232-10.768,24-24,24s-24-10.768-24-24c0-4.416-3.576-8-8-8s-8,3.584-8,8
				c0,22.056,17.944,40,40,40C142.056,176,160,158.056,160,136z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="error-message mt-5">
                        <h3>Lo sentimos... No hay productos registrados aún!</h3>
                    </div>
                </div>
            </div>
            @endforelse

            <div class="col-lg-12 mb-4">
                <div class="float-right">
                    {{ $products->links() }}
                </div>
            </div>

        </div>
    </div>
</section>

@endsection