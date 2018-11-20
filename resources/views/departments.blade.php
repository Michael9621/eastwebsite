@extends('layouts.layouts')


@section('content')

@if ($path == "youth")
<style type="text/css">
.intro{
  background: url(../img/intro-bg.jpg1) no-repeat center center;
}

</style>
@endif

<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1 class="brand wow rubberBand" data-wow-delay="0.2s">{{ $path }}</h1>
            <p></p>
            <a href="#home" onclick="openNav()" class="btn btn-default btn-lg page-scroll wow tada" data-wow-delay="0.3s">Ministries &<br>Departments</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!--INFO-->
<div id="services">
  <div class="container">
  <h2 class="text-center">About</h2>
  
    <div class="row east">
        <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="panel-body" style="color: black;">
                <h3 class="text-center">Leaders</h3>
                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
               <div class="panel-body" style="color: black;">
                <h3 class="text-center">synopsis</h3>
                  <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
<hr>
<!--end of info-->

<div id="services">
  <h2 class="text-center">Activities</h2>
  <div class="container">
     <div class="row east">
      <div class="col-sm-6 ">
        <div class="panel panel-default">
         <div class="panel-body" style="color: black;">
            <ul>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.</ul>
           <ul> Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</ul>

           <ul>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</ul>
           <ul> cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         </ul>
      </div>
      </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default ">
          <div class="panel-body" style="color: black;">
            <ul>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.</ul>
           <ul> Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</ul>

           <ul>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</ul>
          </div>
      </div>
      </div>
    </div>
  </div>
  
</div>
@if ($path == "youth" || $path== "pastorate")
<hr>
<!--FAQS-->
<div id="services">
  <h2 class="text-center">FAQs</h2>
  <div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <a href="#">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body" style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
            <div class="right-arrow pull-right">+</div>
          <a href="#">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
</div>  
</div>
@endif
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
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Send Message</button>
        </form>
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>-->
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection