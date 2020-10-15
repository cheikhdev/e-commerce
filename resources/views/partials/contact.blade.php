@extends('layouts.app')
	@section('connect')
		<li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
		<li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
	@endsection
  @section('content')
                @if (session('success'))
                        <div class="mx-auto alert alert-success" style="width: 400px;">
                            {{ session('success') }}
                        </div>
                @endif
                 <div class="formu" style="text-align: center;"> 
                     <h1>Contactez -NOUS</h1>
                
                <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                @foreach($errors->all() as $error)
                     <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
                <input class="mt-3" type="text" name="nom" placeholder="Veuillez mettre votre Nom" style="width: 400px; height: 50px;"><br>
                <input class="mt-3"type="text" name="prenom" placeholder="Veuillez mettre votre Prenom" style="width: 400px;height: 50px;"><br>
                <input class="mt-3" type="text" name="email" placeholder="Veuillez mettre votre email" style="width: 400px;height: 50px;"><br>
			   <select id="objet" name="objet">
					  <option hidden>Veuillez preciser l'objet de votre message</option>
					  <option value="objet">Informations</option>
					  <option value="objet">Commande </option>
					  <option value="objet">Livraison </option>
					  <option value="objet">Confusion produit </option>

			   </select>
                <textarea class="mt-3" style="width: 400px;height: 180px;" placeholder="Veuillez Ecrire votre message." name="message"></textarea><br>
                <button class="btn btn-dark mt-4" type="submit">Valider</button>
                </form>
                
 				</div>  


<style type="text/css">
	
</style>


  @endsection