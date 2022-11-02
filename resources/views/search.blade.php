<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Home</title>

    <style>
        .card-text {
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 my-4">
                <div class="card text-center mt-4">
                    @foreach($articles as $article)
                        @include('article', ['article' => $article])
                    @endforeach
                </div>
            </div>
        </div>
    </div>



</body>
