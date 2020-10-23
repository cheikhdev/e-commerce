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
        <div class=" m-3 p-2">
            <div class="card   mb-4" style="width:100%;">
                <div class="card-header">
                    <h2 class="mr-3" style="">Mes commandes</h2>
                </div>
                <div class="card-body">
                    <div class="d-flex mt-3">
                        <div class="col-4 pl-0 pr-0" style="">
                            <div class="d-flex ">
                                <div class="col-5 phase-valide" style="">
                                </div>
                                <div class="col-2 phase-valide-border" >
                                    <h5  class="pt-2 pb-2" style="text-align:center;">1</h5>
                                </div>
                                <div class="col-5 phase-valide" >
                                </div>
                            </div>
                            <h4 style="text-align:center;">Facturation</h4>
                        </div>
                        <div class="col-4 pl-0 pr-0">
                            <div class="d-flex ">
                                <div class="col-5 phase-non-valide" >
                                </div>
                                <div class="col-2 phase-non-valide-border" >
                                    <h5  class="pt-2 pb-2" style="text-align:center;">2</h5>
                                </div>
                                <div class="col-5 phase-non-valide" >
                                </div>
                            </div>
                            <h4 style="text-align:center;">Commande</h4>
                        </div>
                        <div class="col-4 pl-0 pr-0" style="">
                            <div class="d-flex ">
                                <div class="col-5 phase-non-valide" >
                                </div>
                                <div class="col-2 phase-non-valide-border" >
                                    <h5  class="pt-2 pb-2" style="text-align:center;">3</h5>
                                </div>
                                <div class="col-5 phase-non-valide" >
                                </div>
                            </div>
                            <h4 style="text-align:center;">Paiement</h4>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h4 class="mb-3">Details de facturation</h4>
                        <form action="#" id="form">
                            <div class="row mb-5">
                                <div class="col-6">
                                    <input type="text" id="nom" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control" name="nom" placeholder="Nom*">
                                </div>
                                <div class="col-6">
                                    <input type="text" id="prenom" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control" name="prenom" placeholder="Prénom*">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">
                                    <input type="email" id="email" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control" name="email" placeholder="E-mail*">
                                </div>
                                <div class="col-6">
                                    <input type="text" id="phone" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control" name="phone" placeholder="Numéro de Téléphone*">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-10">
                                    <input type="text" id="adresse" style="border:1px solid  #F7941D;background:rgb(231, 225, 225);border-radius:10px;" class="form-control" name="adresse" placeholder="Adresse*">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="" ><a href="/panier" style="font-weight:bold;">Retour au panier</a></button>
                                <button id="next"  class="" >Suivant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection