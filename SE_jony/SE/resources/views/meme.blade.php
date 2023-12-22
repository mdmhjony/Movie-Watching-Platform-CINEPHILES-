@extends('frontend')

@section('meme')
<style>
  .square {
    width: 500px;
    height: 300px;
    background-color: wheat;
    float: left;
  }
</style>


<meta name="csrf-token" content="{{csrf_token()}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('frontend/js/meme.js') }}"></script>
<link rel="stylesheet" href="{{ asset('frontend/css/meme.css') }}">

<title>Meme Voting</title>

<div style="margin-left: 100px;margin-top: 100px; margin-right: 100px; border: 5px solid #4dbf00;" class="square">

  <h1>Winner</h1>

  <!-- <ul style="border: 5px solid #4dbf00;" class="ul-style"> -->

    <li class="li-style" >
      <img src="images/12.jpg" alt="Meme Title">
      <h3>Meme Title</h3>

      <button class="memebutton" id="myButton">Upvote</button>

      <span>0 votes</span>
    </li>

  <!-- </ul> -->
</div>









<div style="margin-left: 700px;margin-top: 200px; margin-right: 100px; border: 5px solid #4dbf00;">

  <h2>Current Time</h2>
  <div class="Timer" id="current-time"></div>

  <h2>Countdown Timer</h2>
  <div style="background-color: white;" class="countdown" id="timer"></div>

  <h1 id="top">Meme Voting</h1>
  <!-- Form to upload a new meme -->
  <div class="memebox">

    <label class="h2-style" for="meme">Choose a meme to upload:</label>
    <input type="file" id="memeimg" name="image">
    <br>
    <label class="h2-style" for="title">Meme title:</label>
    <input type="text" id="memetitle" name="title">
    <br>

    <button id="subbtn" onclick="addData()" type="submit">Upload Meme</button>
  </div>

  <hr class="hr-style">


  <h2 class="h2-style" id="ti">Recent Memes</h2>

  <ul class="ul-style" id="meme-list">

    <!-- <li>
      <img src="images/12.jpg" alt="Meme Title">
      <h3>Meme Title</h3>

      <button class="memebutton" id="myButton">Upvote</button>
        <button class="modelbtn" ">Open Modal</button>

      <span>0 votes</span>
    </li> -->

  </ul>

</div>





@endsection