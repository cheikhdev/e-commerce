@extends('layouts.app')
	@section('connect')
		<li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Inscription</a></li>
		<li><a href="login.html#"data-toggle="modal" data-target="#ModalLogin"> <i class="fas fa-user-lock fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Connexion</a></li>
	@endsection
    @section('content')


              @if (session('success'))
                        <div class="alert alert-success " role="alert" style="text-align: center;font-size: 25px;">
                            {{ session('success') }}
                        </div>
              @endif
             <div class="formu" style="text-align: center;"> 
                    <div class="mt-3">
                        <a href="/home"><img src="images/cont1.png" alt="logo" width="60px" height="140px"></a>
                        <a href="/home"><img src="images/cont2.png" alt="logo" width="60px" height="140px"></a>
                        <a href="/home"><img src="images/cont3.png" alt="logo" width="60px" height="140px"></a>
                    </div>
                   
                 <h1 class="mt-2">Nous Ecrire</h1>
                   <p class="mt-2">Laissez nous un message texte pour toutes demandes ou de renseignement<br>Nous Vous recontacterons
                 </p>
                
                <form action="{{route('contact.store')}}" method="POST" >
                @csrf
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
                
                <input class="mt-1" type="text" name="nom" placeholder="NOM " style="width: 28%; height: 38px;">
                <input class="mt-2"type="text" name="prenom" placeholder=" PRENOM" style="width: 28%;height: 38px;"><br>
                <input class="mt-2" type="text" name="email" placeholder="EMAIL" style="width: 28%;height: 38px;">
                <input class="mt-2" type="text" name="objet" placeholder="OBJET" style="width: 28%;height: 38px;"><br>
                <textarea class="mt-2" style="width: 56%;height: 160px;" placeholder="MESSAGE." name="message"></textarea><br>
                <a href="{{url('/home')}}"><button class="btn btn-info mt-2 w-25" type="submit">ENVOYER</button></a>
                </form>

 				</div>  

<style type="text/css">
	
</style>


  
    @endsection