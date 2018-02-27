<!DOCTYPE HTML>
<html>
<head>
	<title>My-Template</title>
	{{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
	{{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
	{{-- <meta name="keywords" content="" /> --}}
	
	<!-- Bootstrap Core CSS -->
	<!-- <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' /> -->
	{{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}
	
	<!-- Custom CSS -->
	<link href="{{asset('assets/custom/css/my-custom.css')}}" type="text/css" rel="stylesheet" />
	<!-- font CSS -->
	
  	</style>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('assets/materialize/css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- font-awesome icons -->
	<script src="{{asset('assets/font/fontawesome.css')}}" type="text/css" rel="stylesheet"></script>
  <script src="{{asset('assets/js/jquery-2.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/sweetalert/js/sweetalert.min.js')}}" type="text/javascript"></script>

</head> 
<body>
  <nav class="top-nav grey lighten-5">
    <div class="container">
    </div>
  </nav>

  <div class="row valign-wrapper">
    <div class="col s12 m4 offset-m4" style="padding : 0 !important;">
      <div class="card grey lighten-5">
        <div class="card-content">
          <span class="card-title center"><img src="{{asset('assets/img/bangkabelitung.png')}}" height="90px" width="90px"></span>
          <div class="row">
            <form class="col s12" method="post" action="{{route('user.signin')}}">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="user_name" type="text" name="user_name" class="validate">
                        <label for="user_name">Username</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Password</label>
                      </div>
                    </div>
                    <input type="submit" class="col btn z-depth-0 right" value="Login" name="action">
            </form>
          </div>
        </div>
        <div class="card-action">
                    <a href="#recover" id="RecoverPassword">Forgot your password?</a>
            </div>
            
            @include('sweet::alert')

      </div>
    </div>
  </div>

  <footer class="page-footer transparent">
          <div class="footer-copyright light-blue darken-4">
            <div class="container">
            © 2018 
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
    </footer>
    

    <!-- js-->
    <script type="text/javascript">
      swal("Hello world!");
    </script>
    <script src="{{asset('assets/js/jquery-2.2.1.min.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}" type="text/javascript"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="{{asset('assets/materialize/js/materialize.min.js')}}"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
 
</body>
</html>