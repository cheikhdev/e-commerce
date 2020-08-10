<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> E-Commerce </title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon|canvas-print 	
">
 

  
  
 
 

</head>

<body>

  <!-- Navigation -->
    
    <header>
      <div class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between ">
                            <p style="font-weight:bold;">Votre quincaillerie en ligne</p>
                            <p style="font-weight:bold;">Disponible <span>24H/24</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" style="height:auto;">
            <div class="container h-100">
                <div class="row h-100 justify-content-between">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg row justify-content-between align-items-center">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href=""><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="/">
                                                <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Acceuil 
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="aproposDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fab fa-hire-a-helper fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                A Propos
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="aproposDropdown">
                                              <a class="dropdown-item" href="">
                                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                  Mention légale
                                              </a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#">
                                                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                  Conditions générales de vente
                                              </a>
                                              
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                  Contact
                                              </a>
                                            </div>
                                        </li>
                                        <div class="topbar-divider  d-none d-sm-block"></div>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link  dropdown-toggle" href="#" id="produitDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fab fa-product-hunt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                               Categories de produits
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in " style="width:50vw;" aria-labelledby="produitDropdown">
                                              <div class="row ">
                                                <div class="col-sm-6 " style="margin-bottom:20px;">
                                                <h4 style="text-align:center;">Electricité</h4>
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Elairage
                                                  </a>
                                                  
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Cablage
                                                  </a>
                                                 
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Appareillage
                                                  </a>
                                                  
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Protection
                                                  </a>
                                                  <div class="dropdown-divider"></div>
                                                </div>
                                                
                                                <div class="col-sm-6 " style="margin-bottom:20px;">
                                                  <h4 style="text-align:center;">Sanitaire et Plomberie</h4>
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Salle de bain
                                                  </a>
                                                  
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Robineterie
                                                  </a>
                                                  <div class="dropdown-divider"></div>
                                                </div>
                                                
                                                <div class="col-sm-6 ">
                                                  <h4 style="text-align:center;">Peinture</h4>
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Mention légale
                                                  </a>
                                                  
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Mention légale
                                                  </a>
                                                  
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Mention légale
                                                  </a>
                                                </div>
                                                
                                                <div class="col-sm-6 ">
                                                  <h4 style="text-align:center;">Maçonnerie</h4>
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                     Ciment
                                                  </a>
                                                
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      fer
                                                  </a>
                                                  
                                                  <a class="dropdown-item" href="">
                                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                      Graviers
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                        </li>
                                        
                                        <div class="topbar-divider  d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="/login">
                                            <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true" ></i>
                                               Compte
                                            </a>
                                        </li>
                                        <div class="topbar-divider  d-none d-sm-block style-bar"></div>
                                        <!--li class="nav-item">
                                            <a class="nav-link" href="/register">
                                            <i class="fas fa-user-plus fa-md fa-fw mr-2 text-gray-400" aria-hidden="true" ></i>
                                                Inscription
                                            </a>
                                        </li-->
                                      
                                      </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </header>
  <!-- Page Content -->
    <main>
      <div class="">
            <div class="">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <p class="carouselTitle">Ciment de bonne qualite</p>
                    <img class="w-100" src="{{asset('images/materiel1.jpg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <p class="carouselTitle">Betons et fer </p>
                    <img class="w-100" src="{{asset('images/materiel2.jpg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <p class="carouselTitle">Materiels immobiliers</p>
                    <img class="w-100" src="{{asset('images/materiel3.jpg')}}" alt="Third slide">
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="icon-prev" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="icon-next" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="container d-flex justify-content-between" style="padding-top:30px;padding-bottom:30px;">
              <div class="col-5">
                <h2 style="font-weight:bold;">Rechercher nos produits</h2>
              </div>
                <div class="col-7">
                    <form action="" class="w-100">
                      <input class="w-100" id="search" type="text" placeholder="Search..." />
                    </form>
                </div>
            </div>
          <div class="row">
            @foreach($products as $product)
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><a href="/produit/{{$product->id}}/show"><img class="card-img-top" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}"   height="140" width="10" alt=""></a></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/produit/{{$product->id}}/show">{{$product->name_product}}  </a>
                        </h4>
                        <p class="card-text">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</p>
                    </div>
                    <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
                      @csrf
                      <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                      <button type="submit" class="btn btn-primary btn-fancy" href="/produit/{{$product->id}}/show">Ajouter au panier</button>
                    </form>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div> 
                </div>
              </div>
            @endforeach
          </div>
      </div>
    </main>
    <div class="container">
  <h2 style="
  text-align:center;
  padding: 20px;">   Les grandes Marques vous attendent .

       <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque7.png')}}" class="img-fluid"
            alt="" >
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque6.jpg')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque4.png')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque3.jpg')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque2.png')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view overlay z-depth-1-half">
          <img src="{{asset('images/marque1.jpg')}}" class="img-fluid"
            alt="">
          <a href="">
            <div class="mask rgba-white-light"></div>
          </a>
        </div>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  
</footer>
<!-- Footer -->
                    
    <!-- fin main""""""""""" -->

    <!-- debut footer""""""""""" -->
    <footer>
      <div class="page-footer font-small blue-grey lighten-5">

      <div style="background-color: #21d192;">
        <div class="container">

          <!-- Grid row-->
          <div class="row py-4 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
              <h6 class="mb-0">Retrouvez-nous sur les reseaux sociaux!</h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">

              <!-- Facebook -->
              <a class="fb-ic" >
                <i class="fa fa-facebook"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class=" 	fa fa-youtube"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fa fa-google-plus"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class=" fa fa-linkedin-square"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fa fa-instagram size-200px"> </i>
              </a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row-->

        </div>
      </div>

      <!-- Footer Links -->
      <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold font-size-60px">Groupe E-Materiels</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p> Merci d'avoir visiter a notre site Pour plus d'informations  a propos de e-materiels , 
              Veuillez nous contactez  .</p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Nos Produits</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a class="dark-grey-text" href="{{ url('/agri') }}">Agricole</a>
            </p>
            <p>
              <a class="dark-grey-text" href="{{ url('/sante') }}">Medical</a>
            </p>
            <p>
              <a class="dark-grey-text" href="{{ url('/sport') }}">Sport</a>
            </p>
            <p>
              <a class="dark-grey-text" href="{{ url('/tele') }}">TELECOMS</a>
            </p>
            <p>
              <a class="dark-grey-text" href="{{ url('/elec') }}">ELECTRONIQUE</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Liens Utiles</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a class="dark-grey-text" href="#!">Votre Compte</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">Devenir Partenaire</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">Nos Partenaires</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">Aide</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contacts</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fa fa-map-marker"></i> DAKAR</p>
            <p>
              <i class="fa fa-envelope-o"></i> e-materiels@gmail.com</p>
            <p>
              <i class="fa fa-tablet"></i> + 01 234 567 88</p>
            <p>
              <i class="fa fa-tablet"></i> + 01 234 567 89</p>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->

      <!-- Copyright -->

      </div>
      <section id="lab_social_icon_footer">
      <!-- Include Font Awesome Stylesheet in Header -->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="container">
            <div class="text-center center-block">
                    <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                  <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                  <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                  <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
      </div>
    </footer>
  



</section>
        


<!-- Footer -->
  <!-- Bootstrap core JavaScript -->
    
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous">
</script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
  
    <script src="{{asset('js/app.js')}}"></script>  
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/datatables-demo.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</body>

</html>