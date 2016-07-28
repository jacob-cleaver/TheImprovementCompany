<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link href="/css/app.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
  <div class="wrapper">
      <nav class="navbar navbar-fixed-top navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="margin-bottom:120px;">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo-house.png" alt="The Improvement Company" height="80px" width="auto"/>
                </a>
            </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}" class="btn-navbar" style="color:#ffffff;">HOME</a></li>
                    <li><a href="{{ url('/kitchens') }}" class="btn-navbar" style="color:#ffffff;">KITCHENS</a></li>
                    <li><a href="{{ url('/bathrooms') }}" class="btn-navbar" style="color:#ffffff;">BATHROOMS</a></li>
                    <li><a href="{{ url('/extensions') }}" class="btn-navbar" style="color:#ffffff;">EXTENSIONS</a></li>
                    <li><a href="{{ url('/joinery') }}" class="btn-navbar" style="color:#ffffff;">JOINERY</a></li>
                    <li><a href="{{ url('/gallery') }}" class="btn-navbar" style="color:#ffffff;">GALLERY</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/about') }}" class="btn-navbar" style="color:#ffffff;">ABOUT</a></li>
                    <li><a href="{{ url('/contact') }}" class="btn-navbar" style="color:#ffffff;">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

  </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="../../../assets/scripts/jquery.mobile.custom.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script src="../node_modules/parallax.js-1.4.2/parallax.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <footer class="row">
    <div class="col-sm-12" style="bottom:0; left:0;">
      <div class="col-sm-3">
        <img src="/images/logo.png" alt="The Improvement Company" height="80px" width="auto" style="margin-left:50px"/>
      </div>
      <div class="col-sm-3">
        Hello
      </div>
      <div class="col-sm-3">
        Hello
      </div>
      <div class="col-sm-3">
        Hello
      </div>
    </div>
  </footer>
</body>
</html>
