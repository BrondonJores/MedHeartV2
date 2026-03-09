<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Route::currentRouteName();}}</title>
    <!--Icones section -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('storage/images/logo.png') }}" type="image/x-icon">

</head>
<body class="login_body" style="background-image:  url('{{ asset('storage/images/login_image.png') }}');">
{{ $slot }}

@include('sweetalert::alert')
@vite('resources/js/app.js')

@if(session('alert'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: '{{ session("alert")["type"] }}',
            title: '{{ session("alert")["message"] }}',
            showConfirmButton: false,
            timer: 3000,
            didClose: () => {
                @if(session("alert")["redirect"])
                    window.location.href = '{{ session("alert")["redirect"] }}';
                @endif
            }
        });
    </script>
@endif

@if(session('image_alert'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            title: '{{ session("image_alert")["title"] }}',
            text: '{{ session("image_alert")["text"] }}',
            imageUrl: '{{ asset('storage/images/logo.png') }}',
            imageWidth: 60,
            imageHeight: 60,
            imageAlt: 'Image',
            showConfirmButton: false,
            timer: 4000,
            didClose: () => {
                @if(session("image_alert")["redirect"])
                    window.location.href = '{{ session("image_alert")["redirect"] }}';
                @endif
            }
        });
    </script>
@endif

</body>
</html>
