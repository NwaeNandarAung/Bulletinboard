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

      function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Hide download link
        downloadLink.style.display = "none";

        // Add the link to DOM
        document.body.appendChild(downloadLink);

        // Click download link
        downloadLink.click();
      }

      function exportTableToCSV(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");

        for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("th, td");

          for (var j = 0; j < cols.length; j++)
            row.push(cols[j].innerText);

            csv.push(row.join(","));
        }

        // Download CSV file
        downloadCSV(csv.join("\n"), filename);
      }
    </script>
  </body>
</html>