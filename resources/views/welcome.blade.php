@extends('layouts.layouts')

@section('content')


<!-- Navigation -->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nesdac">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll " href="#page-top" style="margin-top:-10px; "><b><img src="img/log3.png" style="margin-top: -15px; padding: 0;">  NESDAC </b> </a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Home</a></li>
        <li><a href="#services" class="page-scroll">Daily devotion</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#portfolio" class="page-scroll">Events</a></li>
        <li><a href="#team" class="page-scroll">Location & contacts</a></li>
        <li><a href="#contact" class="page-scroll">Contact us</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1 class="brand wow rubberBand" data-wow-delay="0.2s"> East</h1>
            <p></p>
            <a href="#home" onclick="openNav()" class="btn btn-default btn-lg page-scroll wow tada" data-wow-delay="0.3s">Ministries &<br>Departments</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title wow fadeInUp" data-wow-delay="1.3s" >
      <i class="fa fa-book"></i>
      <h2><b>Daily devotion</b></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor apibus lornare diam commodo nibh.Lorem ipsum dolor sit amet, corpora delectus appareat ex eum, lorem moderatius pro in. No ubique iracundia eos, ei solet homero iriure eam. At mea esse prodesset, repudiare hendrerit duo ea. Ex amet enim tempor nec.
      Quo brute idque interesset ex. Possim meliore mei te. Vel ne tation menandri. Et natum noster duo, ne nec atqui legendos. Ne dicit laoreet est, sed ut ipsum aeque audire, et altera nostro epicurei per. Habeo meliore his ut, in vocent appetere voluptatibus sea.
      Pri assum soleat bonorum ne, eu quot paulo ius. Vel tantas tempor eu, doctus tibique luptatum per cu. In alii nusquam nam. In his viris quodsi everti, pri sint suscipit rationibus ne.</p>
    </div>
  </div>
</div>

<!-- About Section -->
<div id="about">
  <div class="overlay cont">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title text-center">
        <h2>About Us</h2>
      </div>
      <div class="row">
        <!--<div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>-->
        <div class="col-xs-12 col-md-6 wow fadeInLeftBig" data-wow-delay="1s">
          <div class="panel panel-default">
            <div class="panel-heading text-center" style="background-color:#336600; color:#fff;">Who we are</div>
            <div class="panel-body">
                Lorem ipsum dolor sit amet, ius rebum saepe voluptaria ea, propriae senserit complectitur eos ut. Etiam quaestio interesset id mei, his lorem gloriatur ea, nonumy noster eum ex. Oporteat dissentiunt ut est, vis harum pertinacia et. Falli iusto ut vel. Id efficiendi interesset efficiantur mei.
            Vide meis meliore sea in, nisl agam elit eum ne, est liber essent deterruisset id. Diceret suscipit scriptorem in vix, vitae tamquam patrioque vix ne, in eam appetere instructior. Mea ex oportere interpretaris, ut dicunt mentitum temporibus mei, vim iuvaret omnesque eu. Et dolorem epicuri per, ut vis animal singulis. Usu amet laoreet molestiae ea, vide nusquam ei qui, utroque percipit tincidunt mea at.
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 wow fadeInRightBig" data-wow-delay="1.3s">
          <div class="panel panel-default">
            <div class="panel-heading text-center" style="background-color:#336600; color:#fff;">What we do</div>
            <div class="panel-body">
                Lorem ipsum dolor sit amet, ius rebum saepe voluptaria ea, propriae senserit complectitur eos ut. Etiam quaestio interesset id mei, his lorem gloriatur ea, nonumy noster eum ex. Oporteat dissentiunt ut est, vis harum pertinacia et. Falli iusto ut vel. Id efficiendi interesset efficiantur mei.
            Vide meis meliore sea in, nisl agam elit eum ne, est liber essent deterruisset id. Diceret suscipit scriptorem in vix, vitae tamquam patrioque vix ne, in eam appetere instructior. Mea ex oportere interpretaris, ut dicunt mentitum temporibus mei, vim iuvaret omnesque eu. Et dolorem epicuri per, ut vis animal singulis. Usu amet laoreet molestiae ea, vide nusquam ei qui, utroque percipit tincidunt mea at.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
   <!--
           EVENTS 
--><h2 class="text-center">Events</h2>
    <div class="container-fluid events">
    <div class="row wow fadeInUp" data-wow-delay="1.3s">
    <div class="col-sm-4 event">
      <div class="card">
       <img class="card-img-top" src="http://www.banderaumc.org/filerequest/1469" alt="Card image" style="width:100%">
        <div class="card-body">
        <div class="card-title"><h4>Details</h4></div>
          <div class="card-text"><p>Some example text some example text.
           Some example text some example text.
          </p></div>
        </div>
      </div>
      </div>
      
      <div class="col-sm-4 event">
      <div class="card">
        <img class="card-img-top" src="http://www.banderaumc.org/filerequest/1469" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">Details</h4>
          <p class="card-text">Some example text some example text.Some example text some example text.</p>
        </div>
      </div>
      </div>

      <div class="col-sm-4 event">
      <div class="card">
        <img class="card-img-top" src="http://www.banderaumc.org/filerequest/1469" alt="Card image" style="width:100%;">
        <div class="card-body">
          <h4 class="card-title">Details</h4>
          <p class="card-text">Some example text some example text.Some example text some example text.</p>
        </div>
      </div>
      </div>
      </div>
     </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-9">
            <h2>Map</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.875405872488!2d36.88300537742301!3d-1.297914035060645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f13c483e484e3%3A0xb6e8480a05c35e48!2sNairobi+East+S.D.A+church!5e1!3m2!1sen!2ske!4v1520709720425" width="100%" height="500" frameborder="0" style="border:0; padding: 0.1%; background-position: fixed;" allowfullscreen></iframe>
           </div>
           <div class="col-md-3 item1">
            <h2>Contacts</h2>
            <h3>General contacts</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                      <i class="fa fa-map-marker" style="width:30px"></i>Nairobi, KE<br>
                    </li>
                    <li class="list-group-item">
                      <i class="fa fa-phone" style="width:30px"></i> Phone: +254 BLA BLA BLA<br>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
                    </li>
                </ul>
            <h3>Pastor's contacts</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                      <i class="fa fa-map-marker" style="width:30px"></i>Nairobi, KE<br>
                    </li>
                    <li class="list-group-item">
                      <i class="fa fa-phone" style="width:30px"></i> Phone: +254 BLA BLA BLA<br>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
                    </li>
                </ul>
            <h3>Head Elder</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                      <i class="fa fa-map-marker" style="width:30px"></i>Nairobi, KE<br>
                    </li>
                    <li class="list-group-item">
                      <i class="fa fa-phone" style="width:30px"></i> Phone: +254 BLA BLA BLA<br>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
                    </li>
                </ul>
           </div>
       </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2>Get In Touch</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor apibus lornare diam commodo nibh.</p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class=""></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class=""></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class=""></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Send Message</button>
        </form>
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection