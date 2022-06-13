<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserr at:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>



</head>
<body>
    <header>
      <nav>
        <ul>
          <li><a href="/">home</a></li>
          {{-- <li><a href="/movies">movies</a></li> --}}
        </ul>
      </nav>
    </header>
    <main>

        <div class="container">
            {{-- @dump($movies) --}}
       
            <ul>
                @foreach ($movies as $movie)
                <li><a href="route('detail', $movie->it)" {{$movie->title}}></a>{{$movie->title}} - {{$movie->original_title}}  - {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}}</li>
                
                @endforeach
            </ul>
          
          
          </div>
        

    <h1>Movies</h1>
    {{-- @dump($comics) --}}
    <div class="container cards-container">
      <div class="card-group">
        <div class="btn-top">Current Series</div>
          <div class="row">
            @foreach ($movies as $movie)
              <ul class="card-box">
                <li><a href="route('detail', $movie->it)" {{$movie->title}}></a></li>
                  
              </ul>
            @endforeach
          </div> <!-- /row -->
        </div> <!-- /btn-top -->   
      </div> <!-- /card-group -->   
    </div> <!-- /container cards-container -->

    </main>
    

</body>
</html>
