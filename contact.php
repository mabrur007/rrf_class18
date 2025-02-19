<?php require_once('header.php') ?>
<div class="main-part">
    <h4>Contact</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio debitis iste blanditiis mollitia tempora repudiandae nobis enim, inventore porro vel quos illum minima accusamus corporis sint in numquam provident neque!</p>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([23.76, 90.46], 14);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var greenIcon = L.icon({
            iconUrl: 'leaf-red.png',
            shadowUrl: 'leaf-shadow.png',

            iconSize: [38, 95], // size of the icon
            shadowSize: [50, 64], // size of the shadow
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62], // the same for the shadow
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        L.marker([23.76, 90.46], {
                icon: greenIcon
            }).addTo(map)
            .bindPopup('<b>Mir Mabrur</b>')
            .openPopup();

        // L.marker([23.76, 90.46]).addTo(map)
        //     .bindPopup('<b>Mir Mabrur</b>')
        //     .openPopup();
        var circle = L.circle([23.76, 90.46], {
            color: 'green',
            fillColor: '#555',
            fillOpacity: 0.6,
            radius: 400
        }).addTo(map);
    </script>
</div>
<?php require_once('footer.php') ?>