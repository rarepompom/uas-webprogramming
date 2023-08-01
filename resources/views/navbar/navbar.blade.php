<!-- Navbar -->
<header>
    <div class="navbar navbar-expand-lg p-3">
        <a href="/" class="logo-first">
            <img src="{{ asset('logo.svg') }}" alt="" width="200" height="50">
        </a>

        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="/">@lang('wedding.navbar.home')</a>
              <a class="nav-link" href="/bookings"></a>
            </div>
        </div>

    </div>
            <ul class="navbar-nav me-5">
                {{-- jika sudah login --}}
                @auth
                    <li class="nav-item dropdown d-flex">
                        <div class="form-check form-switch nav-link me-3 px-3">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Id</label>
                            <input class="form-check-input" id="switch-lang" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault"
                                onclick="switchLang(@if (session()->get('locale') == 'id') 'en' @else 'id' @endif)"
                                {{ session()->get('locale') == 'id' ? 'checked' : '' }}>
                        </div>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->is_admin == 1)
                                <li>
                                    <a class="dropdown-item d-flex" href="/admin">
                                        <i class="bi bi-grid-fill mt-1 me-2"></i>
                                        {{-- <i class="bi bi-layout-text-sidebar-reverse mt-1 me-2"></i> --}}
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endif
                            <li>
                                <form action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span class="">Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>

                    {{-- jika belum login --}}
                @else
                    <a class="nav-item d-flex flex-row nav-link" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right mt-1"></i>
                        <span class="ms-2">Login</span>
                    </a>

                @endauth

            </ul>

</header>


<style>
    /* Navbar */
    header {
        z-index: 999;
        position: fixed;
        display: flex;
        top: 0;
        left: 0;
        width: 100%;
        justify-content: space-between;
        background: white;
        align-items: center;
        transition: 0.5s ease;
    }

    /* navbar ketika discroll */
    header.sticky {
        background: white;
    }

    header .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header .navbar a {
        position: relative;
        color: #9a9494;
        font-size: 1.328144vw;
        font-weight: 550;
        text-decoration: none;
        margin-left: 2.343784vw;
        transition: 0.3s ease;
    }

    header .navbar .active a {
        color: black;
    }

    header .navbar a:hover {
        color: black;
    }

    /* underlined di bawah waktu hover */
    header .navbar .collapse {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        align-items: center;
    }

    header .navbar .collapse a:before {
        content: '';
        position: absolute;
        background: black;
        width: 0;
        height: 0.312505vw;
        bottom: 0;
        left: 0;
        transition: 0.3s ease;
    }

    /* waktu dihover mau sepanjang apa */
    header .navbar .collapse a:hover:before {
        width: 100%;
    }

    header .navbar .collapse a.contact-us:hover:before {
        width: 0%;
    }
</style>
