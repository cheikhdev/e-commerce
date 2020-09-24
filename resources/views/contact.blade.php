@extends('layouts.app')
	@section('connect')
		<li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
		<li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
	@endsection
    @section('content')
    <div class="container row" style="margin-top:50px; margin-bottom:50px;">
                    <div class="col-4">
                    
                    </div>
                    <div class="col-8">
                        <form action="" method="post">
                            @csrf 
                                <div class="row">
                                    <div class="form-group col-12 ">
                                        <label for="inputPassword" class="" style="font-weight:bold;">Prénom</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer votre prenom">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="form-group col-12 ">
                                        <label for="inputPassword" class=" " style="font-weight:bold;">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12 ">
                                            <label for="inputPassword" class="" style="font-weight:bold;">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email">
                                            </div>
                                      </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12">
                                            <label for="inputPassword" class="" style="font-weight:bold;">Votre message</label>
                                            <div class="col-12">
                                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                      </div>
                                </div>

                                <div class="d-flex justify-content-center">         
                                    <a type="submit"  class="btn btn-success">Envoyer</a>
                                    <a type="reset"  class="btn btn-danger" data-dismiss="modal">Annuler</a>
                                </div>
                        </form>
                    </div>
                </div> 
    @endsection