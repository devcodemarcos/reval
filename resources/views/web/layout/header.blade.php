<div class="bg-white">
    <div class="container">
        <div class="logo-area">
            <div class="row align-items-center">
                <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                    <a class="d-block" href="index.html">
                        <img loading="lazy" src="images/reval.png" alt="Reval">
                    </a>
                </div>
                <div class="col-lg-9 header-right">
                    <ul class="top-info-box">
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title">Llámanos</p>
                                    <p class="info-box-subtitle">(729) 281 0986</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title">Envíanos un correo electrónico</p>
                                    <p class="info-box-subtitle">ventas@valvulasreval.mx</p>
                                </div>
                            </div>
                        </li>
                        <li class="last">
                            <div class="info-box last">
                                <div class="info-box-content">
                                    <p class="info-box-title">Certificación Global</p>
                                    <p class="info-box-subtitle">ISO 9001:2017</p>
                                </div>
                            </div>
                        </li>
                    </ul><!-- Ul end -->
                </div><!-- header right end -->
            </div><!-- logo area end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</div>

<div class="site-navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mr-auto w-100 justify-content-between">
                            <li class="nav-item dropdown active">
                                <a class="nav-link" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">¿Quiénes somos? <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('story') }}">Historia</a></li>
                                    <li><a href="{{ route('clients') }}">Clientes</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Productos <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('products', 'valvulas') }}">Válvulas</a></li>
                                    <li><a href="{{ route('products', 'reguladores') }}">Reguladores</a></li>
                                    <li><a href="{{ route('products', 'cilindros') }}">Cilindros</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->
</div>