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
    <form class="searchPos" role="search" method="get" action="{{ route('search') }}">
        <input class="form-control me-2 searchPolje" name="query" type="search" placeholder="Pretraga" aria-label="Search">
        <button class="btn btn-outline-success btnSearch" type="submit"><i class="bi bi-search"></i></button>
    </form>
    <i class="bi bi-search searchBtn"></i>
    @if(Auth::guest())
        <a href="{{ route('login') }}" class="blek"><i class="bi bi-person"></i></a>
    @endif
    @if(Auth::check())
        <form action="{{ route('logout') }}" method="post">
            @csrf
            {{--            <i class="bi bi-box-arrow-right"></i>--}}
            <button type="submit" class="logedIn"><i class="bi bi-box-arrow-right"></i></button>
        </form>
    @endif

</div>

