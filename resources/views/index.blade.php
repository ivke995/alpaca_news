@extends('layout')
@section('content')


<div class="container">
    <div class="row">
        @foreach($sources as $source)
            <div class="col-12 col-md-6 my-4 margin0">
                <div class="card text-center mt-4 ">
                    <a style="text-decoration: none; color: white" href="{{ route('source', $source->id) }}"><h5 class="card-header"><img src="{{ $source->link_logo }}" alt="{{ $source->name }}" style="height: 20px" /> {{ $source->name }}</h5></a>
{{--                    <h5 class="card-header"><img src="{{ $source->link_logo }}" alt="{{ $source->name }}" style="height: 20px" /> {{ $source->name }}</h5>--}}
                    <div class="card-body scrolling-wrapper" >
                        @if(isset($category) && $category)
                            @foreach($source->articles()->where('category_id', $category->id)->orderBy('created_at', 'desc')->limit(40)->get() as $index => $article)
                                @if(!($index % 5) && $index)
                                    @include('article-advertise')
                                @endif
                                @include('article', ['article' => $article])
                            @endforeach
                        @else
                            @foreach($source->articles()->orderBy('created_at', 'desc')->limit(40)->get() as $index => $article)
                                @if(!($index % 5) && $index)
                                    @include('article-advertise')
                                @endif
                                @include('article', ['article' => $article])
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


