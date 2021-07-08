@extends('web.layout')

@section('title', 'Productos')
@section('content')

@include('web.sections.static.cover', [
    'section' => $category->name,
    'wallpaper' => $category->slug . '.jpg'
])

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0">

                <div class="post-content post-single">
                    <div class="post-media post-image">
                        <img loading="lazy" src="{{ asset('storage/' . $product->photo) }}" class="img-fluid" alt="post-image">
                    </div>

                    <div class="post-body">
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu
                                fugiat nulla pariatur.</p>

                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. </p>

                            <blockquote>
                                <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor.<cite>-
                                        Anger Mathe</cite></p>

                            </blockquote>

                            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                                dicta
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos quira tione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                tempora
                                incidunt ue magnam aliquam quaerat voluptatem.</p>
                        </div>

                        <div class="tags-area d-flex align-items-center justify-content-between">
                            <div class="post-tags">
                            </div>
                            <div class="share-items">
                                <ul class="post-social-icons list-unstyled">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- post content end -->

            </div><!-- Content Col end -->

            <div class="col-lg-4">
                <div class="sidebar sidebar-right">
                    <div class="widget recent-posts">
                        <h3 class="widget-title">Otros productos</h3>
                        <ul class="list-unstyled">
                            @foreach ($products as $productRandom)
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="{{ route('product', ['category' => $category->slug, 'product' => $productRandom->slug]) }}"><img loading="lazy" alt="img" src="{{ asset('storage/' . $productRandom->photo) }}"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="{{ route('product', ['category' => $category->slug, 'product' => $productRandom->slug]) }}">{{ $productRandom->name }}</a>
                                    </h4>
                                    <p>{{ substr($productRandom->description, 0, 60) }}...</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="widget">
                        <h3 class="widget-title">Archivos</h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="#">valvulas.pdf</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags </h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Project</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Finance</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div><!-- Conatiner end -->
</section>

@endsection