

<div class="mobileNav nav-menu">
    <i>
    <div class="categoriesBtn">
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner diagonal part-1"></div>
      <div class="spinner horizontal"></div>
      <div class="spinner diagonal part-2"></div>
    </label>
    </div>
    </i>

    <a href="{{ route('index') }}" class="blek"><i class="bi bi-house"></i></a>
    <a href=""{{ route('search') }} class="blek"><i class="bi bi-search"></i></a>
    @if(Auth::guest())
        <a href="{{ route('login') }}" class="blek"><i class="bi bi-person"></i></a>
    @endif
    @if(Auth::check())
        <form action="{{ route('logout') }}" method="post">
            @csrf
{{--            <i class="bi bi-box-arrow-right"></i>--}}
            <button style="color: " type="submit"><i class="bi bi-box-arrow-right"></i></button>
        </form>
    @endif


</div>
