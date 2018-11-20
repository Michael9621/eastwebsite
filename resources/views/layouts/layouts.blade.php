<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="log3.png" href="{{ secure_asset ('img/log3.png') }}">
<title>Nairobi East Sda Church</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon
    ================================================== -->
<link rel="shortcut icon" href="{{ secure_asset('img/logo2.png') }}" type="image/x-icon">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{ secure_asset ('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ secure_asset ('fonts/font-awesome/css/font-awesome.css') }}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href=" {{ secure_asset ('css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{ asset ('js/modernizr.custom.js') }}"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



@yield('content')

<!--departments nav bar-->
<div id="myNav" class="overlays">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlays-content">
    <div class="row">
        <h1>Choose departments</h1>
        <div class="col-md-4">
            <a href="/pastorate">department</a>
            <a href="/music">department</a>
            <a href="/youth">department</a>
            <a href="#">department</a>
        </div>
        <div class="col-md-4">
            <a href="#">department</a>
            <a href="#">department</a>
            <a href="#">department</a>
            <a href="#">department</a>
        </div>
        <div class="col-md-4">
            <a href="#">department</a>
            <a href="#">department</a>
            <a href="#">department</a>
            <a href="#">department</a>
        </div>
    </div>
  </div>
</div>
<!--nav-->



<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2018 NESDAC. Designed by Doug Mocherre</p>
    </div>
  </div>
</div>
<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

<script type="text/javascript" src=" {{ asset ('js/jquery.1.11.1.js') }}"></script>
<script type="text/javascript">
    $(function(){
new WOW().init(); 

});</script>
<script src="{{ secure_asset ('js/wow.min.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/bootstrap.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/SmoothScroll.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/jquery.prettyPhoto.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/jquery.isotope.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/jqBootstrapValidation.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/contact_me.js') }}"></script> 
<script type="text/javascript" src="{{ secure_asset ('js/main.js') }}"></script>

</body>
</html>