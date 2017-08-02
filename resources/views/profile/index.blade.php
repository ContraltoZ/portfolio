@extends('layouts.master')

@section('content')

  <div id="myCarousel" class="carousel slide" data-ride="carousel">


      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container" style="background-color: rgba(0, 0, 0, 0.5);width: 100vw;">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Hi, I am Yan Zhang,</h1>
              <p>My interest in programming has highly motivated me to keep learning new things. </br>I also have good communicate skills and be a good team player. </br> I have the ability to quickly embrace new ideas and solve problems.</p>
              <p><a class="btn btn-lg btn-primary" href="#skillNedu" role="button">View More</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="second-slide" src="{{asset('/img/'.$projList[0]->headImage)}}" alt="Second slide" style="bottom: 0;">
          <div class="container" style="background-color: rgba(0, 0, 0, 0.6); width: 100vw;">
            <div class="carousel-caption d-none d-md-block">
              <h1 style=" text-shadow: 3px 3px black;">{{$projList[0]->name}}</h1>
              <p>{{$projList[0]->platform}}</p>
              <p><a class="btn btn-lg btn-primary" href="/projList/proj/{{$projList[0]->id}}" role="button">View detail</a>
              </p>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="third-slide" src="{{asset('/img/'.$projList[2]->headImage)}}" alt="Third slide" style="top: 0;">
          <div class="container" style="background-color: rgba(0, 0, 0, 0.6);width: 100vw;">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>{{$projList[2]->name}}</h1>
              <p>{{$projList[2]->platform}}</p>
              <p><a class="btn btn-lg btn-primary" href="/projList/proj/{{$projList[2]->id}}" role="button">View detail</a></p>
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


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" id="skillNedu">

      <!-- TWO columns of text below the carousel -->
      <div class="row col-lg-12">
        <div class="col-lg-6">
          
          <h4>TECHNICAL SKILLS</h4>
          <p>
            <ul>
              <li><span class="bold">Programming: </span> C++, Java, C# and PHP</li>
              <li><span class="bold">Web Development: </span> HTML, CSS, JS, ASP.NET, WordPress, Laravel, etc.</li>
              <li><span class="bold">Database: </span> Oracle, SQL, JPQL, Distributed data.</li>
              <li><span class="bold">Machine Learning: </span> AI, Data Analysis, etc.</li>
              <li><span class="bold">Others: </span> Photoshop, Interface design</li>
            </ul>
          </p>

        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
          
          <h4>EDUCATION</h4>
          <p><ul>
                <li>Masters of Information Technology</br>Monash University</br>Melbourne, Australia</li>
                <li>Bachelor of Computer Science and Technology</br>Shanghai Electric Power University</br>Shanghai, China</li>
              </ul>
          </p>
          
        </div><!-- /.col-lg-6 -->
        <p class="content-center">
        <a class="btn btn-secondary" href="/fullProfile" role="button">View full profile &raquo;</a>
        <a class="btn btn-primary" href="/projects" role="button">Pervious projects &raquo;</a></p>

      </div><!-- /.row -->

      <hr class="featurette-divider">

      <!-- Another column -->
        <div class="comments">
          <div class="row" style="height: 50px;">
            <h4 class="col-lg-9">COMMENTS</h4>   
            <a href="http://google.com" class="btn col-lg-3">add a comment</a>
          </div>
          @foreach ($comments as $comm)
          <div class="row">
              <div class="col-lg-3">
                <h6>{{$comm->name}}
                <p class="light">commented at {{$comm->created_at->toFormattedDateString()}}</br></p></h6>
              </div>

              <div class="col-lg-9"> <p>{{$comm->content}}</p></div>

          </div>  
              <hr style="margin: 0;padding: 0;">
          @endforeach
          
        </div>

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

@endsection
