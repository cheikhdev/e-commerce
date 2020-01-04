<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <div>
    <h1>PAGE DESCRIPTION</h1>    
    <h1 style="text-align:center; color:green">
     Description generale du produit</h1>  
     
     
     </div>
     <div class="container mt-5" style="width: 60vw">
       <div class="row align-items-start my-5">
           <div class="col-lg-5">
               <p><img class="img-fluid rounded mb-4 mb-lg-0" src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt=""></p>
               <h3 class="font-weight-light">{{$product->name_product}}</h3>
               <p>{{$product->prix_product.'F CFA' ?? ''}}</p>
               <hr>
              
           </div>
           <!-- /.col-lg-8 -->
           <div class="col-lg-7">
               <p>{!!$product->description_product!!}</p>
               <a class="btn btn-primary" href="/produit/{{$product->id}}/achat">Commander</a>
           </div>
           <!-- /.col-md-4 -->
       </div>
   </div>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
