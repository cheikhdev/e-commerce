@extends('layouts.app')
	@section('connect')
		<li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
		<li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
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
							<h3>Collection de materiels  <br> d'électricité</h3>
							<a href="#">Découvrir maintenant</a>
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
							<h3>Collection sannitaire  <br> et plomberie</h3>
							<a href="#">Découvrir maintenant</a>
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
							<h3>Collection maçonnerie<br> et peinture</h3>
							<a href="#">Découvrir maintenant</a>
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
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>ajout et details</span></a>
                                <a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>Ajouter à la liste de souhaits</span></a>
                                <a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>ajouter pour comparer</span></a>
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
								<h1>En soldes</h1>
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
								<h1>Top vu</h1>
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