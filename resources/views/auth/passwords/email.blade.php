<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">

    <title>Reset password</title>
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <h1>Reset password</h1>
                    <p class="text-muted">Please enter your email address</p>
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Send me the reset link</button>

                        @if (session('status'))
                            <div class="alert alert-success mt-4" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
<script src="{{ asset('vendor/coreui/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/popper.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui-utilities.js') }}"></script>
</body>
</html>