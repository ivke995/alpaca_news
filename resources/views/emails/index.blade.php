{{--@component('mail::message')--}}
{{--# Welcome to the best source of news--}}

{{--You now become a new member of Alpaka community--}}
{{--@component('mail::button', ['url' => 'https://lumiere-a.akamaihd.net/v1/images/101_gfs1310_comp_v002_1bbdacda.jpeg?region=0%2C0%2C3840%2C2160'])--}}
{{--Visit site--}}
{{--@endcomponent--}}

{{--Thanks,<br>--}}
{{--Alpaka Team--}}
{{--{{ config('app.name') }}--}}
{{--@endcomponent--}}


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpaka News Email Send</title>
</head>
<body>
    <h3>Register Email from Alpaka News</h3>
    <p>{{ $data['body'] }}</p>
    <a href="https://lumiere-a.akamaihd.net/v1/images/101_gfs1310_comp_v002_1bbdacda.jpeg?region=0%2C0%2C3840%2C2160" style="text-decoration: none">ENTER WEBSITE</a>

</body>
</html>
