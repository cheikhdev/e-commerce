@extends('layouts.appclient')
    @section('content')
        <!-- Begin Page Content -->
        <div class="">

<!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">La liste des patients de medilife</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
            <div class="card-header " style="background-color:#081f3e ;">
                <a class="navbar-brand ml-25" href="#"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Produit</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class=" py-3 text-uppercase">Prix</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class=" py-3 text-uppercase">Quantité</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class=" py-3 text-uppercase">Supprimer</div>
                                </th>
                            </tr>
                        </thead>
        
        <tbody>
            @foreach(Cart::content() as $product)
                <tr>
                    <th scope="row" class="border-0">
                        <div class="p-2">
                            <img src="{{$product->model-image}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"><a href="" class="text-dark d-inline-block align-middle">{{$product->name_product}}</a></h5>
                                <span class="text-muted font-weight-normal font-italic d-block">Categorie</span>
                            </div>
                        </div>

                    </th>
                    <td>{{$product->getPrice()}}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

    @endsection