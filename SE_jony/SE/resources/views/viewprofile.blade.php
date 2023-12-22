@extends('frontend')




@section('profile')


<style>
    .outer-inner-text {
        font-size: 50px;
        color: white;
        text-shadow:
            -2px -2px 0 #4dbf00,
            2px -2px 0 #4dbf00,
            -2px 2px 0 #4dbf00,
            2px 2px 0 #4dbf00,
            0px 0px 5px #343a40;
    }

    .card-img-top {
        height: 300px;
    }

    .card-no-border .card {
        border-color: #d7dfe3;
        border-radius: 4px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .pro-img {
        margin-top: -80px;
        margin-bottom: 20px
    }

    .little-profile .pro-img img {
        width: 128px;
        height: 128px;
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 100%
    }

    html body .m-b-0 {
        margin-bottom: 0px
    }

    h3 {
        line-height: 30px;
        font-size: 21px
    }

    .btn-rounded.btn-md {
        padding: 12px 35px;
        font-size: 16px
    }

    html body .m-t-10 {
        margin-top: 10px
    }

    .btn-primary,
    .btn-primary.disabled {
        background: #7460ee;
        border: 1px solid #7460ee;
        -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
        box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
        -webkit-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
        transition: 0.2s ease-in
    }



    .m-t-20 {
        margin-top: 20px
    }

    .text-center {
        text-align: center !important
    }



    h3 {
        color: #455a64;
        font-family: "Poppins", sans-serif;
        font-weight: 400;
    }


    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    /* 
#privacyHeader{
  margin-left:28vw;
} */

    .dropdown,
    .movieScroolHeader {
        display: inline-block;

    }

    .dropdown {
        margin-top: 1%;
    }

    #dropdown2,
    #dropdown3,
    #dropdown4 {
        z-index: 1000;
    }

    .background-hidden {
        display: none;
    }
</style>
<style>
    /* Style for the button */
    #edit-profile-button {
        background-color: #4dbf00;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .mybutton {

        background-color: #4dbf00;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;

    }

    /* Style for the modal container */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgba(52, 58, 64, 0.8);
        /* Black w/ opacity */
    }

    /* Style for the modal content */
    .modal-content {

        background-color: #343a40;
        margin: 15% auto;
        padding: 20px;
        border: none;
        border-radius: 5px;
        width: 50%;

    }

    /* Style for the close button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        text-decoration: none;
        cursor: pointer;
    }

    label[for="name"] {
        font-weight: bold;
        margin-right: 10px;
        display: inline-block;
        width: 60px;
    }

    .popbutton {
        background-color: #4dbf00;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 1px;
        cursor: pointer;
    }

    .popbutton:hover {
        background-color: #3d8b00;
    }
</style>




<div>
    <div class="container-fluid">
        <div class="card">
            <img class="card-img-top" src="images/17.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img id="user-img" src="" alt="user"></div>
                <h3 id="h3name" class="m-b-0"></h3>

                <p id="bio"></p>
                <button id="edit-profile-button" onclick="addFriend()">Add Friend</button>

                <!-- <a href="#" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Add Friend</a> -->
            </div>
        </div>
    </div>
</div>


<!-- The modal -->




<!-- privacy section  -->


<div id="privacyHeader" class=" row justify-content-center">


    <h1 class="outer-inner-text" class="movieScroolHeader mt-2">Watchlist</h1>
</div>


<div id="carousel" class="container">


</div>



<div id="privacyHeaderFavorites" class=" row justify-content-center">


    <h1 class="outer-inner-text" class="movieScroolHeader mt-2">Favorites</h1>
</div>


<div id="carousel1" class="container">
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




<div id="privacyHeaderRecently" class=" row justify-content-center">


    <h1 class="outer-inner-text" class="movieScroolHeader mt-2">Recently Watch</h1>
</div>

<div id="carousel2" class="container">
    <div class="control-container">
        <div id="left-scroll-button" class="left-scroll button scroll">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div id="right-scroll-button" class="right-scroll button scroll">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>

   
</div>





<script>
    function viewprofileAllData() {
        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/viewprofileAllData",
            success: function(data) {
                console.log(data);
                var userinfo = data[0];
                var img = document.getElementById("user-img");
                img.src = "images/" + userinfo.image;
                var name = document.getElementById("h3name");
                name.innerHTML = userinfo.name;
                var bio = document.getElementById("bio");
                bio.innerHTML = userinfo.bio;



                if(data[1]!=''){


                html = '';
                html +=
                    '<div class="control-container">' +
                    '<div id="left-scroll-button" class="left-scroll button scroll">' +
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>' +
                    "</div>" +
                    '<div id="right-scroll-button" class="right-scroll button scroll">' +
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>' +
                    "</div>" +
                    "</div>";

                $.each(data[1], function(key, value) {
                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + value.image + '" />' +
                        '<div class="item-description opacity-none row justify-content-center"><button onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fa fa-eye"></i></button><button class="add-button" onclick="remove(\'' + value.movie_name + '\', \'watchlist\')"><i class="fas fa-minus"></i></button></div>' +
                        "</div>" +
                        "</div>";
                });

                
                var memelist = document.getElementById("carousel");
                memelist.innerHTML = html;

            }
            else{
                html = '';
                html+=`
                <h1 class="outer-inner-text" class="movieScroolHeader mt-2">Watchlist <i class="fas fa-user-secret"></i></h1>`;

                var head=document.getElementById("privacyHeader");
                head.innerHTML=html;
            }

              if(data[3]!=''){

                html = "";
                html +=
                    '<div class="control-container">' +
                    '<div id="left-scroll-button" class="left-scroll button scroll">' +
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>' +
                    "</div>" +
                    '<div id="right-scroll-button" class="right-scroll button scroll">' +
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>' +
                    "</div>" +
                    "</div>";

                $.each(data[3], function(key, value) {
                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + value.image + '" />' +
                        '<div class="item-description opacity-none row justify-content-center"><button onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fa fa-eye"></i></button><button class="add-button" onclick="remove(\'' + value.movie_name + '\', \'favorites\')"><i class="fas fa-minus"></i></button></div>' +
                        "</div>" +
                        "</div>";
                });

                var memelist = document.getElementById("carousel1");
                memelist.innerHTML = html;

            }else{
                html = '';
                html+=`
                <h1 class="outer-inner-text" class="movieScroolHeader mt-2">Favorites <i class="fas fa-user-secret"></i></h1>`;

                var head=document.getElementById("privacyHeaderFavorites");
                head.innerHTML=html;
            }


            if(data[2]!=''){

            

                html = "";
                html +=
                    '<div class="control-container">' +
                    '<div id="left-scroll-button" class="left-scroll button scroll">' +
                    '<i class="fa fa-chevron-left" aria-hidden="true"></i>' +
                    "</div>" +
                    '<div id="right-scroll-button" class="right-scroll button scroll">' +
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>' +
                    "</div>" +
                    "</div>";

                $.each(data[2], function(key, value) {
                    html +=
                        '<div class="items" id="carousel-items">' +
                        '<div class="item">' +
                        '<img class="item-image" src="images/' + value.image + '" />' +
                        '<div class="item-description opacity-none row justify-content-center"><button onclick="show(\'' + value.movie_name + '\')" class="cross-button mr-2"><i class="fa fa-eye"></i></button><button class="add-button" onclick="remove(\'' + value.movie_name + '\', \'recent\')"><i class="fas fa-minus"></i></button></div>' +
                        "</div>" +
                        "</div>";
                });

                var memelist = document.getElementById("carousel2");
                memelist.innerHTML = html;

            }
            else{

                html = '';
                html+=`
                <h1 class="outer-inner-text" class="movieScroolHeader mt-2">Recently Watch <i class="fas fa-user-secret"></i></h1>`;

                var head=document.getElementById("privacyHeaderRecently");
                head.innerHTML=html;

            }



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            },
        });
    }

    viewprofileAllData();


    function addFriend() {

        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/addFriend",
            success: function(data) {

                console.log(data);
               
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        });
    }
</script>







@endsection