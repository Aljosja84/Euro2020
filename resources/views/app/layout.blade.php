<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
        <link href="css/app.css" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="topmenu" style="position: absolute; z-index: 5">
          <div class="flex-center"><img src="images/logo_euro2020.png" style="padding-left: 5px"/></div>
          <div class="flex-center">
        <a id="HOME" href="#" style="padding-right: 10px">Home</a>
        <a id="AMS" href="#" style="padding-right: 10px">Amsterdam</a>
        <a id="GLA" href="#" style="padding-right: 10px">Glasgow</a>
        <a id="BAK" href="#" style="padding-right: 10px">Baku</a>
        <a id="BUC" href="#" style="padding-right: 10px">Bucharest</a>
        <a id="BUD" href="#" style="padding-right: 10px">Budapest</a>
        <a id="COP" href="#" style="padding-right: 10px">Copenhagen</a>
        <a id="DUB" href="#" style="padding-right: 10px">Dublin</a>
        <a id="LON" href="#" style="padding-right: 10px">London</a>
        <a id="MUN" href="#" style="padding-right: 10px">Munich</a>
        <a id="ROM" href="#" style="padding-right: 10px">Rome</a>
        <a id="PET" href="#" style="padding-right: 10px">Saint Petersburg</a>
        <a id="BIL" href="#">Bilboa</a>
          </div>
      </div>
      <div id='map_background' style="height:100%; width:100%; position: absolute; z-index: 0"></div>

      <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiYWxqb3NqYTg0IiwiYSI6ImNrN2RobzM0ZTA5ZGUzb253YnFlZDZ2M3gifQ.3E9_BSsxKdqU25O8R7KOpg';
          var map = new mapboxgl.Map({
            container: 'map_background',
            style: 'mapbox://styles/aljosja84/ck7dhypob0y6l1ikby7qeq2zu',
            center: { lon: 5.25656, lat: 51.19153 },
            zoom: 4.06,
            pitch: 33.00,
            bearing: 9.54,
            interactive: false
        });

        /**
        ------------ AMSTERDAM --------------
        */
        document.getElementById('AMS').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 4.93113, lat: 52.37625 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.3,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ GLASGOW --------------
        */
        document.getElementById('GLA').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: -4.22385, lat: 55.95465 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.3,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ BAKU --------------
        */
        document.getElementById('BAK').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 49.76447, lat: 40.50385 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.7,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ LONDON --------------
        */
        document.getElementById('LON').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: -0.28201, lat: 51.59977 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ DUBLIN --------------
        */
        document.getElementById('DUB').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: -6.32547, lat: 53.51102 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ COPENHAGEN --------------
        */
        document.getElementById('COP').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 12.58369, lat: 55.73169 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ BUDAPEST --------------
        */
        document.getElementById('BUD').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 19.08598, lat: 47.58372 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ BUCHAREST --------------
        */
        document.getElementById('BUC').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 26.16951, lat: 44.48370 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ BILBOA --------------
        */
        document.getElementById('BIL').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: -2.95899, lat: 43.35881 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ MUNICH --------------
        */
        document.getElementById('MUN').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 11.54448, lat: 48.19486 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ ROME --------------
        */
        document.getElementById('ROM').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 12.54566, lat: 41.92128 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ SAINT PETERSBURG --------------
        */
        document.getElementById('PET').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 30.31600, lat: 59.88792 },
            zoom: 4.84,
            pitch: 0.00,
            bearing: 0.00,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });

        /**
        ------------ HOME --------------
        */
        document.getElementById('HOME').addEventListener('click', function() {
          // Fly to a random location by offsetting the point -74.50, 40
          // by up to 5 degrees.
          map.flyTo({
            center: { lon: 5.25656, lat: 51.19153 },
            zoom: 4.06,
            pitch: 33.00,
            bearing: 9.54,
            speed:0.5,
            essential: true // this animation is considered essential with respect to prefers-reduced-motion
          });
        });


</script>
    </body>
</html>
