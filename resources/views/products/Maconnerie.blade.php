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
    <h1>AGRICULTURE</h1>    
    <h1 style="text-align:center; color:green">
     Decouvrez les nouvelles Technologies au service de l'agriculture</h1>
        
    </div>
   
     <P> Shopping Hitech , vous permet de savoir les nouveaux equipements innovants <br>
      qui sont entrain de bouilloner le marche . <br>
      Dans la categorie agriculture , vous aurez d'abord les nouveaux drones intelligents <br>
      utillises sous differentes facettes . <br>
      Par Exemple : <br>
      1) Drones detecteurs (temperatures,pressions ) a distance ;  <br>
      2) Drones Visualisateur 3D ;<br>
      3) Drones Aroseur . <br>
      Ensuite , des capteurs intelligents pour superviser les champs a distance .<br>
      
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
