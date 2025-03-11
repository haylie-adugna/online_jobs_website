
@extends('welcome')

@section('content')
  <section class="login-block">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">

          <form method="POST" action="{{ route('login') }}" class="md-float-material form-material">
            @csrf
            <div class="text-center">
              <img src="images/logo.png" alt="Wolkite TSCMS Logo">
            </div>

            <div class="auth-box card">
              <div class="card-block">
                <div class="row m-b-20">
                  <div class="col-md-12">
                    <h3 class="text-center txt-primary">Sign In</h3>
                  </div>
                </div>

                <!-- Social Login Buttons -->
                <div class="row m-b-20">
                  <div class="col-md-6">
                    <a href="#" class="btn btn-facebook m-b-20 btn-block">
                      <i class="icofont icofont-social-facebook"></i> Facebook
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="#" class="btn btn-google m-b-20 btn-block">
                      <i class="icofont icofont-social-google"></i> Google
                    </a>
                  </div>
                </div>

                <p class="text-muted text-center p-b-5">Sign in with your account</p>

                <!-- Email Input -->
                <div class="form-group form-primary">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required autofocus value="haylieadugna13@gmail.com">
                  <span class="form-bar"></span>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <!-- Password Input -->
                <div class="form-group form-primary">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                  <span class="form-bar"></span>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="row m-t-25 text-left">
                  <div class="col-6">
                    <div class="checkbox-fade fade-in-primary">
                      <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                        <span>Remember me</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-6 text-right">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="f-w-600">Forgot Password?</a>
                    @endif
                  </div>
                </div>

                <!-- Login Button -->
                <div class="row m-t-30">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center">LOGIN</button>
                  </div>
                </div>

                <!-- Register Link -->
                <p class="text-inverse text-left">Don't have an account?
                  <a href="{{ route('register') }}"> <b>Register here</b></a> for free!
                </p>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
@endsection
