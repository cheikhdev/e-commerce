@extends('layouts.app')
@section('content')
            <div class="row"style="padding:20px; width: 100%; height: auto;">
           
             @foreach($products as $product)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                          <div class="single-product">
                            <div class="product-img">
                              <a href="product-details.html">
                                <img class="default-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#" style="width: 130px;" >
                                <img class="hover-img" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" style="width: 160px;height: 70px;" alt="#">
                              </a>
                              <div class="button-head">
                                <div class="product-action">
                                  <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" fas fa-eye"></i><span>Ajout et details</span></a>
                                  <a title="Wishlist" href="#"><i class=" fas fa-heart "></i><span>{{$product->name_product}}</span></a>
                                  <a title="Compare" href="#"><i class="fas fa-bar-chart-alt"></i><span>Ajout et details</span></a>
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
                          <form action="{{route('cart.store')}}" method="POST"  class="add-to-cart">
                      @csrf
                      <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                      <button type="submit" class="btn btn-primary btn-fancy" href="">Ajouter au panier
                      </button>
                    </form>
            </div>
             @endforeach
          
    @endsection