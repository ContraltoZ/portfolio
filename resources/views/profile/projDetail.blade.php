@extends('layouts.master')

@section('content')

<div class="container projDetail">

  <h2 class="featurette-heading">{{$proj->name}}</h2>
  <a href="{{$proj->github}}">>> GITHUB <<</a>

  <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading">
            <span class="watermark">It'll blow your mind.</span></br>
            Platform: </h3>
          <p class="lead">{{$proj->platform}}</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{asset('/img/'.$proj->image1)}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          <h3 class="featurette-heading">
            <span class="watermark">Oh yeah, it's that good. </span></br>
            Implemented functionalities:</h3>
          <p class="lead">{{$proj->functions}}</p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="{{asset('/img/'.$proj->image2)}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading">
            <span class="watermark">And lastly, this one. </span></br>
            Some Technick Details:</h3>
          <p class="lead">{{$proj->techDetail}}</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{asset('/img/'.$proj->image3)}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

  </div>
      <!-- /END THE FEATURETTES -->


      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/vendor/holder.min.js"></script>

@endsection
