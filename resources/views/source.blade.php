@extends('layout')
@section('content')


    <div class="list-group">
        <div class="col-md-6">
                @foreach (App\Models\Article::where('source_id', $source->id)->get() as $article)
                    @include('article')
                @endforeach
        </div>
    </div>

@endsection
