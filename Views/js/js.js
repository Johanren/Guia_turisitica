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

async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
    const map = new Map(document.getElementById("map-container-google-2"), {
        center: { lat: 4.30497514856696, lng: -74.803381122726 },
        zoom: 14,
        heading: 90,
        tilt: 45
      });


    var infoWindow = new google.maps.InfoWindow;
    downloadUrl('http://localhost/Guia_turisitica/Views/xml.php', function (data) {
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
                "<p><b>" + "Telefono: " + edad + "</p>" +
                "</p>" +
                "</div>" +
                "</div>";


            //const image = "img/soldadoss.png";
            //  var icon = customLabel[codigo] || {};

            const priceTag = document.createElement("div");

            priceTag.className = "price-tag";
            priceTag.textContent = "$2.5M";

            var marker = new google.maps.Marker({
                map: map,
                position: point,
                title: persona,
                content: priceTag,
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

//narvar
document.addEventListener("DOMContentLoaded", function (event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
});