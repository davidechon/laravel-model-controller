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
    @include('partials.header')
    <main>
        @yield('mainContent')

        <div class="container">
            @dump($movies)
            <h1 class="text-center">Home</h1>
          
            <ul>
              @foreach ($movies as $movie)
              <li> <a href="route('detail', $movie->it)" {{$movie->title}}>  </a>{{$movie->title}} </li>
              @endforeach
            </ul>
          
          
          </div>
        

    </main>
    @include('partials.footer')

</body>
</html>
