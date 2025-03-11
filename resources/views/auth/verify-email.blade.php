@extends('welcome')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>

    <!-- Include your apple-touch-icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/logo.png') }}">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <!-- Additional styling if needed -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body themebg-pattern="theme1">
    <section class="login-block">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="text-center mb-4">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid">
                            </div>
                            <h3 class="text-center txt-primary mb-3">Verify Your Email</h3>
                            <p class="text-muted text-center mb-4">Thanks for signing up! Before getting started, could you
                                verify your email address by clicking on the link we just emailed to you? If you didn't
                                receive the email, we will gladly send you another.</p>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-success">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-block">Resend Verification Email</button>
                            </form>
                            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Bootstrap JS -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
@endsection
