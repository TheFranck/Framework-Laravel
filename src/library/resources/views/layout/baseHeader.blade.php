<nav>
  <h1>The Bibliothèque</h1>
  <ul>
   <li><a href="/accueil">Accueil</a></li>
   <li><a href="/liste">Listes des Livres</a></li>
   <li><a href="/add/author">Ajouter un auteur</a></li>
    @if (!Auth::guest())
       <li><a href="/write/message">ecrire un message</a></li>
     @endif
     @if (!Auth::guest())
        <li><a href="/send/message">envoyer un message</a></li>
      @endif
   @if (Auth::guest())
       <li><a href="{{ route('login') }}">Login</a></li>
       <li><a href="{{ route('register') }}">Register</a></li>
   @else
     @if (!Auth::guest())
        <li><a href="/addBook">Ajouter un livre</a></li>
      @endif
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
