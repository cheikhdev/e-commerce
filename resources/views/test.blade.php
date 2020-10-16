                            <div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Cart::count()}}</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>{{Cart::count()}} produit(s)</span>
										<a href="#">Afficher le panier</a>
									</div>
									<ul class="shopping-list">
                                        @foreach(Cart::content() as $row )
                                            <li>
                                                <form action="{{route('cart.destroy',$row->rowId)}}" method="POST" class="">
                                                    @csrf                      
                                                    @method('DELETE')

                                                    <button type="submit" class="remove text-danger  " title="Remove this item"><i class="fa fa-remove "></i></button>
                                                </form>
                                                <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                                <h4><a href="#">{{$row->name}}</a></h4>
                                                <p class="quantity">Quantité : {{$row->qty}} - <span class="amount">$row->price</span></p>
                                            </li>
										@endforeach
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">{{Cart::total()}}</span>
										</div>
										<a href="checkout.html" class="btn animate">Vider le panier</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>