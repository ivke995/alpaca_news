<div id="source">

    <div class="d-flex p-2">
    <ul class="">
        @foreach (App\Models\Article::where('source_id', $source->id)->get() as $article)
            @include('article')
        @endforeach
    </ul>
</div>
</div>
