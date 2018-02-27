<!DOCTYPE HTML>
<html>
<head>
	<title>My-Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	
	<!-- Bootstrap Core CSS -->
	<!-- <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' /> -->

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('assets/materialize/css/materialize.min.css')}}"  media="screen,projection"/>

      <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- font-awesome icons -->
  <script src="{{asset('assets/font/fontawesome.css')}}" type="text/css" rel="stylesheet"></script>

      <!-- Custom CSS -->
  <link href="{{asset('assets/css/my-custom.css')}}" type="text/css" rel="stylesheet" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- js-->
	<script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/countup.js')}}" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="{{asset('assets/materialize/js/materialize.min.js')}}"></script> -->
  

</head> 
<body>


    <!--left-fixed -navigation-->

    @include('template/menu_header')


    <!--left-fixed -navigation-->

    <!-- header-starts -->
    <!-- //header-ends -->
    
    <!-- main content start-->

    @yield('content')
    
    <!--footer-->
    
    <!--//footer-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                
                  $('a').removeClass('my-act');

                  url = window.location.href;
                  if (url.includes("home")) {
                    $('a#beranda-act').addClass('my-act');
                    $('li#beranda-li').addClass('active');
                  } 
                  else if (url.includes("pegawai")) {
                    $('a#data_master').addClass('my-act');
                  } 
                  else if (url.includes("rekap-keseluruhan") || url.includes("rekap-instansi")) {
                    $('a#rekapitulasi-act').addClass('my-act');
                  } 
                  else if (url.includes("biodata")) {
                    $('a#biodata-act').addClass('my-act');
                  } 
                  else if (url.includes("slip-gaji")) {
                    $('a#slip-gaji-act').addClass('my-act');
                  }

                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content, #main-chart').toggleClass('active');
                    $('#sidebar li').css('width','250px');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    $('#beranda').toggle();
                    $('#data_master').toggle(); $('i.dropdown-icon').toggle();
                    $('#rekapitulasi').toggle();
                    $('#biodata').toggle();
                    $('#slip_gaji').toggle();
                });



                $('#data-master-act').on('click', function () {
                    $('ul#ul-data-master').toggle();
                });

                $('#rekapitulasi-act').on('click', function () {
                    $('ul#ul-rekapitulasi').toggle();
                });

                // $(".collapsible").collapsible();

            });
        </script>
</body>
</html>