@extends('layouts.app')
    @section('connect')
        <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
        <li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
    @endsection
  @section('content')
        <!-- Begin Page Content -->
        <div class="">

<!-- Page Heading -->
            


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
             <h1 class="mr-3" style="text-align: center;">Details du panier</h1>
            <div class="card-body">
                <div class="table-responsive">
                    <table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Subtotal</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach(Cart::content() as $row) :?>

            <tr>
                <td>
                    <p><strong><?php echo $row->name; ?></strong></p>
                    
                </td>
                <td><input type="text" value="<?php echo $row->qty; ?>"></td>
                <td>$<?php echo $row->price; ?></td>
                <td>$<?php echo $row->total; ?></td>
            </tr>

        <?php endforeach;?>

    </tbody>
    
    <tfoot>
        
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td><?php echo Cart::total(); ?></td>
        </tr>
    </tfoot>
</table>
    </div>
  </div>
</div>

</div>

    @endsection

                       