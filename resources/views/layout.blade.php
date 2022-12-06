<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href=
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap"
        rel="stylesheet">

    <title>Alpaka news</title>

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">


    <style>
        .card-text {
            text-align: left;
        }
    </style>
</head>
<body>
@include('categories')
<div>
    @if(session()->has('message'))
        <div class="alert alert-success" id="alert">
            {{ session()->get('message') }}

        </div>

    @endif
</div>


{{--    @if (\Session::has('success'))--}}
{{--        <div class="alert alert-success" id="message" x-init="setTimeout(() => showMessage = false, 3000">--}}
{{--            <ul>--}}
{{--                <li>{!! \Session::get('success') !!}</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
{{-- @include('navbar') --}}
@yield('content')
{{-- @include('footer') --}}
@include('mobileNav')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="{{ asset("js/script.js") }}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>

@stack('scripts')



<script type="text/javascript">
    $(document).ready(function ()
        {
           setTimeout(function ()
           {
               $("div.alert").remove();
           }, 3000)
        });
</script>


</body>
</html>
