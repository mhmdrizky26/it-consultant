<nav class="navbar navbar-expand-lg bg-body-light border-bottom border-3 border-dark sticky-top bg-light">
    <div class="container-fluid p-0 container col-10">
            <div class="">
                <a href="/"><img src="img/logo.png" class="me-4" alt="" width="50"></a>
            </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav col-lg-12">
                <li class="nav-item col-lg-6 row ">
                    <a class="col-lg-4 nav-link active fw-semibold" aria-current="page" href="/tentangkami">Tentang Kami</a>
                    </li>
                    <li class="nav-item col-lg-6 text-end">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-5 sm:block">
                            @auth
                            <h5 class="col-lg-9 ms-4 mt-2 float-start">{{ Auth::user()->name }}</h5>
                            <form method="POST" action="{{ route('logout') }}" class="btn btn-dark my-auto">
                                @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <span class="text-light text-decoration-none">
                                            {{ __('Keluar') }}
                                        </span>
                    </li>
                    </x-responsive-nav-link>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn fw-semibold btn btn-outline-dark">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endif
                @endauth
        </div>
        @endif
        </li>
        </ul>
    </div>
    </div>
</nav>
