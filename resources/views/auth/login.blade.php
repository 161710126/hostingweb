<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

    <div class="container">
    <img src="assets/guest/images/kegiatan/logo1.png">
    <center>
      <p style="color: #fff;">Welcome to the admin login page</p>
    </center><br>
    <form method="POST" action="{{route('login')}}">
    {{ csrf_field() }}
        <!-- display validation errors here  -->

        <div class="input-group">
            <input id="email" type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus><br>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">           
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group">
            <button type="submit" class="btn">
                {{ __('Login') }}
            </button>
        </div><br>
    </form>
    </div>
</body>
</html>



