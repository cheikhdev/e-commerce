@extends('layouts.app')
    @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
    @endsection
  @section('content')
        <!-- Begin Page Content -->
   @if (session('success'))
    <h4 style="font-size: 24px;border: 1px solid black;text-align: center;color: #FFD700">{{session('success')}}</h6>
  @endif

        <div class="" style="margin-left:300px;margin-right:25px; margin-top:25px;padding:5px;">

<!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card   mb-4" style="width:100%;">
                <div class="card-header">
                    <h1 class="mr-3" style="text-align: center;">Details du panier</h1>
                </div>
                <div class="card-body">
              
                    <!--table  class="table table-responsive " style="overflow:hedden;">
                        <thead  class="table-dark ">
                            <tr class="mw-50">
                                <th>Produit </th>
                                <th>Quantite</th>
                                <th>Prix</th>
                                <th>Soustotal</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::content() as $row)
                            <tr class="table table-hover mw-50">
                                <td>
                                    <p><strong></strong></p>
                                </td>
                                <td>
                                    <form action="{{url('update')}}" method="post">
                                        {{csrf_field()}}
                                        <input class="w-25" type="text" name="uqty" value="{{$row->qty}}">
                                        <input type="hidden" name="rowId" value="{{$row->rowId}}">
                                        <button type="submit" class="btn btn-info " value="Update" style="width: 95px;height: 30px;">Modifier</button> 
                                    </form>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <form action="{{route('cart.destroy',$row->rowId)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger  fa-2x "><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach         
                    </tbody>
                    <tfoot>  
                        <tr class="mt-1">
                            <td colspan="2">&nbsp;</td>
                            <td class="btn btn-info">Total</td>
                            <td>{{Cart::total()}} FcFa</td>
                        </tr>
                    </tfoot>
                </table-->
                <div class="table-responsive">
                    <table id="myTable" class="table table-dark" style="overflow:hedden; width:100%;">
                        <thead>
                            <tr>
                                <th>Produit </th>
                                <th>Quantite</th>
                                <th>Prix</th>
                                <th>Soustotal</th>
                                <th>Editer</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody class="mb-3">
                        @foreach(Cart::content() as $row)
                            <tr class="clickable-row" data-href="" style="cursor:pointer;">
                                <td>{{$row->name}}</td>
                                <td>{{$row->qty}}</td>
                                <td><b>{{$row->price}} Fcfa</b></td>
                                <td><b>{{$row->total}} Fcfa</b></td>
                                
                                <td>
                                    <p><a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                </td>
                                <td>
                                    <p><a class="btn btn-danger" href="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot class="mb-3">  
                            <tr class="">
                                
                                <td colspan="3" style="color:red;"><b>Total</b></td>
                                <td colspan="3" style="color:red;"><b>{{Cart::total()}} Fcfa</b></td>
                            </tr>

                        </tfoot>
                    </table>
                    <div class="d-flex justify-content-around">
                        <a href="" class="btn  btn-info">Valider la commande</a>
                        <a href="" class="btn btn-danger">Vider</a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

                       