<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
  .suggestion-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;
    background-color: #f1f1f1;
    width: 100%;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .suggestion-dropdown li {
    padding: 8px 12px;
    cursor: pointer;
  }

  .suggestion-dropdown li:hover {
    background-color: #ddd;
  }

  .frontText {
    color: #4dbf00;
    font-size: 16px;
    font-weight: bold;
    font-family: Arial, sans-serif;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 1.5;

  }

  .input-group {
    display: flex;
    flex-wrap: wrap;
    padding: 10px;

    justify-content: center;
    align-items: center;
    margin: 20px 0;
  }

  #searchbar {
    width: 300px;
    padding: 10px;
    border-radius: 5px 0 0 5px;
    border: none;
  }

  #searchbtn {
    padding: 10px 15px;
    border-radius: 0 5px 5px 0;
    border: none;
    background-color: #4dbf00;
    color: #fff;
    cursor: pointer;
  }

  #search-results {
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    display: none;

  }
</style>


<style>
  #friendlist1 {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
  }

  #popup-btn {
    background-color: #4dbf00;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  #friendlist1 {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    max-width: 400px;
    overflow-y: auto;
    max-height: 500px;
  }

  #friendlist1 h2 {
    margin-top: 0;
  }

  #friendlist1 ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #friendlist1 li {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  #friendlist1 img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }

  #friendlist1 button {
    margin-left: auto;
    background-color: #4dbf00;
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    transition: all 0.2s ease;
  }

  #friendlist1 button:hover {
    background-color: #f33;
  }

  .bell-icon {
    color: #4dbf00;
    /* font-size: 20px;
    margin-right: 10px;
    cursor: pointer;  */
  }

  .notification-icon {
    display: inline-block;
    width: 50px;
    height: 50px;
    background-color: white;
    border-radius: 30%;
    text-align: center;
    line-height: 50px;
    color: #fff;
    margin-right: 10px;
    /* add 10px margin to the right of the icon */

    cursor: pointer;
  }
</style>


<style>
  #moviedetails {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: red;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
  }

  #Detailsbtn {
    background-color: #4dbf00;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  #moviedetails {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    max-width: 400px;
    overflow-y: auto;
    max-height: 500px;
  }

  #moviedetails h2 {
    margin-top: 0;
  }

  #moviedetails ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #moviedetails li {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  #moviedetails img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }





  #moviedetails-close-btn {
    position: absolute;
    /* position the button relative to its closest positioning ancestor */
    top: 0;
    left: 0;
    width: 24px;
    /* adjust the width and height to match the image size */
    height: 24px;
    border: none;
    /* remove the button border */
    cursor: pointer;
    /* change the cursor to a pointer when hovering over the button */
  }
</style>





<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand " href="index">
    <h1 class="logoName">Cinephiles</h1>
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a style="color:white;" class="nav-link ml-12 navlink" href="index">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a style="color:white;" class="nav-link  navlink" href="movies">Movies</a>
      </li>
      <li class="nav-item">
        <a style="color:white;" class="nav-link navlink" href="meme">Meme</a>
      </li>
      <li class="nav-item">
        <a style="color:white;" class="nav-link navlink" href="watchparty">Watch Party</a>
      </li>


    </ul>

    <!-- <form class="form-inline my-2 my-lg-0"> -->
    <div class="form-inline my-2 my-lg-0">


      <div class="input-group">

        <input id="searchbar" type="text" name="name" placeholder="Search">
        <button id="searchbtn" onclick="search()" type="submit">Search</button>
        <div id="search-results" style="display: none;"></div>

      </div>
      <div class="notification-icon"><i class="fas fa-bell bell-icon"></i></div>

      <div id="imgdiv" style="border: 3px solid #4dbf00;" class="header_img mr-lg-2 mr-md-2 mr-sm-2">

      </div>


      <div class="dropdown">

        <a  id="showname" style="color:#fff; cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn " onclick="toggleClock()">name</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div class="dropdown-content bg-dark" id="dropdown" style="background-color:black">

          <a style="color:#fff;" href="profile">Profile</a>
          <hr>
          <a style="color:#fff;" href="friends">Friends</a>
          <hr>
          <a style="color:#fff;" href="/">Logout</a>

        </div>
      </div>
    </div>
    <!-- </form> -->



  </div>
  </div>
  </div>
</nav>


<div id="friendlist1">
  <h2>Friend requests</h2>
  <ul id="friends1">
    <li>
      <img src="https://via.placeholder.com/50x50.png?text=Profile+Pic" alt="Profile Picture">
      <span>John Doe</span>
      <button>Add</button>
    </li>

  </ul>

  <button id="friendlist1-close-btn">Close</button>
</div>










<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name ="csrf-token"]').attr("content"),
    },
  });

  function search(searchContent) {

    var searchbar = document.getElementById("searchbar").value;

    $.ajax({

      type: "GET",
      datatype: "json",
      url: "/searchbar" + searchbar,
      success: function(data) {

        window.location.href = "{{'/searchres'}}";

      },
    });



  }

  function nameShow() {

    $.ajax({

      type: "GET",
      datatype: "json",
      url: "/nameShow",
      success: function(data) {
        console.log(data);
        var v = document.getElementById("showname");
        v.innerHTML = data[0];
        var html = '<img  src="images/' + data[1] + '" alt="">';
        var memelist = document.getElementById("imgdiv");
        memelist.innerHTML = html;


        // window.location.href = "{{'/searchres'}}";

      },
    });

  }
  nameShow();
</script>



<!-- realtime search call -->

<!-- <script>
  $(function() {
    var searchInput = $('#searchbar');
    var searchResults = $('#search-results');

    searchInput.on('input', function() {
      var query = searchInput.val();
      if (query.length >= 3) {
        $.ajax({
          type: "GET",
          dataType: "json",
          url: "/searchRealtime" + query,
          success: function(data) {
            searchResults.html(data);
            searchResults.show();
            console.log(data);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
        });
      } else {
        searchResults.empty();
        searchResults.hide();
      }
    });
  });
</script> -->

<!-- <script>
		const notificationIcon = document.querySelector('.notification-icon');

		notificationIcon.addEventListener('click', () => {
			alert('Hello!');
		});
	</script> -->


<script>
  const popup = document.getElementById("friendlist1");
  const popupBtn = document.querySelector('.notification-icon');
  const closeBtn = document.getElementById("friendlist1-close-btn");

  popupBtn.addEventListener("click", () => {

    friendrequest();
    popup.style.display = "block";

  });

  closeBtn.addEventListener("click", () => {
    popup.style.display = "none";
  });


  function confirm(email) {

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        email: email,
        _token: '{{ csrf_token() }}'
      },
      url: "/confirm",
      success: function(data) {

        console.log("updated");

        friendrequest();



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  function friendrequest() {


    $.ajax({
      type: "GET",
      datatype: "json",
      url: "/friendrequest",
      success: function(data) {


        console.log(data);

        var html = '';

        $.each(data, function(key, value) {
          html +=
            '<li>' +
            '<img src="images/' + value.image + '" alt="Profile Picture">' +
            '<span>' + value.name + '</span>' +
            '<button onclick="confirm(\'' + value.email + '\')"  >Confirm</button>' +
            '</li>';
        });

        var memelist = document.getElementById("friends1");
        memelist.innerHTML = html;


      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }

    });

  }
</script>

<!-- movie details popup -->

<div style="background-color:#212529; border: 5px solid #4dbf00;" id="moviedetails">



  <button id="moviedetails-close-btn">

    X
  </button>

  <br>


  <div id="moviesinfo">
    <h2 style="color:white;" ></h2>
    <h3 style="color:white;"  ></h3>
    <h3 style="color:white;"  ></h3>
    <p style="color:white;"  ></p>

  </div>

  <div id="playv">

  </div>





  <div  >

    <div id="watchlistdiv">
      <i class="fa fa-plus" style="color:#4dbf00;">Watch list</i>
      <br>
    </div>

    <div id="Favoritesdiv">
      <i class="fa fa-plus" style="color:#4dbf00;">Favorites</i>
      <br>
    </div>

    <div id="Watchpartydiv">
      <i class="fa fa-plus" style="color:#4dbf00;">Watch party</i>
      <br>
    </div>






  </div>



</div>


<script>
  const moviedetails = document.getElementById("moviedetails");
  const Detailsbtn = document.getElementById('Detailsbtn');
  const moviedetailsCloseBtn = document.getElementById("moviedetails-close-btn");



  moviedetailsCloseBtn.addEventListener("click", () => {
    moviedetails.style.display = "none";
  });

  function loadDetails(moviename) {
    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/loadDetails",
      success: function(data) {
        console.log("hyo");

        var moviesinfo = document.getElementById("moviesinfo");

        // Update the movie title
        var h2Element = moviesinfo.getElementsByTagName("h2")[0];
        h2Element.innerHTML = data.movie_name;

        // Update the year
        var h3Elements = moviesinfo.getElementsByTagName("h3");
        h3Elements[0].innerHTML = data.release_year;

        // Update the genre
        h3Elements[1].innerHTML = data.genres;

        // Update the descr
        var pElement = moviesinfo.getElementsByTagName("p")[0];
        pElement.innerHTML = data.synopsis;

        var html = '';

        html += '<a onclick="playVideo(\'' + data.movie_clip + '\',\'' + data.movie_name + '\')" >' +

          '<i class="fa fa-play" style="color:#4dbf00;"> play' +
          '</i> ' +
          '</a>';



        var playv = document.getElementById("playv");
        playv.innerHTML = html;


        html = '';


        html += '<a onclick="addWatchlist(\'' + data.movie_name + '\')" >' +

          '<i class="fa fa-plus" style="color:#4dbf00;"> Watchlist' +
          '</i> ' +
          '</a>';



        var watchlistdiv = document.getElementById("watchlistdiv");
        watchlistdiv.innerHTML = html;

        html = '';


        html += '<a onclick="addFavorites(\'' + data.movie_name + '\')" >' +

          '<i class="fa fa-star" style="color:#4dbf00;"> Favorites' +
          '</i> ' +
          '</a>';



        var Favoritesdiv = document.getElementById("Favoritesdiv");
        Favoritesdiv.innerHTML = html;


        html = '';


        html += '<a onclick="addWatchparty(\'' + data.movie_name + '\')" >' +

          '<i class="fas fa-tv" style="color:#4dbf00;"> Watchparty' +
          '</i> ' +
          '</a>';



        var Watchpartydiv = document.getElementById("Watchpartydiv");
        Watchpartydiv.innerHTML = html;


      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }

  function addWatchlist(moviename) {

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addWatchlist",
      success: function(data) {

        console.log("addWatchlist");



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  function addFavorites(moviename) {
    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addFavorites",
      success: function(data) {

        console.log("addFavorites");



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });


  }

  function addWatchparty(moviename) {
    console.log("addWatchparty");

    $.ajax({
      type: "POST",
      dataType: "json",
      data: {
        moviename: moviename,
        _token: '{{ csrf_token() }}'
      },
      url: "/addWatchparty",
      success: function(data) {

        console.log("addWatchparty");

          window.location.href = "{{'/watchparty'}}";



      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });



  }


  function show(moviename) {

    loadDetails(moviename);

    moviedetails.style.display = "block";
    console.log(moviename);


  }


  function playVideo(x,y) {
    sessionStorage.setItem('streamingMoviename', y);

    window.location.href = "{{ route('streaming') }}?video=" + x;


  }
</script>