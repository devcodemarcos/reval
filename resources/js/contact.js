window.marker = null;

initialize = () => {
    let map;
    const latitude = 19.3134866;
    const longitude = -99.4668665;
    const mapMarker = $('#map').attr('data-marker');
    const mapMarkerName = $('#map').attr('data-marker-name');
    const lerma = new google.maps.LatLng(latitude, longitude);

    const mapOptions = {
        center: lerma,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        backgroundColor: "#000",
        zoom: 13,
        panControl: !1,
        zoomControl: !0,
        mapTypeControl: !1,
        scaleControl: !1,
        streetViewControl: !1,
        overviewMapControl: !1,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE
        }
    };

    const contentString = `
    <div id="content">
        <div id="siteNotice">
        </div>
        <h1 id="firstHeading" class="firstHeading">REVAL</h1>
        <div id="bodyContent">
        <!--
            <p>
                En REVAL nos dedicamos a prestar servicios especializados
                para atenderle en sus requerimientos. Nuestros procesos y
                productos son de la mejor calidad y nuestra trayectoria es
                la mejor garantia de nuestra excelencia y confiabilidad,
                misma que ponemos a disposicion a nivel internacional.
            </p>
        -->
        </div>
    </div>`;

    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    const infowindow = new google.maps.InfoWindow({
        content: contentString,
    });
    const pinIcon = new google.maps.MarkerImage(mapMarker, null, null, null, new google.maps.Size(40, 55));

    marker = new google.maps.Marker({
        position: lerma,
        map: map,
        icon: pinIcon
    });

    marker.setAnimation(google.maps.Animation.BOUNCE);

    marker.addListener("mouseover", () => {
        infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
        });
    });

    marker.addListener("mouseout", () => {
        infowindow.close();
    });
}

const map = document.getElementById('map');
if (map != null) {
    google.maps.event.addDomListener(window, 'load', initialize)
}

mapsSelector = () => {
    if /* if we're on iOS, open in Apple Maps */
        ((navigator.platform.indexOf("iPhone") != -1) ||
        (navigator.platform.indexOf("iPad") != -1) ||
        (navigator.platform.indexOf("iPod") != -1))
        window.open("maps://maps.google.com/maps?daddr=19.3134866,-99.4668665&amp;ll="); else /* else use Google */
        window.open("https://maps.google.com/maps?daddr=19.3134866,-99.4668665&amp;ll=");
}