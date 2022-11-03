

    <nav class="navbar fixed-top navbar-expand-lg bg-light ">
        <div class="container-fluid navbar">
          <a class="navbar-brand" href="{{ route('index') }}">Alp</a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamb"></div>
            <div class="hamb"></div>
            <div class="hamb"></div>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              @foreach (App\Models\Category::all() as $category)
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
              </li>
              @endforeach
            </ul>
            <form class="d-flex" role="search" method="get" action="{{ route('search') }}">
              <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success btnSearch" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

