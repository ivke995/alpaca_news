<!--Section: News of the day-->


<div class='smallArticle forHorScroll shadow-lg'>
    <a href="{{ route('show', $article->slug) }}">
    <div class="smallArtTitle"><b>{{ $article->title }}</b></div>
    <div class="smallArtSrc"><b>{{ $article->source->name }}</b></div>
    <img src="{{ $article->image_url }}" class="img-fluid widthHor"/></a>
</div>


