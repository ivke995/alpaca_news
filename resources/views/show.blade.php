
@extends('layout')
@section('content')
    





<div class="container singleMar" style="width: 60%;">


    <div class="card px-3 pt-3" style="">

        <!-- News block -->
        <div>
            <!-- Featured image -->
            <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4 centar" data-mdb-ripple-color="light">
                <img src="{{ $article->image_url }}" class="img-fluid"/>
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <!-- Article data -->
            <div class="row mb-3">
                <div class="col-6">
                    <a href="https://www.xtrafondos.com/wallpapers/groot-bebe-escuchando-musica-6450.jpg" class="text-info">
                        <i class="fas fa-plane">{{ $article->source->name }}</i>
                    </a>
                </div>

                <div class="col-6 text-end">
                    <p>{{ $article->created_at->format('d. m. Y. H:i:s') }}</p>
                </div>
            </div>

            <!-- Article title and description -->
            <a href="" class="text-dark"> </a>
                <h5>{{ $article->title }}</h5>

                <p style="white-space: pre-wrap">
                    {{ $article->text }}
                </p>

            <hr/>

            @foreach($articles as $smallArticle)
                @include('article', ['article' => $smallArticle] )
            @endforeach

    </div>

</div>
<div style="position:fixed; top: 10px; left: 10px">
    <button type="button" class="btn btn-primary backBtn"><a style="color: white; text-decoration: none;" href="{{ url()->previous() }}">Nazad</a></button>
</div>
</div>
@endsection
