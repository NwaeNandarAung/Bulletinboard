<!DOCTYPE html>
  <html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SCM Bulletin Board</title>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card text-center">
              <div class="card-body">
                <h1 class="card-title">{{$e->code}}</h1> <br>
                <h2 class="card-text">{{$e->logMessage}}</h2> <br>
                @if($e->code=="ERROR-0003")
                  <a href="{{ url('user/login') }}" class="btn btn-primary" role="button">Back to Login</a>
                @elseif($e->code=="ERROR-0002")
                  <a href="javascript:history.back()" class="btn btn-primary" role="button">Back</a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>