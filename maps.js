// On s'assure que la page est cahrgée
window.onload = function() {
    let macarte = L.map("carte").setView([48.852969, 2.349903], 13)
    L.tileLayer('//{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'carte',
    minZoom: 1,
    maxZoom: 20
}).addTo(macarte);
}

// on active la gestion d'itineraire
L.Routing.control({
        geocoder: L.Control.Geocoder.nominatim()
    }).addTo(L.map("carte"))
    
    // let macarte = L.map("carte")
//     L.Routing.control({
//     waypoints: [
//       L.latLng(57.74, 11.94),
//       L.latLng(57.6792, 11.949)
//     ]
//   }).addTo(L.map("carte"));

//   function createButton(label, container) {
//     var btn = L.DomUtil.create('button', '', container);
//     btn.setAttribute('type', 'button');
//     btn.innerHTML = label;
//     return btn;
// }

// macarte.on('click', function(e) {
//     var container = L.DomUtil.create('div'),
//         startBtn = createButton('Start from this location', container),
//         destBtn = createButton('Go to this location', container);

//     L.popup()
//         .setContent(container)
//         .setLatLng(e.latlng)
//         .openOn(macarte);
// });

