@extends('layouts.app')

@section('content')
<title>Halaman Admin</title>
	@include('inc.header_admin')
	<hr class="my-4">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-lg-6 col-lg-8">
					<h2>Pendaftaran Seller JBF</h2>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username">Username</label>

                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        <br>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">
                                    Register
                                </button>
                        </div>
                    </form>
					<!-- <form method="POST" action="/kirimdata"> {{csrf_field()}}
                                    
                                    <div class="form-group">
                                        <label for="username"><i>Username</i></label>

                                        <input id="username" type="username" class="form-control" name="username" value="" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Kata Sandi</label>
                                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    </div>

                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-success btn-block">
                                            Daftarkan
                                        </button>
                                    </div>
                                    
                    </form> -->
				</div>
			</div>
		</div>
	</div>
@endsection