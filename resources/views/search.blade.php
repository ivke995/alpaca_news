

@include('navbar')
@section('content')
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
@endsection
@include('footer')

