<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <div>
    <h1>Electronique</h1>    
    <h1 style="text-align:center; color:green">
     Decouvrez les nouveaux appareils Electronique du marche .</h1>
        
    </div>
   
     <P> Shopping Hitech , vous permet de savoir les nouveaux equipements innovants <br>
      qui sont entrain de bouilloner le marche .
      Dans la categorie Electronique , vous aurez d'abord :  <br>
      1) les nouveaux smartphone intelligents  ;<br>
      2) Des cables intelligents;
      3) Des Televiseurs LED.
      
      Ensuite , des micro-ondes etc  .
      
     </P>




    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
