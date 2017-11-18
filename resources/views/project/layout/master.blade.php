<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('meta')
  <title>Essa al Sulaiti Law Firm</title>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{url('project/css/font-awesome.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('project/css/bootstrap.min.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('project/css/settings.css')}}" type="text/css" media="screen" />
  <link rel="stylesheet" href="{{url('project/css/stylesheet.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('project/css/aos.css')}}" type="text/css">

  <script src="{{url('project/js/jquery-2.1.0.min.js')}}" type="text/javascript"></script>
  <script src="{{url('project/js/bootstrap.min.js')}}" type="text/javascript"></script>
  @yield('styles')
</head>

<body>


  <div class="page-header clearfix">
    <div class="container">
      <div class="col-md-12 no-padding">
        <div class="social-tp">
          <ul>
            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://twitter.com/eslawfirm" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/eslawfirm/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/eslawfirm/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="cont-tp">
          <ul>
            <li><a href="tel:+974 4466 4606"><img src="{{url('project/images/icons/phn-tp.svg')}}"> +974 4466 4606</a></li>
            <li><a href="mailto:info@eslaa.com"><img src="{{url('project/images/icons/eml-tp.svg')}}"> info@eslaa.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navsticky">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('project/images/logo.png')}}" class="logo" alt=""></a> </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('service')}}">Services & Sectors </a></li>
            <li><a href="{{url('team')}}">Our Team </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Modern Law</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('publications')}}"><p>Publications</p></a></li>
                <li><a href="{{url('modern-law')}}"><p>Modern Law</p></a></li>
              </ul>
            </li>
            <li><a href="{{url('news')}}">News</a></li>
            <li><a href="{{url('career')}}"> Career </a></li>
            <li><a href="{{url('contact')}}">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('content')




    <footer>
      <div class="container">
        <div class="col-md-12 no-padding clearfix">
          <div class="row">
            <div class="col-md-2  col-sm-4"><img src="{{url('project/images/ftr-logo.png')}}" class="img-responsive"></div>
            <div class="col-md-4  col-sm-8">
              <div class="col-md-12 ftr-padding">
                <h4>ESSA AL SULAITI LAW FIRM</h4>
                <div class="ftr-con">
                  <ul>
                    <li><a href="tel:+974 4466 4606"><img src="{{url('project/images/icons/phn-ftr.svg')}}">   +974 4466 4606</a></li>
                    <li><img src="{{url('project/images/icons/fax.svg')}}"> +974 4466 4626</li>
                    <li><a href="mailto:info@eslaa.com"><img src="{{url('project/images/icons/mail-ftr.svg')}}"> info@eslaa.com </a></li>
                    <li><img src="{{url('project/images/icons/addr.svg')}}"> Villa 402, D Ring rd, New Salata <br> P.O Box: 4912 Doha Qatar</li>
                  </ul>
                </div>
                <div class="db"><a href="#">Download Brochure</a></div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="col-md-5 col-sm-5 no-padding">
                <h4>Usefull Links</h4>
                <div class="ftr-menu">
                  <ul>
                    <li><a href="{{url('about')}}">Founder Message</a></li>
                    <li><a href="https://www.google.com/maps/place/ESSA+AL+SULAITI+LEGAL+ADVOCACY+%26+ARBITRATION/@25.255689,51.506246,16z/data=!4m5!3m4!1s0x0:0xc184984dd8674c39!8m2!3d25.2556888!4d51.5062456?hl=en-US" target="_blank">Locate Us</a></li>
                    <li><a href="{{url('publications')}}">Publications</a></li>
                    <li><a href="{{url('modern-law')}}">Modern Law</a></li>
                    <li><a href="{{url('career')}}">Career</a></li>
                  </ul>
                </div>
                <h4>Social Media</h4>
                <div class="ftr-social">
                  <ul>
                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/eslawfirm" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/eslawfirm/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/eslawfirm/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7 col-sm-7 no-padding">
                <a class="twitter-timeline" data-height="260" data-dnt="true" data-theme="light" href="https://twitter.com/eslawfirm">Tweets by eslawfirm</a>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 no-padding clearfix">
          <div class="ftr-btm clearfix">
            <div class="ftr-lft"><span>Essa Al Sulaiti Law Firm </span> © 2017 All rights reserved. </div>
            <div class="ftr-rgt">Powered By <a href="http://www.whytecreations.com/" target="_blank" rel="dofollow"> Whyte Company </a></div>
          </div>
        </div>
      </div>
    </footer>

    @section('scripts')
    <script type="text/javascript" src="{{url('project/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{url('project/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{url('project/js/waypoints.min.js')}}"></script> 
    <script src="{{url('project/js/jquery.counterup.min.js')}}"></script> 
    <script src="{{url('project/js/owl.carousel.js')}}" type="text/javascript"></script>
    <script async src="{{url('project/js/widgets.js')}}" charset="utf-8"></script>
    <script src="{{url('project/js/aos.js')}}"></script>
    <script type="text/javascript" src="{{url('project/js/main.js')}}"></script>
    @show


  </body>
  </html>
