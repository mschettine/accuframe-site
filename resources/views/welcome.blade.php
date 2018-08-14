@extends('layouts.master')

@section('title')
  Home
@endsection

@section('content')

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="media/img/2015-10-15 11.37.58.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>AccuFrame&reg; Energy Seal</h1>
              <p>Air Isolation Management - AIM for Performance</p>
              <p><a class="btn btn-lg btn-primary" href="/coming-soon" role="button">Buy now!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="media/img/IMG_20151102_141942.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>AccuFrame&reg; Energy Seal Video</h1>
              <p>Looking for a video to explain the process of installation? Look no further!</p>
              <p><a class="btn btn-lg btn-primary" onclick="OpenVideo();" data-toggle="modal" data-target="#myModal" role="button">Watch now!</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="media/img/IMG_20151102_150059.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Who uses AccuFrame&reg; Energy Seal?</h1>
              <p>Learn about the various companies that use AccuFrame&reg; Energy Seal?</p>
              <p><a class="btn btn-lg btn-primary" href="/specs" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle text-primary fa-stack-2x"></i>
            <i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
          </span>
          <h2>Energy Performance</h2>
          <p>AccuFrame&reg; Energy Seal is a new economical innovation designed to help provide a solution to the increased energy efficiency demands required in new home construction.</p>
          <p><a class="btn btn-outline-primary" href="#performance">View details &raquo;</a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle text-primary fa-stack-2x"></i>
            <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
          </span>
          <h2>Builders</h2>
          <p>Today's builders are struggling to meet production demands with a limited skilled-labor pool while simultaneously trying to meet new energy code mandates. AccuFrame&reg; Energy Seal can help solve both problems!</p>
          <p><a class="btn btn-outline-primary" href="#builders" role="button">View details &raquo;</a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <span class="fa-stack fa-5x">
            <i class="fa fa-circle text-primary fa-stack-2x"></i>
            <i class="fa fa-gavel fa-stack-1x fa-inverse"></i>
          </span>
          <h2>Specifications and Testimonials</h2>
          <p>"...it appears that the AccuFrame&reg; product can provide much of the air leakage control needed for homebuilders to meet the tough new Air Leakage requirements of the ECCCNYS-2016." <br><b>Michael DeWein, Strategic Program Director, Leidos</b></p>
          <p><a class="btn btn-outline-primary" href="#specs" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <!-- FEATURETTES -->
      <hr class="featurette-divider" id="performance">
      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading">Energy Performance</h2>
          <p class="lead">
            <i>AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> helps solve two problems at once! The <i>AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> method allows builders to optimize scarce framing labor by providing workers with a template for stud placement that also serves as an air isolation gasket once it's in place. By preprinting framing stud locations on a pliable gasket substrate that attaches to the wall plates, workers can quickly place and nail the studs to the plates, integrating the gasket into the frame (<a onclick="OpenVideo();" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">installation video</a>). When the exterior sheathing is attached to the completed wall frame, the <i>AccuFrame<sup>&reg;</sup></i> gasket, which runs the length of the wall plate, is compressed between the plate and the sheathing, automatically forming another air-flow barrier. This 4-way sealing reduces air intrusion by more than 75% (ASTM E283).</p>
          <p>
            <a class="btn btn-lg btn-primary" href="/performance">Learn more</a>
          </p>
        </div>
      </div>
      <div class="row" style="padding-top: 4%; padding-left: 15%">
        <div class="col-md-4"> <img class="featurette-image img-responsive center-block img-thumbnail" src="/media/img/ryan.jpg">
          <br>
        </div>
        <div class="col-md-7">
          <blockquote class="blockquote">
            <p class="lead" style="font-size: 25px;">Your product offers a solution to a critical air sealing step for all builders. Its benefits are realized almost immediately- through lower heating and cooling costs and even more importantly, a more comfortable home for its occupants.</p>
            <footer style="font-size: 15px;">Ryan McCoon at <cite title="Source Title"><a href="http://www.endurahomes.com/" target="_blank">Endura Homes</a></cite></footer>
          </blockquote>
        </div>
      </div>
      <hr class="featurette-divider" id="builders">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Builders</h2>
          <p class="lead">
            <i>AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> helps solve two problems at once! The <i>AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> method allows builders to optimize scarce framing labor by providing workers with a template for stud placement that also serves as an air isolation gasket once it's in place. By preprinting framing stud locations on a pliable gasket substrate that attaches to the wall plates, workers can quickly place and nail the studs to the plates, integrating the gasket into the frame (<a onclick="OpenVideo();" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">installation video</a>). When the exterior sheathing is attached to the completed wall frame, the <i>AccuFrame<sup>&reg;</sup></i> gasket, which runs the length of the wall plate, is compressed between the plate and the sheathing, automatically forming another air-flow barrier. This 4-way sealing reduces air intrusion by more than 75% (ASTM E283).
          </p>
          <p>
            <a class="btn btn-lg btn-primary" href="/builders">Learn more</a> <a href="#" class="btn btn-secondary btn-lg" onclick="OpenVideo();" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">Installation Video</a>
          </p>
        </div>
        <div class="col-md-5 order-md-1" style="padding-top: 10%">
          <img class="featurette-image img-responsive img-thumbnail center-block mx-auto" src="media/img/zoom.jpg" alt="AccuFrame Energy Seal in use, onsite!">
        </div>
      </div>
      <hr class="featurette-divider" id="specs">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Specifications and Whole House Testing</h2>
          <p class="lead"><i>AccuFrame<sup><small>&reg;</small></sup> Energy Seal</i> is a relatively new product but has undergone a substantial amount of testing in engineering laboratories and recently in a whole house test. Results have been impressive in state agency architectural testing labs and in actual whole house construction testing.</p>
          <p><a class="btn btn-lg btn-primary" href="/specs">Learn more</a></p>
        </div>

        <div class="col-md-5">
          <img class="featurette-image img-responsive img-thumbnail center-block" src="/media/img/home.jpg" alt="Home construction image">
          <br><br>
          <i style="font-size: 19px;">Habitat for Humanity test home. AccuFrame in action!</i>
        </div>
      </div>
      <hr class="featurette-divider">
      <!-- /.FEATURETTES -->

    </div>
    <!-- /.container -->
    
  </main>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Video</h4>
          <button type="button" class="close" onclick="CloseVideo();" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" id="yt-player">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9" id="VideoId">
            <!-- video added here via JS -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" onclick="CloseVideo();" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    // Adds the video to DOM
    function OpenVideo()
    {
      document.getElementById("VideoId").innerHTML = '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mt0ry6VQWzE?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';;
    };

    // Removes the video from the DOM
    function CloseVideo()
    {
      document.getElementById("VideoId").innerHTML = "&nbsp;";
    };

  </script>
  <!-- /.Modal -->

@endsection
