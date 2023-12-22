@extends('frontend')





@section('streamingPage')
<style>
#videofile {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.mytitle {
  margin-top: 30px;
  text-align: center;
  font-size: 24px;
  color:white;
}

    </style>
    
    <div class="video-container" style="margin-left:10px; margin-top: 150px; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column;">
  <div id="videofile">
    <h2 id="streamingMoviename" class="mytitle">Video Title</h2>
    <video  id="myVideo" controls autoplay style="border: 5px solid #4dbf00; max-width: 80%; max-height: 80vh;">
      <source src="videos/{{$video }}" type="video/mp4">
    </video>
  </div>
</div>
<script>

  function movienameLoad(){
    var moviename = sessionStorage.getItem('streamingMoviename');
    document.getElementById("streamingMoviename").innerHTML=moviename;

  }
  movienameLoad();
</script>


@endsection