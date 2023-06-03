<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trend</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
       <h1>Trend Name</h1>
       <div class = 'trends'>
           @foreach ($trends as $trend)
           <div class = 'trend'>
               <h2 class = 'title'>{{$trend->title}}</h2>
               <p class = 'body'>{{$trend->body}}</p>
           </div>
           @endforeach
       </div>
    </body>
</html>
