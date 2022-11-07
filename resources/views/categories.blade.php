<div id="category">
   
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @foreach (App\Models\Category::all() as $category)
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
        </li>
        @endforeach
      </ul>
</div>