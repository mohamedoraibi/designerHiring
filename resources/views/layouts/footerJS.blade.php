<!-- Scripts
================================================== -->
<script src="/newStyle/js/jquery-3.5.1.min.js"></script>
<script src="/newStyle/js/jquery-migrate-3.3.1.min.js"></script>
<script src="/newStyle/js/mmenu.min.js"></script>
<script src="/newStyle/js/tippy.all.min.js"></script>
<script src="/newStyle/js/simplebar.min.js"></script>
<script src="/newStyle/js/bootstrap-slider.min.js"></script>
<script src="/newStyle/js/bootstrap-select.min.js"></script>
<script src="/newStyle/js/snackbar.js"></script>
<script src="/newStyle/js/clipboard.min.js"></script>
<script src="/newStyle/js/counterup.min.js"></script>
<script src="/newStyle/js/magnific-popup.min.js"></script>
<script src="/newStyle/js/slick.min.js"></script>
<script src="/newStyle/js/custom.js"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
{{--<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>--}}

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
    // Snackbar for user status switcher
    $('#snackbar-user-status label').click(function () {
        Snackbar.show({
            text: 'Your status has been changed!',
            pos: 'bottom-center',
            showAction: false,
            actionText: "Dismiss",
            duration: 3000,
            textColor: '#fff',
            backgroundColor: '#383838'
        });
    });
</script>


<!-- Google Autocomplete -->
<script>
    function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            // componentRestrictions: {country: "us"}
        };

        var input = document.getElementById('autocomplete-input');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    }

    // Autocomplete adjustment for homepage
    if ($('.intro-banner-search-form')[0]) {
        setTimeout(function () {
            $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
        }, 300);
    }

</script>
@yield('additionalJS')
<!-- Google API -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete"></script>--}}
