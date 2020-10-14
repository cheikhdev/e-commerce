@extends('layouts.app')
    @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
    @endsection
  @section('content')
        <!-- Begin Page Content -->
   @if (session('success'))
    <h4 style="font-size: 24px;border: 1px solid black;text-align: center;color: #FFD700">{{session('success')</h6>
  @endif

        <div class="">

<!-- Page Heading -->
            


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
             <h1 class="mr-3" style="text-align: center;">Details du panier</h1>
            <div class="card-body">
                <div class="table-responsive">
                    <table>
    <thead>
        <tr class="mw-50">
            <th>Produit </th>
        
            <th>Quantite</th>
            <th>Prix</th>
            <th>Soustotal</th>
            <th>Supprimer</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach(Cart::content() as $row) :?>

            <tr class="mw-50">
                <td>
                    <p><strong><?php echo $row->name; ?></strong></p>
                    
                </td>
                
                <td>
                 <form action="{{url('update')}}" method="post">
                      {{csrf_field()}}
                    <input class="w-25" type="text" name="uqty" value="{{$row->qty}}">
                    <input type="hidden" name="rowId" value="{{$row->rowId}}">
                    <button type="submit" class="btn btn-info " value="Update" style="width: 95px;height: 30px;">Modifier</button> 
                </form>
                </td>
                <td><?php echo $row->price ; ?></td>
                <td><?php echo $row->total ; ?></td>
                <td>
                    <form action="{{route('cart.destroy',$row->rowId)}}" method="POST">
                 @csrf
                 @method('DELETE')
                <button type="submit" class="text-danger  fa-2x "><i class="fa fa-trash"></i></button>
                </form>
                </td>

            </tr>

        <?php endforeach;?>

                 
    </tbody>
    
    <tfoot>
        
        <tr class="mt-1">
            <td colspan="2">&nbsp;</td>
            <td class="btn btn-info">Total</td>
            <td><?php echo Cart::total(); ?> FcFa</td>
            
        </tr>

    </tfoot>

</table>
    </div>
  </div>
</div>

</div>
 
    @endsection

                       