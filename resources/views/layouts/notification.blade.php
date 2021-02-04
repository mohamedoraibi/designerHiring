<!-- Magnific Popup -->
<script src="/newStyle/js/toastr.min.js"></script>

<!-- Lightbox init js -->
<script src="/newStyle/js/toastr.init.js"></script>

<link rel="stylesheet" type="text/css" href="/newStyle/css/toastr.min.css">

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    @if ($message = Session::get('success'))
    toastr.success(`{{$message}}`);
    @endif
    @foreach ($errors->all() as $error)
    toastr.error("{{$error}}")
    @endforeach

</script>
