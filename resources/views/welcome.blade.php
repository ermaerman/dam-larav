<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="" sizes="76x76" href="./assets/img/icon.png">
  <link rel="icon" type="image/png" href="{{url ('asset/assets/img/logo3.png')}}">
  <title>DAMRI ‣ Driver System V 1.0.0</title>
  <link href="{{url ('asset/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url ('asset/assets/css/blk-design-system.css?v=1.0.0')}}" rel="stylesheet" />
  <link href="{{url ('asset/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{url ('/')}}" rel="tooltip" title="Takes you everywhere" data-placement="top">
          <span><img width="150" src="{{url ('asset/assets/img/logo1.png')}}"></span></a><font color="gray">Driver System V 1.0.0</font>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>PERUM DAMRI</a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="{{url ('/documentation')}}" class="dropdown-item">
                <i class="tim-icons icon-paper"></i>Documentation
              </a>
              <a href="index.php?content=helpdesk" class="dropdown-item">
                <i class="tim-icons icon-single-02"></i>Helpdesk
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-default d-none d-lg-block" href="" data-toggle="modal" data-target="#myModal2">
              <i class="tim-icons icon-user-run"></i> Login
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- Form Modal -->
      <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center"></div>
            <div class="modal-body">
              <div class="text-center">
                <img width="250" src="{{url ('asset/assets/img/logo1.png')}}">
              </div>
              <div class="text-center text-muted mb-4 mt-3">
                <small>Login with your email corporate please! <a href="#">Don't have an access?</a></small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="form-check mt-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    Remember me!
                  </label>
                </div>
                <div align="right">
                  <button type="button" class="nav-link btn btn-default d-none d-lg-block">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->
  <div class="wrapper">
    <div class="page-header header-filter">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="content-center brand" id="images">
          <h1 class="h1-seo"><img width="450" src="{{url ('asset/assets/img/logo7.png')}}"></h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
          <h5><center>Welcome to the website <a rel="tooltip" title="Driver System V 1.1.0" data-placement="top" href="#">driver.simadamri.com</a> for analyzing the poor goodness of the DAMRI driver, <br>on this website you can find out the character of the DAMRI bus driver for each person. Please login to see. Enjoy!</center></h5>
      </div>
    </div>
  </div>
     
   
    <footer class="footer">
      <div class="container" align="right">
          <p style="color: grey; font-size: 13px;">© 2019, Made with <img width="20" src="{{url ('asset/assets/img/love.png')}}"> by Erma Noviana for a better DAMRI.</p>
      </div>
    </footer>
  <!--   Core JS Files   -->
  <script src="{{url ('asset/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{url ('asset/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{url ('asset/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{url ('asset/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{url ('asset/assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{url ('asset/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="{{url ('asset/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{url ('asset/assets/js/plugins/moment.min.js')}}"></script>
  <script src="{{url ('asset/assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url ('asset/assets/demo/demo.js')}}"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{url ('asset/assets/js/blk-design-system.min.js?v=1.0.0')}}" type="text/javascript"></script>
  <script>

    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>
</html>