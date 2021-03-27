<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #742A2A!important; width: 100%; z-index: 11 !important; position: absolute; width: 100%; opacity: 90%; position: absolute;">
    <a class="navbar-brand ml-12" href="{{ url('/') }}"><img src="{{URL::asset('/images/logo.png')}}" alt="Pneubest Home" style="max-width: 200px; height: 55px; width: auto;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white !important;">Pneumatici</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white !important;">Protektiranje</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white !important;">Kontakt</a>
        </li>
      </ul>
      <div class="my-2 my-lg-0">
        @guest
            <a class="nav-link" href="{{ route('login') }}" style="text-decoration: none; color: white; margin-right: 25px;">{{ __('Prijava') }}</a>
        @else
        <div class="nav-item" style="margin-right: 10px; display:inline-flex !important;">
            <a class="nav-link" href="#" style="text-decoration: none; color: white;">Korpa (0)</a>
        </div>
        <div class="nav-item dropdown" style="margin-right: 80px; display:inline-flex !important;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: white;">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Podesavanja</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" class="no-underline hover:underline text-gray-300 text-sm p-3" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Odjava') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
            </div>
        @endguest
        </div>
    </div>
    </div>
  </nav>