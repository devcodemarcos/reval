@extends('web.layout')

@section('title', 'Historia')

@section('content')

@include('web.sections.static.cover', [
    'section' => 'Reval S.A. de C.V.',
    'wallpaper' => 'contact.jpg'
])

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Nuestros valores</h3>
                <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy
                    street
                    art, tattooed beard literally.</p>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Calidad
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                wolf
                                moon officia aute, non cupidata
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Seguridad
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                wolf
                                moon officia aute, non cupidata
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Integridad
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                wolf
                                moon officia aute, non cupidata
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div id="page-slider" class="page-slider small-bg">
                    <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                    </div>
                    <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                    </div>
                    <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5"></div>
                <h3>Historia de Reval</h3>
                <p>
                    Somos una organización iniciada por su creador TITO HUGO RECILLAS MARTINEZ, en el año de 1968 inice a trabajar como barrendero con la empresa, Lemoyne de México, donde aprendi lo que es un torno, la fabricación de cilindros, hidráulicos y neumáticos, interpretar los planos, a barrenar, armar piezas hasta 1970. Ya que por motivos sindicales a la compañia se le hizo huelga y me liquido.
                </p>
                <p>
                    El 16 de Mayo de 1970 entre a trabajar a IISA, que era de Instrumentación Industrial ahora fabricando cilindros, reguladores y válvulas de seguridad. Y en 1972 ya se fabricaba la válvula bridada, en esa empresa llegue a ocupar varios puestos como ensamblador, probador y ajustador de válvulas; fui uno de los primeros trabajadores de esa empresa y termine en Mayo 26 de 1978.
                </p>
                <p>
                    Me regreso a Toluca a trabajar el 2 de Junio de 1978 y me traigo a trabajar a uno de mis hermanos comenzando en un negocio de tornos, fue muy poco el tiempo en donde estuvimos trabajando ahí, dejando el trabajo el 7 de Septiembre del año en curso.
                </p>
                <p>
                    De ahí mis hermanos Doroteo, Gaudencio y yo hacemos una sociedad iniciando una nueva empresa llamada Taller Mecánico Industrial el 15 de Septiembre de 1978, empezando por comprar un torno revolver , todo fue creciendo hasta 1982 ya teníamos 4 tornos con los cuales producíamos válvulas y cilindros hidráulicos. Luego viene la devaluación de 1982 en la cual nos desnivelo pero lo superamos. El 19 de Abril de 1986, mi hermano Doroteo se separa de la sociedad quedando Gaudencio y yo, que de igual manera nos desbalanceó un poco pero seguimos. Y en 1987 entra un nuevo socio a la empresa José Otilio Vázquez Silva y de ahí partimos la otra sociedad como empresa VAYREMEX S.A DE C.V., el 16 de Junio de 1987, después empezó a crecer más y más que importábamos y exportábamos el producto.
                </p>
                <p>
                    El 19 de Abril del 2002, yo Hugo Recillas me separo de la sociedad de VAYREMEX S.A. DE C.V, dejando todo lo que había construido. Antes de eso yo ya tenía una sociedad con la empresa Industrial Americana TAYLOR S.A DE C.V., en el año 2001, 6 de Febrero. Empieza a crecer esa empresa de igual manera exportando e importando productos. Después el 16 de Diciembre de 2003 se termina esa sociedad con TAYLOR S.A DE C.V.
                </p>
                <p>
                    El 3 Enero de 2005 por mi propia cuenta, inicio una nueva empresa fabricando reguladores, válvulas, cilindros hidráulicos y neumáticos, reparaciones. Y de ahí todo parte de cero comprando maquinas, haciendo modelos de fundición y sobre todo buscando distribuidores en toda la República Mexicana. En esa empresa cuento con mis hijos YORBALINDA RECILLAS CAMACHO y HUGO RECILLAS CAMACHO, que son los que me han apoyado a que esta empresa salga adelante.El 13 de Junio del 2012 se hace una nueva sociedad con mis hijos iniciando REGULADORES Y VALVULAS DE TOLUCA S.A DE C.V (REVAL).
                </p>
                <blockquote>
                    <p>
                        La motivación nos impulsa a comenzar y el hábito nos permite continuar.
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
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