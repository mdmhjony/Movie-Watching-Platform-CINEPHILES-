@extends('frontend')


@section('watchparty')










<section style="margin-top: 200px;">


    <h1 id="watchpartyhead" class="movieScroolHeader mt-2">Create Watch party</h1>`;




    <div id="carousel22" class="container">

        <div class="control-container">
            <div id="left-scroll-button" class="left-scroll button scroll">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div id="right-scroll-button" class="right-scroll button scroll">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>

        <div class="items" id="carousel-items">

        </div>
    </div>


</section>



<section>
    <h1 class="movieScroolHeader mt-2">Friends Watch party</h1>

    <div id="carousel12" class="container">
        <div class="control-container">
            <div id="left-scroll-button" class="left-scroll button scroll">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div id="right-scroll-button" class="right-scroll button scroll">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>

        <div class="items" id="carousel-items">

        </div>
    </div>


</section>


<script>
    function loadwatchPartydata() {

        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/loadwatchPartydata",
            success: function(data) {

                console.log(data[0]);



                if (data[0] != '') {
                    html = '';

                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + data[0].image + '" />' +
                        '<span class="item-title">' + data[0].movie_name + '</span>' +
                        '<div class="item-description opacity-none  row justify-content-center">' +
                        '<button onclick="playWatchparty(\'' + data[0].movie_name + '\',\'' + data[2] + '\',\'' + data[0].movie_clip + '\')" class="cross-button mr-2"><i class="fas fa-play"></i></button>' +
                        '<button onclick="removeWatchparty()" class="cross-button mr-2"><i class="fas fa-minus"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                    var carousel22 = document.getElementById("carousel22");
                    carousel22.innerHTML = html;

                } else {
                    // Get a reference to the div element
                    const carousel22 = document.getElementById('carousel22');

                    // Hide the div by setting its display attribute to "none"
                    carousel22.style.display = 'none';



                    var head1 = document.getElementById("watchpartyhead");
                    head1.innerHTML = "Create Watch party";
                }






                html = '<div class="control-container">' +
                    '<div id="left-scroll-button" class="left-scroll button scroll">' +
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>' +
                    '</div>' +
                    '<div id="right-scroll-button" class="right-scroll button scroll">' +
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>' +
                    '</div>' +
                    '</div>';


                var index=0;
                $.each(data[1], function(key, value) {

                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + value.image + '" />' +
                        '<span class="item-title">' + value.movie_name + '</span>' +
                        '<div class="item-description opacity-none  row justify-content-center">' +
                        '<button onclick="playWatchparty(\'' + value.movie_name + '\',\'' + data[3][index] + '\',\'' + value.movie_clip + '\')" class="cross-button mr-2"><i class="fas fa-play"></i></button>' +
                        '<button onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fas fa-eye"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                        index++;

                });

                var memelist = document.getElementById("carousel12");
                memelist.innerHTML = html;

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });





    }

    loadwatchPartydata();


    function removeWatchparty() {


        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/removeWatchparty",
            success: function(data) {

                loadwatchPartydata();
                console.log(data);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        });

    }


    function playWatchparty(moviename,ownerEmail,movievid){
        
        sessionStorage.setItem('watchpartymoviename', moviename);
        sessionStorage.setItem('ownerEmail', ownerEmail);
        sessionStorage.setItem('movievid', movievid);


        window.location.href = "{{'/viewwatchparty'}}";

    }
</script>






@endsection