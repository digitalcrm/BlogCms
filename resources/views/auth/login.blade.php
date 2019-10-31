@extends('user/app')


@section('bg-img',asset('user/img/contact-bg.jpg'))


@section('head')

@endsection()

@section('title','Login Here')
@section('subheading','')

@section('main-content')

<!-- Post Content -->


<article>
    <div class="container">
      <div class="row justify-content-center">

        <form class="col-md-8" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <a href='{{ route('register') }}' class="btn btn-primary">
                        Register
                    </a>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    <hr>
                    <p align="center">or sign in with:</p>
                    <a href="login/facebook" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text" style="font-size:48px;color:darkblue"></i></a>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text" style="font-size:48px;color:blue"></i></a>
                    
                    <a href="login/google" class="mx-2" role="button"><i class="fab fa-google-plus-g" style="font-size:48px;color:red"></i></a>
                    
                    <a href="login/github" class="mx-2" role="button"><i class="fab fa-github light-blue-text" style="font-size:48px;color:#4078c0"></i></a>
                </div>
            </div>
        </form>

    </div>
</div>
</article>
<hr>
@endsection()
@section('footer')

@endsection()












