(function (b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l; b[l] || (b[l] =
        function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
    e = o.createElement(i); r = o.getElementsByTagName(i)[0];
    e.src = '//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
}(window, document, 'script', 'ga'));
ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');

var customLabel = {
    restaurant: {
        label: 'R'
    },
    bar: {
        label: 'B'
    }
};

function initMap() {
    var map = new google.maps.Map(document.getElementById('map-container-google-2'), {
        center: new google.maps.LatLng(4.304975148566968, -74.80338112272622),
        zoom: 7,
        heading: 90,
        tilt: 45
    });


    var infoWindow = new google.maps.InfoWindow;
    downloadUrl('http://localhost/mapaTuristico/Views/xml.php', function (data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function (markerElem) {
            var idmapa = markerElem.getAttribute('idmapa');
            var persona = markerElem.getAttribute('persona');
            var descripcion = markerElem.getAttribute('descripcion');
            var edad = markerElem.getAttribute('edad');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));
            const contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<center>' +
                '<h1 id="firstHeading" class="firstHeading">' + persona + '</h1>' +
                '</center>' +
                '<br>' +
                '<div id="bodyContent">' +
                '<br>' +
                "<p><b>" + descripcion + "</p>" +
                "<p><b>" + edad + " Años" + "</p>" +
                "</p>" +
                "</div>" +
                "</div>";


            //const image = "img/soldadoss.png";
            //  var icon = customLabel[codigo] || {};



            var marker = new google.maps.Marker({
                map: map,
                position: point,
                //icon: image
            });
            marker.addListener('click', function () {
                infoWindow.setContent(contentString);
                infoWindow.open(map, marker);
            });
        });
    });

    // Una matriz con las coordenadas de los límites de Bucaramanga, extraídas manualmente de la base de datos GADM


}

function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;
    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };
    request.open('GET', url, true);
    request.send(null);
}

function doNothing() { }