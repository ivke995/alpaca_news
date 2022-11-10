
@extends('layout')
@section('content')

<img src="{{ $article->image_url }}" class="img-fluid"/>
<div class="newsContent">
    <h2>{{ $article->title }}</h2>
    <div class="newsInfo"><div>{{ $article->source->name }}</div> <div class="visit"><p>{{ $article->visits }}</p><i class="bi bi-eye"></i></div></div>
    <div><b>{{ $article->firstParagraph }}</b></div>
    <div class="newsText">{{ $article->restOfText }}</div>
    <hr/>
</div>

<div class="scrolling-wrapper1">
    @foreach($articles as $smallArticle)
        @include('smallArticle', ["article"=>$smallArticle] )
    @endforeach
</div>

@endsection
