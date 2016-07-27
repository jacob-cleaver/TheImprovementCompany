@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div id="carousel-example-generic" class="carousel slide col-sm-12 .visible-xs-* .visible-sm-* .visible-md-* .visible-lg-*" data-ride="carousel" data-interval="6000" style="height:">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="kitchen">
                  <p style="font-size:80px;">KITCHENS</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
                </div>
              </div>
              <div class="item">
                <div class="bathroom">
                  <p style="font-size:80px;">BATHROOM</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
                </div>
              </div>
              <div class="item">
                <div class="extension">
                  <p style="font-size:80px;">EXTENSION</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
                </div>
              </div>
              <div class="item">
                <div class="wardrobe">
                  <p style="font-size:80px;">WARDROBE</p>
                  <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="btn btn-blue" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
                </div>
              </div>
                <!-- <img src="/images/kitchen.jpg" alt="Kitchen" style="filter:blur(5px); z-index:-1;"/> -->
              <!-- </div>
              <div class="item">
                <img src="/images/bathroom.jpg" alt="Bathroom"/>
              </div>
              <div class="item">
                <img src="/images/extension.jpg" alt="Extension"/>
              </div>
              <div class="item">
                <img src="/images/wardrobe.jpg" alt="Wardrobe"/>
              </div> -->
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
        <div class=" row custom-div" style="margin-top:800px">
              <p>The Improvement Company</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              <button class="btn btn-turquoise" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
        </div>

        <!-- LEARN MORE -->
        <div class="row transparent-div">
              <p>Project Bazaar</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              <button class="btn btn-turquoise" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
        </div>

        <!-- LEARN MORE -->
        <div class=" row custom-div">
          <a name="learn-more"></a>
          <p>Project Bazaar</p>
          <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
          <ul>
              <li>List of projects</li>
              <li>Examplar work for Admins to show</li>
              <li>Voting system</li>
              <li>Messaging system? - between students and tutors</li>
              <li>Settings - personalising accounts -> saving that in the database</li>
              <li>etc ...</li>
              <li>etc ...</li>
              <li>etc ...</li>
          </ul>
        </div>

        <!-- LEARN MORE -->
        <div class="row transparent-div">
              <p>Project Bazaar</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              <button class="btn btn-turquoise" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
        </div>

        <!-- LEANR MORE -->
        <div class="row custom-div">
              <a name="BOB"></a>
              <p>BOB</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              <button class="btn btn-turquoise" style="margin-top:15px;"><a href="{{ url('/learnmore') }}" style="color: white; text-decoration: none;">learn more</a></button>
        </div>

        <!-- LEARN MORE -->
        <div class="row transparent-div">
              <p>Project Bazaar</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              <button class="btn btn-turquoise" style="margin-top:15px;"><a style="color: white; text-decoration: none;">learn more</a></button>
        </div>

        <!-- LEANR MORE -->
        <div class="row custom-div">
              <p>EXTRA</p>
              <p>This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
              <button class="btn btn-turquoise" style="margin-top:15px;"><a href="{{ url('/learnmore') }}" style="color: white; text-decoration: none;">learn more</a></button>
        </div>
  </div>
@endsection
