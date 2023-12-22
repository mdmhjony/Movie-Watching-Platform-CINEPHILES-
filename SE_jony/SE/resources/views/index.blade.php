@extends('frontend')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active loopVideo">
      <video class="embed-responsive embed-responsive-4by3 img-fluid" autoplay loop unmuted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>
          Nulla vitae elit libero, a pharetra augue mollis interdum.
        </p>
      </div>
    </div>





    <div class="carousel-item loopVideo">
      <video class=" embed-responsive embed-responsive-4by3 img-fluid " autoplay loop unmuted>
        <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>


    <div class="carousel-item loopVideo">
      <video class="embed-responsive embed-responsive-4by3 img-fluid" autoplay loop unmuted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
      </div>
    </div>

    <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon carousleClass" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon carousleClass" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


  </div>

</div>

<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">Recommend</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($users as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->





<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">New Releases</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($newmovies as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->



<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">Old Movies</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($oldmovies as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->




<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">DRAMA</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($DRAMA as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->


<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">HORROR</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($HORROR as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->


<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">COMEDY</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($COMEDY as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->


<!-- movie slider start  -->
<h1 style="color:#fff;" class="movieScroolHeader mt-2">SCIENCE FICTION</h1>
<div id="carousel" class="container">
  <div  class="control-container">
    <div style="border: 3px solid #4dbf00;" id="left-scroll-button" class="left-scroll button scroll">
      <i style="color:#4dbf00;"  class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div style="border: 3px solid #4dbf00;" id="right-scroll-button" class="right-scroll button scroll">
      <i style="color:#4dbf00;" class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>

  <div class="items" id="carousel-items">



    

    @foreach ($SCIENCEFICTION as $user)


    <div class="item">
      <img style="border: 3px solid #4dbf00;" class="item-image" src="{{ asset('images/' . $user->image) }}" alt="Photo" />

      <span class="item-title">{{ $user->movie_name }}</span>
        
      <button onclick="show('{{ $user->movie_name }}')" class="item-load-icon button opacity-none">
          <i class="fas fa-info-circle"></i>

          </button>
       
      </a>
    </div>


    @endforeach


  </div>
</div>




<!-- movie slider end  -->



@endsection