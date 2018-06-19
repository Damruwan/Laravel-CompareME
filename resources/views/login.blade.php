<!DOCTYPE html>
<html>
<head>
	<title>CompareME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-5" style="margin-top: 50px">
            <div class="card">
                <div class="card-header"><h3 class="deemphasized-header">{{ __('Login') }}</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('authenticate') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>