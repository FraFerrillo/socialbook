<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="/homepage">
            <img src="/img/logo.png" height="50px" width="90px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item mx-5">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home fa-2x"></i></a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" href="#"><i class="fas fa-store-alt fa-2x text-dark"></i></a>
            </li>
            <li class="nav-item mx-5">
                <a class="nav-link" href="#"><i class="fas fa-users fa-2x text-dark"></i></a>
            </li>
            <li class="nav-item mx-5">
            <a class="nav-link" href="#"><i class="fas fa-user-plus fa-2x text-dark"></i></a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->

        <ul class="navbar-nav mb-2 mb-lg-0">
            <div class="dropdown">
                <a class="btn mx-2 border-0 shadow dropdown-toggle" href="#" role="button"
                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li>
                    {{-- <a class="dropdown-item" href="{{ route('ads.index_user') }}">Profilo</a> --}}
                    </li>
                </ul>
            </div>
        </ul>
    </div>
  </div>
</nav>
