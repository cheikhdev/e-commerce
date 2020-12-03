@extends('layouts.app')
      @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
      @endsection

    @section('indice_cart')
        <a href="#" class="single-icon fixed" id="shopping"><i class="fas fa-shopping-cart fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i> 
          <span class="total-count indice" id="indice_cart">{{Cart::count()}}</span>              
        </a>
                  <!-- Shopping Item -->
        <div class="shopping-item">
          <div class="dropdown-cart-header">
            <span class="indice">{{Cart::count()}} produit(s)</span>
            <a href="/panier">Afficher le panier</a>
            <form action="#">
              <input type="hidden" id="indiceH" name="indice" class="indice" value="{{Cart::count()}}">
            </form>
          </div>
          <?php
            //$indice = Cart::count();
            //dd(Cart::content());
          ?>
          <ul class="shopping-list" >
            @foreach(Cart::content() as $row)
                          <li>
                              <form action="{{route('cart.destroy',$row->rowId)}}" method="POST" class="">
                                  @csrf                      
                                  @method('DELETE')
                                  <button type="submit" class="remove text-danger  " title="Remove this item"><i class="fa fa-remove "></i></button>
                              </form>
                              <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                              <h4><a href="#">{{$row->name}}</a></h4>
                              <p class="quantity">(Quantité : {{$row->qty}}) ==> <span class="amount">{{$row->price}} FCFA</span></p>
                          </li>
            @endforeach
          </ul>
          <div class="bottom">
            <div class="total">
              <span>Total</span>
              <span class="total-amount">{{Cart::total()}} FCFA</span>
            </div>
            <a href="{{('/panier')}}" class="btn animate">Voir le panier</a>
          </div>
        </div>
      <!--/ End Shopping Item -->   
              
    @endsection
        @section('content')
              
                
             
        
   
     <div class="card-header w-50 mr-3" style="height: 50px;position: absolute;left: 30%;">
                    <h1 class="mr-3" style="text-align: center;color:#BE1E2D; ;font-size: 27px;background:#191348; ">Description générale du produit</h1>
    </div>
     
     </div>
      @foreach($products as $product)
     <div class="container" style="width: 80vw;margin-top: 15px;">
       <div class="row align-items-start my-5">
           <div class="col-lg-5">

               <p><img class="img-fluid rounded mb-4 mb-lg-0 mt-5" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" height="1900px" width="600px" alt="" style="height:250px;width:100%"></p>
               <div class="col-lg-6 col-md-6 col-12 no-padding">
                              <div class="content">
                                <h4 class="title"><a href="#">{{$product->name_product}}</a></h4>
                                <p class="price with-discount mb-2" style="font-size: 22px;">{{$product->prix_product}} FCFA</p>
                                <p class="price with-discount mb-2" style="font-size: 22px;">{{$product->description_product}} </p>
                                <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart " style="position: center;">
                                  @csrf
                                  <input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
                                  <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                  <input type="hidden" name="product_id" value="{{$product->id}}">
                                  <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                                  <button type="submit" class="w-100">
                                    <i class="fas fa-shopping-cart fa-md fa-fw  text-gray-400" aria-hidden="true"></i>
                                    Acheter Le Produit
                                  </button>
                                </form> 
               
              
           </div>
               <form action="#" id="{{'product_'.$product->id}}" class="add-to-cart">
                                  @csrf
                                  <input type="hidden" id="indice" name="product_id" value="{{Cart::count()}}">
                                  <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                  <input type="hidden" name="product_id" value="{{$product->id}}">
                                  <input type="hidden" name="prix_product" value="{{$product->prix_product}}">
                                  
                                </form>
                              </div>
                            </div>
                            
           <!-- /.col-lg-8 -->
           
           <!-- /.col-md-4 -->
       </div>
   </div>
@endforeach
    <div id="main" class="row">

            @yield('content')

    </div>

        @endsection