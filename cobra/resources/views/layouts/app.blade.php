<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <!-- CSS -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/extern/materialize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/layout/layout.css') }}" >
</head>
<body>

  {{-- DROPDOWN #1  --}}
  <ul id="profielDropdown" class="dropdown-content">
      <li>
          <a href="/profile?usr=  @if (Auth::check()) {{ Auth::user()->name }} @endif"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Profile</a>
      </li>
      <li>
          <a href="{{ url('/profile/settings') }}">Settings</a>
      </li>
     <li class="divider"></li>
     <li>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
        <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>Log out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
        </form>
     </li>
  </ul>

  {{-- DROPDOWN #2  --}}
  <ul id="globaalDropdown" class="dropdown-content">
    <li>
        <a href="{{ url('/machines')}}">Machinery</a>
    </li>
    <li>
        <a href="{{ url('/machines/services')}}">Services</a>
    </li>
  </ul>

  {{-- DROPDOWN #3  --}}
  <ul id="lokaalDropdown" class="dropdown-content">
    <li>
        <a href="{{ url('user/machines')}}">My machinery</a>
    </li>
    <li>
        <a href="{{ url('user/services')}}">My services</a>
    </li>
    <li>
        <a href="{{ url('user/services/history')}}">History services</a>
    </li>
  </ul>

  {{-- NAVBAR --}}
  <nav>
     <div class="nav-wrapper">
        <a class="brand-logo center">Cobra</a>
        <ul class="left hide-on-med-and-down">
           <li><a class="dropdown-button" data-activates="globaalDropdown">Globaal</a></li>
           <li><a class="dropdown-button" data-activates="lokaalDropdown">Lokaal</a></li>
        </ul>
        <ul class="right">
           <!-- Dropdown Trigger -->
           @if (Route::has('login'))
             @if (Auth::check())
               <li>
                  <a class="dropdown-button" data-activates="profielDropdown">
                    <span class="menu-items">{{ Auth::user()->name }}</span>  <span class="fa fa-caret-down" title="open menu">
                  </a>
               </li>
             @else
           <li><a class="menu-items" href="{{ url('/login') }}">Login</a></li>
           <li><a class="menu-items" href="{{ url('/register') }}">Registreer</a></li>
            @endif
           @endif
        </ul>
     </div>
  </nav>


  <!-- CONTAINER- -->
  <div class="container">
    @yield('content')
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/extern/jquery-3.2.1.js') }}"></script>
  <script src="{{ asset('js/extern/materialize.js') }}"></script>
  <script src="{{ asset('js/layout/layout.js') }}"></script>
  @yield('scripts')

</body>
</html>
