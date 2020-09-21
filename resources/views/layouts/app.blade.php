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
	
	<!-- Preloader -->
		
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
								<li><i class="fa fa-whatsapp fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true" ></i> 77 478 19 07</li>
								<li><i class="fas fa-envelope fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i> support@matcosen.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
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
								<select  class="w-auto">
									<option selected="selected">Tous produits</option>
									<option>electricite</option>
									<option>maçonnerie</option>
									<option>peinture</option>
                  					<option>sanitaire et plomberie</option>
								</select>
								<form>
									<input name="search" placeholder="Recherche de produits....." type="search">
									<button class="btnn"><i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> <span class="total-count">{{Cart::count()}}</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>{{Cart::count()}} produits</span>
										<a href="#">Affichage panier</a>
									</div>
									<ul class="shopping-list">
										@foreach(Cart::content() as $products)
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="" alt="#"></a>
												<h4><a href="#"></a>{{$products->name_product}}</h4>
												<p class="quantity">1x - <span class="amount">{{$products->prix_product}}</span></p>
											</li>
										@endforeach
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.html" class="btn animate">Checkout</a>
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
                                <li><a href="checkout.html">Contact</a></li>
                                
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
													<li><a href="#">Nous contacter</a></li>									
													
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
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel3.jpg')}}" style="height:65vh; width:100%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/materiel2.jpg')}}" style="height:65vh; width:100%;" alt="">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/construction-material.jpeg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/marque6.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown" src="{{asset('images/materiaux_const.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
		<!--/ End Single Slider -->
	</section>
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
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
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
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
    
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	<!-- Debut modall inscriptionnnn -->
	<div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content container container-fluid">
                        <!-- Modal Header -->
                        <div class="modal-header" style="">
                          
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
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

                                <div class="d-flex justify-content-center">         
                                    <button type="submit" style="width:200px;border-radius:70px;height:50px !important;" class="btn btn-success">Enregistrer</button>
                                    <button type="reset" style="width:200px;border-radius:70px;height:50px !important;" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                </div>
                            </form>
                        </div>      
                                        
                    </div>
                </div>
            </div>
       <!--fin modall inscription-->
		 <!-- Debut modall Cnnexion -->
		 <div class="modal fade" id="ModalLogin">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
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
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
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
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
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
							<button class="btn-auth btn btn-success" style="border-radius:70px;">
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
							<h4>Get In Tuch</h4>
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
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
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