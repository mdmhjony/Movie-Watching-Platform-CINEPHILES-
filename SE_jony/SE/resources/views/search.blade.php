@extends('frontend')


@section('profile')










<section style="margin-top: 200px;">
    <h1 class="movieScroolHeader mt-2">Movies</h1>

    <div id="carousel11" class="container">

        <div class="control-container">
            <div id="left-scroll-button" class="left-scroll button scroll">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div id="right-scroll-button" class="right-scroll button scroll">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>

        <div class="items" id="carousel-items">
            <div class="item">
                <img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
                <span class="item-title">people Name</span>
                <div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
            </div>
        </div>
    </div>


</section>



<section>
    <h1 class="movieScroolHeader mt-2">Peoples</h1>

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
            <div class="item">
                <img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
                <span class="item-title">people Name</span>
                <div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
            </div>
        </div>
    </div>


</section>


<script>
    function searchAllData() {

        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/searchAllData",
            success: function(data) {
                console.log(data[0]);


                var html = '<div class="control-container">' +
                    '<div id="left-scroll-button" class="left-scroll button scroll">' +
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>' +
                    '</div>' +
                    '<div id="right-scroll-button" class="right-scroll button scroll">' +
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>' +
                    '</div>' +
                    '</div>';



                $.each(data[0], function(key, value) {
                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + value.image + '" />' +
                        '<span class="item-title">' + value.movie_name + '</span>' +
                        '<div class="item-description opacity-none  row justify-content-center">' +
                        '<button onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fas fa-eye"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                });

                var memelist = document.getElementById("carousel11");
                memelist.innerHTML = html;

                var html = '<div class="control-container">' +
                    '<div id="left-scroll-button" class="left-scroll button scroll">' +
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>' +
                    '</div>' +
                    '<div id="right-scroll-button" class="right-scroll button scroll">' +
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>' +
                    '</div>' +
                    '</div>';



                $.each(data[1], function(key, value) {
                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + value.image + '" />' +
                        '<span class="item-title">' + value.name + '</span>' +
                        '<div class="item-description opacity-none  row justify-content-center">' +
                        '<button class="cross-button mr-2" onclick="viewprofile(\'' + value.email + '\')" ><i class="fas fa-user"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                });

                var memelist = document.getElementById("carousel12");
                memelist.innerHTML = html;

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });





    }

    searchAllData();


    function viewprofile(email) {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            url: "/viewprofile",
            success: function(data) {

                // console.log(data);
                window.location.href = "{{'/gotoviewprofile'}}";



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }
</script>





@endsection