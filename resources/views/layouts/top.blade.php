<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl nav-display" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        @auth
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="font-weight-bold text-transformation-uppercase">WELCOME BACK, {{ Auth::user()->name }}</li>
        </ol>
        @endauth
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 container ml-auto" id="navbar">
        <ul class="navbar-nav  justify-content-end ml-auto container-for-nav-visibles">
          @guest
          @if (Route::has('login'))
              <li class="nav-item text-align-end">
                  <a class="nav-link ml-auto" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          {{-- <li class="nav-item dropdown ml-auto online">
              <a id="navbarDropdown" class="nav-link dropdown-toggle ml-auto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                      @csrf
                  </form>
              </div>
          </li> --}}
      @endguest
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
             @auth
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
             @endauth
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
