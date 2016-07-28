@extends('layouts.app')


@section('content')
    <div class="row">
      <div class="col-sm-12">
          <div id="carousel-example-generic" class="carousel slide col-sm-12 .visible-xs-* .visible-sm-* .visible-md-* .visible-lg-* parallax-window" data-parallax="scroll" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="row">
            <div class="carousel-inner">
              <div class="item active">
                <div class="kitchen" style="height:800px;">
                    <p style="font-size:80px;">KITCHENS</p>
                    <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                    <button class="col-sm-2 col-sm-offset-5 btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">SEE MORE ...</a></button>
                </div>
              </div>
              <div class="item">
                <div class="bathroom" style="height:800px;">
                  <p style="font-size:80px;">BATHROOMS</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="col-sm-2 col-sm-offset-5 btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">SEE MORE ...</a></button>
                </div>
              </div>
              <div class="item">
                <div class="extension" style="height:800px;">
                  <p style="font-size:80px;">SMALL EXTENSIONS</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="col-sm-2 col-sm-offset-5 btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">SEE MORE ...</a></button>
                </div>
              </div>
              <div class="item">
                <div class="wardrobe" style="height:800px;">
                  <p style="font-size:80px;">BESPOKE WARDROBES</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="col-sm-2 col-sm-offset-5 btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">SEE MORE ...</a></button>
                </div>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div> <!-- Carousel -->
      </div>
      <!-- LEARN MORE -->
      <div class=" row custom-div parallax-window" data-parallax="scroll" style="position:relative; top:800px; left:0;">
            <p style="font-size:80px;">HOME</p>
            <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
            <button class="col-sm-2 col-sm-offset-5 btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
      </div>
      <img src="/images/background-tools.jpg" alt="Tools" height="auto" width="100%" class="parallax-window" data-parallax="scroll"/>
      <div class=" row custom-div parallax-window" data-parallax="scroll">
            <p style="font-size:80px;">HOME</p>
            <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
            <button class="col-sm-2 col-sm-offset-5 btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
      </div>
  </div>
@endsection
