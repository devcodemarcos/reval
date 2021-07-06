@extends('web.layout')

@section('title', 'Contacto')

@section('content')

@include('web.sections.static.cover', [
'section' => 'Contacto',
'wallpaper' => 'contact.jpg'
])

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row">
            <div class="col-md-4 margin-column">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fas fa-map-marker-alt mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Visita nuestras oficinas</h4>
                        <p>Carretera Amomolulco-Xonacatlan Km. 4.5 Sta. Ma. Atarasquillo, Lerma, Edo de Méx. C.P. 52050</p>
                    </div>
                </div>
            </div><!-- Col 1 end -->

            <div class="col-md-4 margin-column">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-envelope mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Envíanos un correo electrónico</h4>
                        <p>ventas@valvulasreval.mx</p>
                    </div>
                </div>
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="ts-service-box-bg text-center h-100">
                    <span class="ts-service-icon icon-round">
                        <i class="fa fa-phone mr-0"></i>
                    </span>
                    <div class="ts-service-box-content">
                        <h4>Llámanos</h4>
                        <p>(729) 281 0986</p>
                    </div>
                </div>
            </div><!-- Col 3 end -->

        </div><!-- 1st row end -->

        <div class="gap-60"></div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="column-title">Envianos un mensaje</h3>
                <form id="contact-form" action="#" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre (s)</label>
                                <input class="form-control form-control-name" name="names" id="names" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input class="form-control form-control-email" name="email" id="email" type="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Télefono</label>
                                <input class="form-control form-control-subject" name="phone" id="phone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control form-control-message" name="message" id="message" rows="10"></textarea>
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Enviar mensaje</button>
                    </div>
                </form>
            </div>

        </div><!-- Content row -->

        <div class="gap-40"></div>

        <div class="google-map">
            <h3 class="column-title">Nuestra ubicación</h3>
            <div id="map" class="map" data-marker="{{ asset('images/marker.png') }}" data-marker-name="Reval S.A. de C.V."></div>
            <div class="text-right"><br>
                <button class="btn btn-primary solid blank" onclick="mapsSelector();">Iniciar viaje</button>
            </div>
        </div>

    </div><!-- Conatiner end -->
</section>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ mix('js/contact.js') }}" defer></script>
<script>
    $(function(){
        $('#contact-form').validate({
            rules: {
                names: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    maxlength: 12,
                    minlength: 10,
                    digits: true
                },
                message: {
                    required: true
                }
            },
            messages: {

            }
        });
    });
</script>
@endpush