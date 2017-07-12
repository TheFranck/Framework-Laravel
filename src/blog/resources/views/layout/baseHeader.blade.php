<div class="navbar-responsive ">
  <nav>
    <ul>
      <li><a class="scroll" id="about" href="#">Accueil</a></li>
      <li><a class="scroll" id="skill" href="#">Mes compétences</a></li>
      <li><a class="scroll" id="formation" href="#">Mes formations</a></li>
      <li><a class="scroll" id="realisation" href="#">Mes réalisations</a></li>
    </ul>
  </nav>
</div>

  <div class="container">

    <div class="logonavbar row ">
      <div class="logo col-9 col-lg-3">
        <a href="#"><h1><img src="{{ URL::asset('/img/background/logo-fsarin.png')}}" alt="Logo de mon site web François SARIN"></h1></a>
      </div>
        <div class="navbar col-3 col-lg-8">
          <nav class="hidden-md-down">
            <ul>
              <li><a class="scroll hvr-underline-from-left" id="about" href="#">Accueil</a></li>
              <li><a class="scroll hvr-underline-from-left" id="skill" href="#">Mes compétences</a></li>
              <li><a class="scroll hvr-underline-from-left" id="formation" href="#">Mes formations</a></li>
              <li><a class="scroll hvr-underline-from-left" id="realisation" href="#">Mes réalisations</a></li>
              @if (!Auth::guest())
                  <li><a class="scroll hvr-underline-from-left" id="message" href="/message">Mes messages</a></li>
              @endif
              @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login</a></li>

              @else
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>

                      </ul>
                  </li>
              @endif

            </ul>
          </nav>
          <nav class="hidden-lg-up">
            <ul>
              <li><a href="#"><img class="menu" src="{{ URL::asset('/img/background/menu-boot_svg.svg')}}" alt="menu burger du site"></a></li>
            </ul>
          </nav>
        </div>
    </div>
    <h1 class="catchphrase">Je suis <span id="word">un développeur</span></h1>
    <a class="scroll down-arrow" id="about" href="#"><img src="{{ URL::asset('img/background/down-arrow_svg.svg')}}" alt="flèche qui vous mène à A propos"></a>
  </div>
