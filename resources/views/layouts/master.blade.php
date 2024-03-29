<!DOCTYPE html>

<html>

<head>
    @include('layouts.meta')

    @yield('title')

    @include('layouts.css')

</head>

<body>

    <div class="container-fluid nav-fullwidth">
           @include('partials.navigation')
    </div>

    @include('partials.cover-with-search')

    <div class="container">

        @include('partials.reviews')

        @yield('content')
    </div>


        @include('partials.footer')


        <script src="{{ mix('js/app.js')}}"></script>

    <script>$(window).on('scroll', function () {

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());
            console.log(stop);
    if (stop > 150) {
        $('.nav-main').addClass('past-main');
        $('.nav-link').addClass('past-main');

        $('.logo-black').addClass('show');
        $('.logo').addClass('hide');
        $('.logo-black').removeClass('hide');
        $('.logo').removeClass('show');
    } else {
        $('.nav-main').removeClass('past-main');
        $('.nav-link').removeClass('past-main');


        $('.logo-black').addClass('hide');
        $('.logo').addClass('show');

        $('.logo-black').removeClass('show');
        $('.logo').removeClass('hide');
    }
});</script>
<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
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
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx6Snov6RuTJo9997xOMVYKRSbkjb0T18&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>

</html>
