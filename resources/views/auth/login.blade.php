@extends('layouts.app')
    @section('content')
		
			<!-- Debut modall inscriptionnnn -->
			<div class="modal fade" id="ModalLogin">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header" style="background-color:rgb(35, 127, 247);">
                          <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html">
                            <div id="mylogo">
                              <img style="" src="{{asset('images/logo.png')}}" width="150px" height="70px">
                            </div>
                          </a>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
						<div class=" container-auth " style="height:100%;overflow-x:scroll;">
			<div class="card auth ">
				<div class="card-header auth-header login100-form-title" style="background-image: url({{asset('images/consultation-medicale.jpg')}});">
					<span class="login100-form-title-1">
						Authentification
					</span>
				</div>
				<div class="card-body auth-body" >
					<form class="auth-form" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-5" data-validate="Username is required">
							<!-- class="label-input100">Identifiant</span-->
							<div class="input-group login">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer votre login" >

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class=""></span>
						</div>

						<div class="mb-2" data-validate = "Password is required">
							<!--span class="label-input100">Mot de passe</span-->
							<div class="input-group pass">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrer votre mot de passe" >

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<span class=""></span>
						</div>

						<div class="mb-3 d-flex justify-content-end">
							@if (Route::has('password.request'))
								<a class="" href="{{ route('password.request') }}">
									Mot de passe oublié?
								</a>
							@endif
						</div>
						<div class="d-flex justify-content-center " style="">
							<button class="btn-auth btn btn-success" >
								Se Connecter
							</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>                                      
    </div>
    </div>
    </div>
@endsection