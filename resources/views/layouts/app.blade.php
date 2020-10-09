<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Matcosen - eQuincaillerie en ligne.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/logo.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	<link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
	<!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/css_home/bootstrap.css')}}">
  <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/css_home/magnific-popup.min.css')}}">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/css_home/font-awesome.css')}}">
  <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('css/css_home/jquery.fancybox.min.css')}}">
  <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/css_home/themify-icons.css')}}">
  <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/css_home/niceselect.css')}}">
  <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/css_home/animate.css')}}">
  <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/css_home/flex-slider.min.css')}}">
  <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/css_home/owl-carousel.css')}}">
  <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('css/css_home/slicknav.min.css')}}">
  <!-- Eshop StyleSheet -->
  <link href="{{asset('css/css_home/reset.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/css_home/style.css')}}" rel="stylesheet" />
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon|canvas-print">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900" rel="stylesheet" />
 <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>	
</head>
<body class="js">
  @section('connect')
    <li><i class="fas fa-phone fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i> 33 825 25 25</li>
    <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
    <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>

  @endsection
	
	<!-- Preloader -->
		<div class="preloader">
			<div class="preloader-inner">
				<div class="preloader-icon">
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><a style="color: #25D366;" href="{{('https://wa.me/221774781907')}}"><i style="color: #25D366;" class="fa fa-whatsapp fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true" ></i> 77 478 19 07</a></li>
								<li><i class="fas fa-envelope fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i> support@matcosen.com</li>
                
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>

@if (request()->input('q'))
    <h4 style="font-size: 24px;border: 1px solid black;text-align: center;color: #FFD700">{{ $products->total() }} résultat(s) pour la recherche "{{ request()->q }}"</h6>
  @endif
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								@yield('connect')
								
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Recherche de produits...." name="search">
									<button value="search" type="submit"><i class="fas fa-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								
								<form action="{{route('products.search')}}">
									<input type="text" name="q" class="form-control" placeholder="Recherche de Produits" value="{{ request()->q ?? '' }}">
									<button class="btnn"><i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fab fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fab fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> <span class="total-count">{{Cart::count()}}</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>{{Cart::count()}} produit(s)</span>
										<a href="#">Affichage panier</a>
									</div>
									<ul class="shopping-list">
										 <?php foreach(Cart::content() as $row ) :?>
                    
											<li>
												<h4 class=""><a href="#"></a><?php echo $row->name; ?></h4>
                        <h4 class=""><a href="#"></a><?php echo $row->qty; ?></h4>
                        <h4 class=""><a href="#"></a><?php echo $row->price; ?></h4>
                        
                         <form action="{{route('cart.destroy',$row->rowId)}}" method="POST" class="">
                        @csrf                      
                        @method('DELETE')

                         <button type="submit" class="remove  ml-5 text-danger  " title="Remove this item"><i class="fa fa-remove "></i></button>
                         </form>
												
											</li>
										<?php endforeach;?>
									</ul>
									<div class="bottom">
										<div class="total">
											<span><?php echo Cart::total(); ?></span>
											<span class="total-amount"></span>
										</div>
										<a href="{{url('/panier')}}" class="btn animate">Details du Panier</a>
										<?php foreach(Cart::content() as $row) :?>
											<form action="{{route('cart.remove',$row->rowId)}}" method="post">
												@csrf                      
												@method('DELETE')
												<button type="submit" class="btn btn-dark"> <i class="fa fa-trash-o text-danger"></i> Vider le panier </button>                 
											</form>
										<?php endforeach;?>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li><a href="#">Nouvelles arrivées <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="#">accessories</a></li>
											<li><a href="#">meilleure vente</a></li>
											<li><a href="#">top 100 des produits</a></li>
											<li><a href="#">materiel de construction</a></li>
											<li><a href="#">toilettes</a></li>
											<li><a href="#">accessoires d'electricité</a></li>
											<li><a href="#">peinture de qualité</a></li>
											
										</ul>
									</li>
									<li class="main-mega"><a href="#">Indispensables à la maison <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">Shop Kid's</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Kids Toys</a>
													<a href="#">Kids Travel Car</a>
													<a href="#">Kids Color Shape</a>
													<a href="#">Kids Tent</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Shop Men's</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Watch</a>
													<a href="#">T-shirt</a>
													<a href="#">Hoodies</a>
													<a href="#">Formal Pant</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Shop Women's</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
												<div class="inner-link">
													<a href="#">Ladies Shirt</a>
													<a href="#">Ladies Frog</a>
													<a href="#">Ladies Sun Glass</a>
													<a href="#">Ladies Watch</a>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#">accessories</a></li>
									<li><a href="#">meilleure vente</a></li>
									<li><a href="#">top 100 des produits</a></li>
									<li><a href="#">materiel de construction</a></li>
									<li><a href="#">toilettes</a></li>
									<li><a href="#">accessoires d'electricité</a></li>
									<li><a href="#">peinture de qualité</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#"><i class="fas fa-home fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Accueuil</a></li>
													<li><a href="#"><i class="fas fa-medkit fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>A propos<i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="shop-grid.html">Mention légale</a></li>
                                <li><a href="cart.html">Conditions générales de vente</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                
                            </ul>
                          </li>												
													<li><a href="#">Produits</a></li>
													<li><a href="#">Nos categories<i class="fas fa-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">Electricité</a>
                                <ul class="sub-category">
                                  <li><a href="#">Cablage</a></li>
                                  <li><a href="#">Appareillage</a></li>
                                  <li><a href="#">Protection</a></li>
                                  <li><a href="#">Elairage</a></li>
                                  
                                </ul>
                              </li>
															<li><a href="cart.html">Sanitaire et Plomberie</a>
                               
                              </li>
															<li><a href="checkout.html">Maçonnerie</a>
                                
                              </li>
                              <li><a href="checkout.html">Peinture</a></li> 
														</ul>
													</li>
													<li><a href="{{url('/contact')}}">Nous contacter</a></li>									
													
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	<!-- Single Slider -->
		@yield('slide')
	<!--/ End Slider Area -->
		<div>
			@yield('content')
		</div>
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-rocket"></i>
						<h4>Livraison gratuite</h4>
						<p>Commandes de plus de 500 000 FR</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-retweet"></i>
						<h4>Retour Gratuit</h4>
						<p>Retour dans les 30 jours</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-lock"></i>
						<h4>Paiement sécurisé</h4>
						<p>Paiement 100% sécurisé</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="fas fa-tag"></i>
						<h4>Meilleur prix</h4>
						<p>Prix ​​garanti</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Abonnez-vous à notre newsletter et recevez <span>10%</span> sur votre premier achat</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Votre adresse email" required="" type="email">
								<button class="btn">Souscrire</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
    
	</section>
	<!-- End Shop Newsletter -->
	
	
	<!-- Debut modall inscriptionnnn -->
	<div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg" style="height:100vh;width:60vw;">
                    <div class="modal-content container container-fluid w-100 h-auto" >
                        <!-- Modal Header -->
                        <div class="modal-header mb-5" style="">
                          
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container " style="height:auto; max-height:auto;">
                            <form action="{{route('ajouter_user')}}" method="post">
                            @csrf
                                <div class="row">   
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="sexe" class=" " style="font-weight:bold;">Sexe</label>
                                        <div class="col-sm-10">
                                            <select name="genre" id="genre" class="form-control">
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Feminin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputEmail" class="" style="font-weight:bold;">Prenom<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prenom">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="" style="font-weight:bold;">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                            <label for="inputPassword" class="" style="font-weight:bold;">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse">
                                            </div>
                                      </div>
                                    
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="" style="font-weight:bold;">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lieu" name="phone" placeholder="Entrer Telephone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 ">
                                        <label for="inputPassword" class=" " style="font-weight:bold;">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="date" name="email" placeholder="Entrer mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                            <label for="inputPassword" class="" style="font-weight:bold;">Mot de passe</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="adresse" name="password" placeholder="Entrer password">
                                            </div>
                                      </div>
                                    
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="" style="font-weight:bold;">Cofirmer mot de passe</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="lieu" name="confirme_pass" placeholder="confirmer password">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-around mb-5">         
                                    <button type="submit" style="width:150px;border-radius:50px;height:30px !important;" class=" btn-success">Enregistrer</button>
                                    <button type="reset" style="width:150px;border-radius:50px;height:30px !important;" class=" btn-danger" data-dismiss="modal">Annuler</button>
                                </div>
                            </form>
                        </div>      
                                        
                    </div>
                </div>
            </div>
       <!--fin modall inscription-->
		 <!-- Debut modall Cnnexion -->
		
		<div class="modal fade " id="ModalLogin" >
                <div class="modal-dialog  modal-md">
                    <div class="modal-content" >
                        <!-- Modal Header -->
                        <div class="modal-header" style="">
                          
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body ">
						<div class="  " style="height:100%;overflow-x:scroll;">
			<div class="card auth ">
				<div class="card-header auth-header login100-form-title" style="background-image: url({{asset('images/materiel1.jpg')}});">
					<span class="login100-form-title-1">
						Matcosen Login
					</span>
				</div>
				<div class="card-body auth-body" >
					<form class="auth-form" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-5" data-validate="Username is required">
							<!-- class="label-input100">Identifiant</span-->
							<div class="input-group login">
								<span class="input-group-addon"><i class="fas fa-user"></i></span>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre login" >

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class=""></span>
						</div>

						<div class="mb-2" data-validate = "Password is required">
							<!--span class="label-input100">Mot de passe</span-->
							<div class="input-group pass">
								<span class="input-group-addon"><i class="fas fa-lock"></i></span>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe" >

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class=""></span>
						</div>

						<div class="mb-3 d-flex justify-content-end">
							@if (Route::has('password.request'))
								<a class="" href="{{ route('password.request') }}">
									Mot de passe oublié?
								</a>
							@endif
						</div>
						<div class="d-flex justify-content-center " style="">
							<button class=" btn-success" style="border-radius:70px;width:200px;height:45px;">
								Se Connecter
							</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>                                      
    </div>
    </div>
    </div>
   
	 <!--fin modall connexion-->
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="#"></a>
							</div>
							<p class="text">Bienvenue a votre quincailerie digitale de reference .</p>
							<p class="call">Question? Appeler 24/7<span><a href="tel:123456789">+221 77 478 19 07</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">A propos</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Conditions et Termes</a></li>
								<li><a href="#">Nous contacter</a></li>
								<li><a href="#">Aide</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Nos Service</h4>
							<ul>
								<li><a href="#">Methodes de paiement</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Retourner</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Entrer en contact</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Dakar, adresse.</li>
									<li>Disponible.</li>
									<li>info@matcom.com</li>
									<li>+221 77 478 19 07</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="fab fa-facebook text-info"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href="{{url('https://wa.me/221774781907')}}"><i class="fab fa-whatsapp text-success"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.matcosen.com" target="_blank">Matcosen</a>  - Tous droits reservés.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
<!-- Jquery -->  
    <script src="{{asset('js/js_home/jquery.min.js')}}"></script>
    <script src="{{asset('js/js_home/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/js_home/jquery-ui.min.js')}}"></script>
<!-- Popper js -->
    <script src="{{asset('js/js_home/popper.min.js')}}"></script>
 <!-- Bootstrap js -->
    <script src="{{asset('js/js_home/bootstrap.min.js')}}"></script>
<!-- Color JS -->
    <script src="{{asset('js/js_home/colors.js')}}"></script>
<!-- Slicknav JS -->
    <script src="{{asset('js/js_home/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
    <script src="{{asset('js/js_home/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
    <script src="{{asset('js/js_home/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
    <script src="{{asset('js/js_home/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
    <script src="{{asset('js/js_home/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
    <script src="{{asset('js/js_home/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
    <script src="{{asset('js/js_home/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
    <script src="{{asset('js/js_home/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
    <script src="{{asset('js/js_home/onepage-nav.min.js')}}"></script>
<!-- Easing JS -->
    <script src="{{asset('js/js_home/easing.js')}}"></script>
<!-- Active js -->
    <script src="{{asset('js/js_home/active.js')}}"></script>
</body>
</html>