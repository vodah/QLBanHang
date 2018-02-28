var map,DiaChi;

function initAutocomplete() {
    DiaChi = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById('DiaChi')),
        {types: ['geocode']});

    // When the user selects an route from the dropdown, populate the route
    // fields in the form.
    // DiaChi.addListener('place_changed', fillInAddress);


     // DiaChi = document.getElementById('DiaChi');


}

// function fillInAddress() {
//     // Get the place details from the address object.
//     var place = DiaChi.getPlace();
//
//     for (var component in componentForm) {
//         document.getElementById(component).value = '';
//         document.getElementById(component).disabled = false;
//     }
//
//     // Get each component of the address from the place details
//     // and fill the corresponding field on the form.
//     for (var i = 0; i < place.address_components.length; i++) {
//         var addressType = place.address_components[i].types[0];
//         if (componentForm[addressType]) {
//             var val = place.address_components[i][componentForm[addressType]];
//             document.getElementById(addressType).value = val;
//         }
//     }
// }

// Bias the address object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            DiaChi.setBounds(circle.getBounds());
        });
    }
}