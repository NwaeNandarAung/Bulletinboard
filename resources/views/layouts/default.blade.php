<!DOCTYPE html>
<html>
  <head>
    <title>SCM Bulletin Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="header">
      @include('includes.header')
    </div>
    <div id="main">
      @yield('content')
    </div>
    <footer id="sticky-footer" class="py-2 px-2">
      @include('includes.footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
      function myFunction() {
        if (!confirm("Are You Sure to delete this post?"))
          event.preventDefault();
      }

			$(document).ready(function(){
				$('#btnClear').click(function(){
						$('#myForm input[type="text"]').val('');
						$('#myForm #description').val('');
            $('#myForm input[type="checkbox"]').val('');
				});
			});

			$(document).ready(function(){
				$('#userClear').click(function(){				
						$('#userCreateForm input[type="text"]').val('');
						$('#userCreateForm #address').val('');
            $('#userCreateForm input[type="password"]').val('');
            $('#userCreateForm input[type="email"]').val('');
            $('#userCreateForm input[type="file"]').val('');
            $('#userCreateForm input[type="date"]').val('');
            $('#output').hide('');
				});
			});

    </script>
  </body>
</html>