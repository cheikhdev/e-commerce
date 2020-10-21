@extends('layouts.app')
	@section('connect')
		<li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
		<li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
	@endsection
    @section('content')


                 <div class="formu" style="text-align: center;"> 
                     <h1 class="mt-5">Nous Ecrire</h1>
                   <p class="mt-1">Laissez nous un message texte pour toutes demandes ou de renseignement</p><br>
                   <p class="mt-1">Nous vous recontacterons.</p>

                <form action="{{('contact.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif

                <input class="mt-4" type="text" name="name" placeholder="METTRE LE NOM " style="width: 500px; height: 50px;">
                <input class="mt-4"type="text" name="name" placeholder="METTRE LE PRENOM" style="width: 500px;height: 50px;"><br>
                <input class="mt-4" type="text" name="name" placeholder="METTRE L'EMAIL" style="width: 500px;height: 50px;">
                <input class="mt-4" type="text" name="name" placeholder="METTRE L'OBJET" style="width: 500px;height: 50px;"><br>
                <textarea class="mt-4" style="width: 1000px;height: 250px;" placeholder="Veuillez Ecrire votre message."></textarea><br>
                <a href="{{url('/home')}}"><button class="btn btn-info mt-2 w-25" type="submit">ENVOYER</button></a>
                </form>

 				</div>  

<style type="text/css">
	
</style>


  
    @endsection