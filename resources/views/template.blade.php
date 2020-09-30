<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')| Blog</title>
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    
    
</head>
<body>




   <header>Header</header>
    <nav>
     <a href="">ITEM1 |</a>
     <a href="">ITEM2 |</a>
     <a href="">ITEM3 |</a>
     <a href="">ITEM4 |</a>
     <a href="">ITEM5</a>
     
    
     </nav>
     <section class="main_content">
         @if (count($errors)>0)
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                   
              @endforeach
          </ul>
             
         @endif


         @yield('content')
     </section>
     <footer> &copyright2020 all reverse</footer>

</body>
</html>


