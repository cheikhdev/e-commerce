@extends('layouts.app')
   @section('content')
            <div class="row"style="padding:20px; width: 100%; height: auto;">
            @foreach($products as $product)
                  <div class="single-list">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-12">
                        <div class="list-image overlay">
                          <img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="#">
                          <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
                            @csrf
                            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                            <input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                            <button type="submit" class="buy" id="panier-form">
                              <i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-12 no-padding">
                        <div class="content">
                          <h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
                          <p class="price with-discount mb-2">{{$product->prix_product}} FCFA</p>
                          <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
                            @csrf
                            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                            <input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                            <button type="submit" class="">
                              <i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
                              Acheter
                            </button>
                          </form> 
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach 
            {{ $products->appends(request()->input())->links() }}
          </div>
          {{ $products->appends(request()->input())->links() }}
          <a class="btn btn-warning" href="{{('home')}}"><i class="fas fa-shopping-cart"></i><span style="color: white;font-size: 15px;">VERS L'ACCUEIL</span></a>
    @endsection