@extends('web.layout')

@section('title', 'Clientes')
@section('content')

@include('web.sections.static.cover', [
    'section' => 'Clientes',
    'wallpaper' => 'clients.jpg'
])

<section id="main-container" class="main-container">
    <div class="container">

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="column-title">Testimonials</h3>

                        <div id="testimonial-slide" class="testimonial-slide">
                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a
                                        last
                                        view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and
                                        the
                                        subline of her own road.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial1.png" alt="testimonial">
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Gabriel Denis</h3>
                                            <span class="quote-subtext">Chairman, OKT</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->
                            </div>
                            <!--/ Item 1 end -->

                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt
                                        ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco
                                        laboris
                                        nisi aliquip consequat.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial">
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Weldon Cash</h3>
                                            <span class="quote-subtext">CFO, First Choice</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->
                            </div>
                            <!--/ Item 2 end -->

                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt
                                        ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco
                                        laboris
                                        nisi ut commodo consequat.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial">
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Minter Puchan</h3>
                                            <span class="quote-subtext">Director, AKT</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->
                            </div>
                            <!--/ Item 3 end -->
                        </div>
                        <!--/ Testimonial carousel end-->
                    </div><!-- Col end -->

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <h3 class="column-title">Algunos de nuestros clientes</h3>
                        <div class="row all-clients">
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <img loading="lazy" class="img-fluid" src="{{ asset('images/clients/client1.png') }}" alt="Bimbo" />
                                </figure>
                            </div><!-- Client 1 end -->
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <img loading="lazy" class="img-fluid" src="{{ asset('images/clients/client2.png') }}" alt="Tia rosa" />
                                </figure>
                            </div><!-- Client 2 end -->
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <img loading="lazy" class="img-fluid" src="{{ asset('images/clients/client3.png') }}" alt="Barcel" />
                                </figure>
                            </div><!-- Client 3 end -->
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <img loading="lazy" class="img-fluid" src="{{ asset('images/clients/client4.png') }}" alt="La corona" />
                                </figure>
                            </div><!-- Client 4 end -->
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <img loading="lazy" class="img-fluid" src="{{ asset('images/clients/client5.png') }}" alt="Mundo dulce" />
                                </figure>
                            </div><!-- Client 5 end -->
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <img loading="lazy" class="img-fluid" src="{{ asset('images/clients/client6.png') }}" alt="Ricolino" />
                                </figure>
                            </div><!-- Client 6 end -->
                        </div><!-- Clients row end -->
                    </div><!-- Col end -->
                </div>
            </div>
        </section>
    </div>
</section>

@endsection

@push('scripts')
<!-- Slick Carousel -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
<script src="{{ mix('js/clients.js') }}" defer></script>
@endpush