@extends('layout')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <img src="{{ $article->image_url }}" class="img-fluid"/>
{{--        <h4>{!! (new \Jorenvh\Share\Share())->page($page, $article->title)->twitter()->facebook()->linkedin()->whatsapp() !!}</h4>--}}


    <style>

        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 25px;
            color: #222;
            background-color: #ccc;
        }
    </style>
    <div class="newsContent">
        <h2>{{ $article->title }}</h2>
        <div class="newsInfo">
            <div>{{ $article->source->name }}</div>
            <div class="visit"><p>{{ $article->visits }}</p><i class="bi bi-eye"></i>
                <div class="social_icons">
                    <div class="social_icon">
                        <a id="shareWithFb"><i class="fab fa-facebook icons"></i></a>
                        <a id="shareWithTwitter"><i class="fab fa-twitter icons"></i></a>
                        <a id="shareWithWhatsapp"><i class="fab fa-whatsapp icons"></i></a>
                        <a id="shareWithMail"><i class="fas fa-envelope icons"></i></a>
                        <a id="shareWithViber"><i class="fab fa-viber"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div><b>{{ $article->firstParagraph }}</b></div>
        <div class="newsText">{{ $article->restOfText }}</div>
        <hr/>
    </div>

    <div class="scrolling-wrapper1">
        @if(str_contains(url()->previous(), 'source'))
            @foreach($source_small_articles as $index => $smallArticle)
                @include('smallArticle', ["article"=>$smallArticle] )
            @endforeach
        @elseif(App\Models\Article::where('slug', App\Models\Article::checkSlugExists())->first())
            @foreach($source_small_articles as $key => $smallArticleValue)
                @include('smallArticle', ["article"=>$smallArticleValue] )
            @endforeach

        @else
            @foreach($articles as $smallArticle)
                @include('smallArticle', ["article"=>$smallArticle] )
            @endforeach
        @endif

        {{--        App\Models\Article::where('source_id', $id)->get()--}}
    </div>
@endsection

@push('scripts')
    <script>
        let copiedLink = window.location.href;
        let user = 'ivanpraksainfo@gmail.com';
        $(document).ready(function() {
            $('#shareWithTwitter').click(function () {
                window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
            });

            $('#shareWithFb').click(function () {
                window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
            });
            $('#shareWithMail').click(function () {
                let formattedBody = (copiedLink);
                let mailToLink = "mailto:?subject= " + user + " wants you to donate to this noble cause&body=" + encodeURIComponent(formattedBody);
                window.location.href = mailToLink;
            });
            $('#shareWithWhatsapp').click(function () {
                let win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
                win.focus();
            });
            $('#shareWithViber').click(function () {
                let win = window.open('viber://forward?text=' + encodeURIComponent(copiedLink));
                win.focus();
            });
            });

    </script>
    @endpush


{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">--}}


