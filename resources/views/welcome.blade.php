<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
            <div class="container">
                <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Welcome to Socialbook !</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">{{ __('Password') }}</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
                        </div>
                        <button class="btn btn-lg btn-block btn-login text-white text-uppercase font-weight-bold mb-2" type="submit">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                        <br>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                        <hr>
                        <button class="btn btn-lg btn-block btn-register text-uppercase font-weight-bold mb-2"><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
    @stack('scripts')
</body>
</html>

