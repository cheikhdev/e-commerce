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
    <h1>SANTE</h1>    
    <h1 style="text-align:center; color:green">
     Decouvrez les nouveaux appareils Medicaux du marche .</h1>
        
    </div>
   
     <P> Shopping Hitech , vous permet de savoir les nouveaux equipements <br>
     innovants  qui sont entrain de bouilloner le marche  <br>
      Et ce sont des appareils digitalises et intelligents.
      Dans la categorie SANTE , vous aurez d'abord :  <br>
      1) les SCANNER hautement sophistique  ;<br>
      2) Cardiographe de derniere generation; <br>
      3) Appareils qui vous permettent de faire des diagnostiques a distances. <br>
      
      Ensuite , des plateformes dedies a la medecine pour les usagers   . <br>
      
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
