"use strict"

$(function () {
    initMap();
});

// the Maps JavaScript API - footer addon a map
async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");

    const map = new Map(document.getElementById('map'), {
        center: { lat: -6.2393246, lng: 106.8449593 },
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [{ "color": "#d3d3d3" }]
            },
            {
                "featureType": "transit",
                "stylers": [{ "color": "#808080" },{ "visibility": "off" }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{ "visibility": "on" },{ "color": "#b3b3b3" }]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{ "color": "#ffffff" }]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry.fill",
                "stylers": [{ "visibility": "on" },{ "color": "#ffffff" },{ "weight": 1.8 }]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry.stroke",
                "stylers": [{ "color": "#d7d7d7" }]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [{ "visibility": "on" },{ "color": "#ebebeb" }]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{ "color": "#a7a7a7" }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [{ "color": "#ffffff" }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry.fill",
                "stylers": [{ "color": "#ffffff" }]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [{ "visibility": "on" },{ "color": "#efefef" }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{ "color": "#696969" }]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{ "visibility": "on" },{ "color": "#737373" }]
            },
            {
                "featureType": "poi",
                "elementType": "labels.icon",
                "stylers": [{ "visibility": "off" }]
            },
            {
                "featureType": "poi",
                "elementType": "labels",
                "stylers": [{ "visibility": "off" }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry.stroke",
                "stylers": [{ "color": "#d6d6d6" }]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{ "visibility": "off" }]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [{ "color": "#dadada" }]
            }
        ]
    });
    
    const locations = [
        { lat: -6.2393246, lng: 106.8449593, title: 'Honda Setianita Tebet', phone: '+62 021 8302060', address: 'PT. Setianita Megah Motor Jl. Prof DR Soepomo SH No. 44 Tebet, Jakarta Selatan 12870', web: `${window.location.origin}/tebet` },
        { lat: -6.3464616, lng: 106.7765855, title: 'Honda Setianita Megah Cinere', phone: '+62 021 7532288', address: 'PT. Setianita Megah Motor JL. Raya Cinere No. 88 Limo Cinere Depok', web: `${window.location.origin}/cinere` }
    ];

    locations.forEach(location => {
        const marker = new google.maps.Marker({
            position: { lat: location.lat, lng: location.lng },
            map: map,
            title: location.title,
        });

        const infoWindow = new google.maps.InfoWindow({
            content: `
                <div class="text-gray-800 max-w-[300px]">
                    <div class="text-lg">${location.title}</div>
                    <div class="text-xs mb-3">${location.address}</div>
                    <a href="${location.web}" class="flex items-center gap-1 text-xs group">
                        <i class='bx bx-link-alt text-lg'></i>
                        <span class="group-hover:font-semibold">${location.web}</span>
                    </a>
                    <a href="tel:0218302060" class="flex items-center gap-1 text-xs group">
                        <i class='bx bxs-phone-call text-lg'></i>
                        <span class="group-hover:font-semibold">${location.phone}</span>
                    </a>
                    <div class="">
                        <i class='bx bxs-map text-red-600 text-lg'></i>
                        <span>${location.lat}</span>,
                        <span>${location.lng}</span>
                    </div>
                </div>
            `,
        });

        marker.addListener('click', () => {
            infoWindow.open(map, marker);
        });
    });
}