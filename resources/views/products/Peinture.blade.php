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
    <h1>TELECOMS</h1>    
    <h1 style="text-align:center; color:green">
     Decouvrez les nouveaux appareils TELECOMS du marche .</h1>
        
    </div>
   
     <P> Shopping Hitech , vous permet de savoir les nouveaux equipements <br>
     innovants  qui sont entrain de bouilloner le marche  <br>
      Et ce sont des appareils digitalises et intelligents.
      Dans la categorie TELECOMS, vous aurez d'abord :  <br>
      1) les Cables intelligents hautement sophistique  ;<br>
      2) Des cables fibres optiques;
      3) Des capteurs (temperatures , humidite, chaleurs) , <br>
      pour la securite . <br>
      
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
