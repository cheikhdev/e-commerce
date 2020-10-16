@extends('layouts.app')
	@section('connect')
		<li><a href="#"><i class="fas fa-medkit fa-lg fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Mon compte <i class="fas fa-angle-down"></i></a>
            <ul class="dropdown">
            	<li><a href="shop-grid.html">Profil</a></li>
                <li><a href="cart.html">Parametres</a></li>
                <li><a href="/">Deconnexion</a></li>                
            </ul>
    	</li>
	@endsection
	@section('slide')
		<!-- Slider Area -->
		<section class="hero-slider" style="margin-left:300px; margin-top:25px;padding:5px;">
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
                    <img class="second-slide animated zoomInDown d-none d-md-block" src="{{asset('images/courant.jpg')}}" alt="" style="height:65vh; width:100%;">
                    <div class="container">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="animated fadeInDown" style="color: #ffffff;">Poduits de La marque Inco.</h1>
                        <p class="animated fadeInRight" style="color: #ffffff;">Retrouvez d'excellent produit de la marque Inco , ches nos magasins .</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="second-slide animated zoomInDown" src="{{asset('images/equipemen_macon.jpg')}}" alt="" style="height:65vh; width:100%;">
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
	@endsection
    @section('content')
              <!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Summer travel <br> collection</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Bag Collectons</p>
							<h3>Awesome Bag <br> 2020</h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Affichage par categorie</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Electricité</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Maçonnerie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Sanitaire</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Peinture</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Plomberie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prix</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                      @foreach($products as $product)
												<div class="col-xl-3 col-lg-4 col-md-4 col-12">
													<div class="single-product">
														<div class="product-img">
															<a href="product-details.html">
																<img class="default-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																<form action="{{route('cart.store')}}" id="{{'product_'.$product->id}}" class="add-to-cart" method="post">
																	@csrf
																	<input type="hidden" name="product_id" value="{{$product->id}}">
																	
																	<button type="submit" class="btn btn-primary btn-fancy" >Ajouter au panier</button>
																</form>
																	
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="product-details.html">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</a></h3>
															<div class="product-price">
																<span style="color:red">{{$product->prix_product}} FCFA</span>
															</div>
														</div>
													</div>
												</div>
                      @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								
							
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
            <div class="product-area most-popular section">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="section-title">
                      <h2>Produits avec réductionn</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
                      @foreach($products as $product)
                        <div class="single-product">
                          <div class="product-img">
                            <a href="product-details.html">
                              <img class="default-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
                              <img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
                              <span class="out-of-stock">{{$product->name_product}}</span>
                            </a>
                            <div class="button-head">
                              <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>ajout et details</span></a>
                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                              </div>
                              <div class="product-action-2">
                                <a title="Add to cart" href="#">ajouter au panier</a>
                              </div>
                            </div>
                          </div>
                          <div class="product-content">
                            <h3><a href="product-details.html">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</a></h3>
                            <div class="product-price">
                              <span class="old" style="color:red;">{{$product->prix_product}} FCFA</span>
                              <span style="color:red;">{{$product->prix_product}} FCFA</span>
                            </div>
                          </div>
                        </div>
                      @endforeach
						<!-- End Single Product -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($products as $product)
						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h4 class="title"><a href="#">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</a></h4>
										<p class="price with-discount">{{$product->prix_product}} FCFA</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Best Seller</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
						@foreach($products as $product)
							<div class="single-list">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="list-image overlay">
											<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
											<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 no-padding">
										<div class="content">
											<h4 class="title"><a href="#">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</a></h4>
											<p class="price with-discount">{{$product->prix_product}} FCFA</p>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					<!-- End Single List  -->
					
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
						@foreach($products as $product)
							<div class="single-list">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="list-image overlay">
											<img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
											<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12 no-padding">
										<div class="content">
											<h4 class="title"><a href="#">{!! \Illuminate\Support\Str::words($product->description_product, 25,'....')  !!}</a></h4>
											<p class="price with-discount">{{$product->prix_product}} FCFA</p>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					<!-- End Single List  -->
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
    @endsection