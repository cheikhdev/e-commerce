@extends('layouts.app')
      @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
      @endsection
      @section('slide')
     
		<!-- Slider Area -->
        <section class="hero-slider" style="margin-left:300px;margin-right:100px; margin-top:25px;padding:5px;">
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
            <div class="row"style="padding:20px; width: 100%; height: auto;">
           
             <!-- Start Shop Home List  -->
			<section class="shop-home-list section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<div class="row">
								<div class="col-12">
									<div class="shop-section-title">
										<h1>Nouveaux produits</h1>
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
												<a href="#" class="buy"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12 no-padding">
											<div class="content">
												<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
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
										<h1>Meilleur vente</h1>
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
												<a href="#" class="buy"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12 no-padding">
											<div class="content">
												<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
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
										<h1>Les plus Visité</h1>
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
												<a href="#" class="buy"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i></a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12 no-padding">
											<div class="content">
												<h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
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
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Maison</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                      <div class="col-12">
                        <div class="owl-carousel popular-slider">
                        
                          <!-- Start Single Product -->
                          @foreach($products as $product)
                          <div class="single-product" style="width:200px;height:200px;">
                            <div class="product-img">
															<a href="product-details.html">
																<img class="default-img"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
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
                          @endforeach
                          <!-- End Single Product -->
                        </div>
                      </div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                        
                          <!-- Start Single Product -->
                          @foreach($products as $product)
                          <div class="single-product" style="width:200px;height:200px;">
                            <div class="product-img">
															<a href="product-details.html">
																<img class="default-img"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
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
                          @endforeach
                          <!-- End Single Product -->
                        </div>
                      </div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="kids" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                        
                          <!-- Start Single Product -->
                          @foreach($products as $product)
                          <div class="single-product" style="width:200px;height:200px;">
                            <div class="product-img">
															<a href="product-details.html">
																<img class="default-img"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
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
                          @endforeach
                          <!-- End Single Product -->
                        </div>
                      </div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                        
                          <!-- Start Single Product -->
                          @foreach($products as $product)
                          <div class="single-product" style="width:200px;height:200px;">
                            <div class="product-img">
															<a href="product-details.html">
																<img class="default-img"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
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
                          @endforeach
                          <!-- End Single Product -->
                        </div>
                      </div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="essential" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                        
                          <!-- Start Single Product -->
                          @foreach($products as $product)
                          <div class="single-product" style="width:200px;height:200px;">
                            <div class="product-img">
															<a href="product-details.html">
																<img class="default-img"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
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
                          @endforeach
                          <!-- End Single Product -->
                        </div>
                      </div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="prices" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                        
                          <!-- Start Single Product -->
                          @foreach($products as $product)
                          <div class="single-product" style="width:200px;height:200px;">
                            <div class="product-img">
															<a href="product-details.html">
																<img class="default-img"  src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
																<img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
																	<a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
																	<a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Ajouter au panier</a>
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
                          @endforeach
                          <!-- End Single Product -->
                        </div>
                      </div>
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
	
          
    @endsection