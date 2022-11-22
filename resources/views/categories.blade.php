<div id="category">
   
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach (App\Models\Category::all() as $category)
        <li class="nav-item">
          <div class="listEl"><a class="nav-link active" aria-current="page" href="{{ route('category', $category->id) }}">{{ $category->name }}</a></div>
        </li>
        @endforeach
      </ul>
</div>