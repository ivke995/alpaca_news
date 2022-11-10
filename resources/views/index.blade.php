@extends('layout')
@section('content')


<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="subscriber_email" name="subscriber_email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="row">
        @foreach($sources as $source)
            <div class="col-12 col-md-6 my-4 margin0">
                <div class="card text-center mt-4 ">
                    <h5 class="card-header"><img src="{{ $source->link_logo }}" alt="{{ $source->name }}" style="height: 20px" /> {{ $source->name }}</h5>
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


