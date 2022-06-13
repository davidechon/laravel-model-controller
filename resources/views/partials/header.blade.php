<header>
  <nav>
     <ul>
         <li>
             <a href="{{route('home')}}" class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}">Home</a>
         </li>
         <li>
             <a href="{{route('movies')}}" class="{{Route::currentRouteName() == 'movies' ? 'active' : ''}}">Movies</a>
         </li>
     </ul>
 </nav>
</header>
