
<!DOCTYPE html>
<html class="no-js" data-url="{{ url('/') }}" data-token="{{ csrf_token() }}" lang="en">
    <head>
         <meta charset="UTF-8"> 
        <title>Home</title> 
        <!-- Bootstrap core CSS -->
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
<body>
    <div class="container">
      <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>         
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">             
                <li class=""><a href="#">Home</a></li>             
                <li class=""><a href="#">About this app</a></li>             
                <li class=""><a href="{{ url('canvas') }}">paint</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    </div>    
	@yield('content')
</body>
<footer class="container-fluid" id="footer">
	<div class="footer col-lg-12">
	    <div class="col-lg-4">
	    <ul>
	        <li><a href="index.php">Home</a></li>
	    </ul>
	    </div>
	</div>
</footer>    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ url('assets/js/scripts.js') }}"></script>
    <script src="{{ url('assets/js/canScript.js') }}"></script>
    </body>
</html>
