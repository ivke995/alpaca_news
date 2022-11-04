
@extends('layout')
@section('content')

<div class="category">
   
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach (App\Models\Category::all() as $category)
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
        </li>
        @endforeach
      </ul>
</div>

<img src="{{ $article->image_url }}" class="img-fluid"/>
<div class="newsContent">
    <h2>{{ $article->title }}</h2>
    <div class="newsInfo"><div>{{ $article->source->name }}</div> <i class="bi bi-eye"></i></div>
    <div>{{ $article->firstParagraph }}</div>
    <div class="newsText">{{ $article->text }}</div>

    <hr/>



</div>

<div class="scrolling-wrapper">
    @foreach($articles as $smallArticle)
        @include('smallArticle', ["article"=>$smallArticle] )
    @endforeach
</div>
<div class="mobileNav nav-menu">
    <a href="javascript:void(0);"onclick="myFunction()">
    <div class="categoriesBtn">
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>
    </div>   
    </a> 
  
    
    <i class="bi bi-house"></i>
    <i class="bi bi-arrow-up-right-circle"></i>
    <i class="bi bi-person"></i>

</div>




{{-- <div class="container singleMar" style="width: 100%">


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
<<<<<<< Updated upstream

    <h1>{{ $article->firstParagraph }}</h1>
    <h3>{{ $article->restOfText }}</h3>

<div style="position:fixed; top: 10px; left: 10px">
    <button type="button" class="btn btn-primary backBtn"><a style="color: white; text-decoration: none;" href="{{ url()->previous() }}">Nazad</a></button>
</div>
=======
>>>>>>> Stashed changes
</div>
</div> --}}
@endsection
