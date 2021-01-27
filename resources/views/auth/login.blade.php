<!DOCTYPE html>
  <html>
    <head>
      <title>SCM Bulletin Board</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
      <br/>
      <div class="container box">
        <h4 align="center" style="margin-top:20px; color:#999">Login Form</h4><br/>
        <form method="POST" action="{{ route('login') }}">
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
            <div class="col-md-2">
              <span style='color:red;'>*</span>
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
            <div class="col-md-2">
              <span style='color:red;'>*</span>
            </div>
          </div>  
          <div class="form-group row">
            <div class="col-md-4 text-md-right">
              <div class="form-check" style="padding-top:7px;">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>  
            <div class="col-md-8">
              <a class="btn btn-link" href="">
                {{ __('Forgot Your Password?') }}
              </a>
            </div>
          </div> 
          @if (session('error'))
            <div class="alert alert-danger" style="margin:20px 70px;">{{ session('error') }}</div>
          @endif
          <div class="form-group row">
            <div class="offset-8">
              <button type="submit" class="btn btn-primary px-4">
                {{ __('Login') }}
              </button>
            </div>
          </div>
        </form>
      </div>
    </body>
  </html>