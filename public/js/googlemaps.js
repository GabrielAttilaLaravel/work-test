/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ 4:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(5);


/***/ }),

/***/ 5:
/***/ (function(module, exports) {


function initMap() {
    var divMapa = document.getElementById('map');

    navigator.geolocation.getCurrentPosition(fn_ok, fn_error);
    //console.log(navigator.geolocation.getCurrentPosition().address)
    function fn_error() {
        divMapa.innerHTML = 'Hubo un problema solicitando los datos';
    }

    function fn_ok(respuesta) {
        var lat = respuesta.coords.latitude;
        var lon = respuesta.coords.longitude;

        var gLatLng = new google.maps.LatLng(lat, lon);

        var objConfig = {
            zoom: 17,
            center: gLatLng

            // establecemos donde se va a renderizar y su configuración
        };var gMapa = new google.maps.Map(divMapa, objConfig);

        var objConfigMarker = {
            position: gLatLng,
            animation: google.maps.Animation.DROP,
            draggable: true,
            map: gMapa,
            title: 'Ubicación de su negocio'
        };

        var gMarker = new google.maps.Marker(objConfigMarker);

        var data = {
            'title': 'GabrielAttila',
            'src': '',
            'text': 'Programando Geolocalización',
            'href': 'http://www.gabrielattila.com.ve',
            'hrefValue': 'Perfil'
        };

        InfoWindow(gMapa, gMarker, data);

        google.maps.event.addListener(gMarker, 'dragend', function (event) {
            document.getElementById("coords").value = this.getPosition().toString();
        });

        // obtenemos el pais en base a las coordenadas de la ubicación
        var gCoder = new google.maps.Geocoder();
        console.log(lat + ',' + lon);
        gCoder.geocode({ 'latLng': gLatLng }, function (results, status) {
            console.log(results[6].address_components[0]);
        });

        //searchGeocoder(gMapa);

        /*var objConfigDR = {
            map: gMapa,
            suppressMarkers: true
        }
         var objConfigDS = {
            origin: gLatLng, // LatLng ó String del domicilio
            destination: objInformacion.address, // LatLng ó String
            travelMode: google.maps.TravelMode.DRIVING //DRIVING, WALKING, TRANSIT, BICYCLING //forma en la que se lelga del punto 'A' al punto 'B' (auto, caminando, bicicleta, transporte)
        }
         var ds = new google.maps.DirectionsService() // obtenemos coordenadas
        var dr = new google.maps.DirectionsRenderer( objConfigDR ) // Traduce las coordenadas a la ruta visible (la linea que traza de un lugar a otro)
         ds.route( objConfigDS, fnRutear );
         function fnRutear( resultados, status ) {
            // mostrar la linea entre A y B
            if ( status === 'OK' ){
                dr.setDirections( resultados );
            }else{
                alert( 'Error: ' + status );
            }
        }*/
    }
}

// traducimos un domicilio en una coordenada
function searchGeocoder(gMapa) {
    var gCoder = new google.maps.Geocoder();
    var objInformacion = {
        address: 'yaracuy, venezuela'
    };

    gCoder.geocode(objInformacion, fn_coder);

    function fn_coder(datos) {
        var coordenadas = datos[0].geometry.location; // obj LatLng

        var config = {
            map: gMapa,
            position: coordenadas
            //title: 'Titulo '
        };

        var gMarker = new google.maps.Marker(config);
        // podemos cambiar la imagen del chinche
        //gMarkerDV.setIcon('');

        var data = {
            'title': 'GabrielAttila',
            'src': '',
            'text': 'Programando Geolocalización',
            'href': 'http://www.gabrielattila.com.ve',
            'hrefValue': 'Perfil'
        };

        InfoWindow(gMapa, gMarker, data);
    }
}

function InfoWindow(gMapa, gMarkerDV, data) {

    var objHTML = {
        content: '<div style="height: 150px; width: 300px">' + '<h2>' + data.title + '</h2>' + '<img src="' + data.src + '">' + '<p>' + data.text + '</p>' + '<a href="' + data.href + '">' + data.hrefValue + '</a>' + '</div>'
    };
    var gIW = new google.maps.InfoWindow(objHTML);

    google.maps.event.addListener(gMarkerDV, 'click', function () {
        gIW.open(gMapa, gMarkerDV);
    });
}

google.maps.event.addDomListener(window, 'load', initMap());

/***/ })

/******/ });