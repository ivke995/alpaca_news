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
        @foreach($sources as $source)
            <div class="col-12 col-md-6 my-4">
                <div class="card text-center mt-4">
                    <h5 class="card-header"><img src="{{ $source->link_logo }}" alt="{{ $source->name }}" style="height: 20px" /> {{ $source->name }}</h5>
                    <div class="card-body" style="max-height: 90vh; overflow-y: auto; overflow-x: hidden;">

                        @if(isset($category) && $category)
                            @foreach($source->articles()->where('category_id', $category->id)->orderBy('created_at', 'desc')->limit(40)->get() as $article)
                                @include('article', ['article' => $article])
                            @endforeach
                        @else
                            @foreach($source->articles()->orderBy('created_at', 'desc')->limit(40)->get() as $article)
                                @include('article', ['article' => $article])
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


</body>
</html>
