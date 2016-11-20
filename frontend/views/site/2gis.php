<?php

echo "привет 2 гис";
?>
<html>
    <head>
        <title>API карт 2ГИС</title>
        <script src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
        <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [48.47, 135.16],
                    zoom: 13
                });

                DG.marker('Хабаровск, ул.Горького 62а').addTo(map).bindPopup('Вы кликнули по мне!');
            });
        </script>
    </head>
    <body>
        <div id="map" style="width:500px; height:400px"></div>
    </body>
</html>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

