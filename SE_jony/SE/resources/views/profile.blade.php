@extends('frontend')




@section('profile')


<style>
    

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
        margin-top: auto;
        padding: 4px 4px;
        border: none;
        border-radius: 1px;
        cursor: pointer;
    }

    .popbutton:hover {
        background-color: #3d8b00;
    }
</style>

<style>
    #friendlist {
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

    #friendlist {
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

    #friendlist h2 {
        margin-top: 0;
    }

    #friendlist ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #friendlist li {
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
    }

    #friendlist img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    #friendlist button {
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

    #friendlist button:hover {
        background-color: #f33;
    }
</style>


<div>
    <div class="container-fluid">
        <div style="border: 5px solid #4dbf00;" class="card">
            <img  class="card-img-top" src="images/17.jpg" alt="Card image cap">
            <div style="background-color:#212529;" class="card-body little-profile text-center">
                <div  class="pro-img"><img style="border: 5px solid #4dbf00;" id="user-img" src="" alt="user"></div>
                <h3 style="color:white;" id="h3name" class="m-b-0"></h3>

                <p style="color:white;" id="bio"></p>
                <button id="edit-profile-button">Edit Profile</button>
                <button id="popup-btn">Friend List</button>

                <!-- <a href="#" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Add Friend</a> -->
            </div>
        </div>
    </div>
</div>


<!-- The modal -->

<div id="edit-profile-modal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="color: #4dbf00; text-align: center;">Edit Profile</h2>

        <label style="color: #4dbf00 ;" for="name">Name</label>
        <input type="text" id="name" name="name">
        <br>
        <label style="color: #4dbf00 ;" for="meme">Profile Picture</label>
        <input type="file" id="Memeimg" name="image">
        <br>
        <label style="color: #4dbf00 ;" for="bio">Bio:</label>
        <textarea id="biopopup" name="bio"></textarea>
        <br>
        <input onclick="profileEdit()" class="mybutton" type="submit" value="Save Changes">

    </div>

</div>

<!--friend list pop up new -->

<div id="friendlist">
    <h2 style="color:white;" >My Friends</h2>
    <ul id="friends">
        <li>
            <img src="https://via.placeholder.com/50x50.png?text=Profile+Pic" alt="Profile Picture">
            <span>John Doe</span>
            <button>Add</button>
        </li>

    </ul>

    <button id="friendlist-close-btn">Close</button>
</div>




<div id="privacyHeader" class=" row justify-content-center">

    <div class="dropdown">
        <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2(2)"> <i style="color:#4dbf00" class='fas fa-user-lock'></i> Privacy</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div class="dropdown-content bg-dark" id="dropdown2" style="background-color:black">
            <!-- <a  href="#" >Public</a> -->
            <button class="popbutton" onclick="setPrivacy('Watchlistp','p')">Public</button>
            <hr>
            <!-- <a href="#">Friends</a> -->
            <button class="popbutton" onclick="setPrivacy('Watchlistp','f')">Friends</button>
            <hr>
            <!-- <a href="#">Only Me</a> -->
            <button class="popbutton" onclick="setPrivacy('Watchlistp','o')">Only Me</button>
        </div>
    </div>
    <h1 style="color:white;" class="outer-inner-text" class="movieScroolHeader mt-2">Watchlist</h1>
</div>


<div id="carousel" class="container">






</div>



<div id="privacyHeader" class=" row justify-content-center">

    <div class="dropdown">
        <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2(3)"> <i style="color:#4dbf00" class='fas fa-user-lock'></i>Privacy</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div class="dropdown-content bg-dark" id="dropdown3" style="background-color:black">
            <!-- <a  href="#" >Public</a> -->
            <button class="popbutton" onclick="setPrivacy('favoritesp','p')">Public</button>
            <hr>
            <!-- <a href="#">Friends</a> -->
            <button class="popbutton" onclick="setPrivacy('favoritesp','f')">Friends</button>
            <hr>
            <!-- <a href="#">Only Me</a> -->
            <button class="popbutton" onclick="setPrivacy('favoritesp','o')">Only Me</button>
        </div>
    </div>
    <h1 style="color:white;" class="outer-inner-text" class="movieScroolHeader mt-2">Favorites</h1>
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
        <div class="item">
            <img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
            <div class="item-description opacity-none  row justify-content-center">
                <button class="cross-button mr-2"><i class="fa fa-play"></i></button>
                <button class="add-button"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>




<div id="privacyHeader" class=" row justify-content-center">

    <div class="dropdown">
        <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2(4)"> <i style="color:#4dbf00" class='fas fa-user-lock'></i> Privacy</a>
        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
        <div class="dropdown-content bg-dark" id="dropdown4" style="background-color:black">
            <button class="popbutton" onclick="setPrivacy('recentlyp','p')">Public</button>
            <hr>
            <!-- <a href="#">Friends</a> -->
            <button class="popbutton" onclick="setPrivacy('recentlyp','f')">Friends</button>
            <hr>
            <!-- <a href="#">Only Me</a> -->
            <button class="popbutton" onclick="setPrivacy('recentlyp','o')">Only Me</button>
        </div>
    </div>
    <h1 style="color:white;" class="outer-inner-text" class="movieScroolHeader mt-2">Recently Watch</h1>
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

    <div class="items" id="carousel-items">
        <div class="item">
            <img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
            <div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
        </div>
    </div>
</div>





<script>
    function profileAllData() {
        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/profileAllData",
            success: function(data) {
                console.log(data);
                var userinfo = data[0];
                var img = document.getElementById("user-img");
                img.src = "images/" + userinfo.image;
                var name = document.getElementById("h3name");
                name.innerHTML = userinfo.name;
                var bio = document.getElementById("bio");
                bio.innerHTML = userinfo.bio;






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



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            },
        });
    }

    profileAllData();



    function setPrivacy(colName, privacytype, num) {

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                colName: colName,
                privacytype: privacytype,
                _token: '{{ csrf_token() }}'
            },
            url: "/setPrivacy",
            success: function(data) {

                // console.log(data);
                toggleClock2(num);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }



    function remove(movieName, colname) {

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                movieName: movieName,
                colname: colname,
                _token: '{{ csrf_token() }}'
            },
            url: "/remove",
            success: function(data) {

                profileAllData();

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }




    function profileEdit() {

        var name = document.getElementById("name").value;
        var img = document.getElementById("Memeimg").value;
        var bio = document.getElementById("biopopup").value;

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                name: name,
                img: img,
                bio: bio,
                _token: '{{ csrf_token() }}'
            },
            url: "/editprofile",
            success: function(data) {


                var modal = document.getElementById("edit-profile-modal");
                modal.style.display = "none";
                profileAllData();
                nameShow();


            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });



    }
</script>







<script>
    // Get the modal element
    var modal = document.getElementById("edit-profile-modal");

    // Get the button that opens the modal
    var button = document.getElementById("edit-profile-button");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    button.onclick = function() {

        modal.style.display = "block";



        $.ajax({
            type: "GET",
            datatype: "json",
            url: "/profilEdit",
            success: function(data) {
                // console.log(data.bio);
                document.getElementById("name").value = data.name;
                document.getElementById("biopopup").value = data.bio;
                document.getElementById("Memeimg").innerHTML = data.image;


                //   alert(data);

            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        });




    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Handle form submission
    var form = document.getElementById("edit-profile-form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        var name = document.getElementById("name").value;
        var bio = document.getElementById("bio").value;

        modal.style.display = "none";
    });





    function toggleClock2(num) {

    }
</script>


<!-- show friend list -->

<script>
    const popup1 = document.getElementById("friendlist");
    const popupBtn1 = document.getElementById("popup-btn");
    const closeBtn1 = document.getElementById("friendlist-close-btn");



    popupBtn1.addEventListener("click", () => {

        loadfriendlist();
        popup1.style.display = "block";


    });

    closeBtn1.addEventListener("click", () => {
        popup1.style.display = "none";
    });

    function unfriend(email) {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                email: email,
                _token: '{{ csrf_token() }}'
            },
            url: "/unfriend",
            success: function(data) {

                console.log("updated fff");
                 loadfriendlist();



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    }

    function loadfriendlist() {


        $.ajax({

            type: "GET",
            datatype: "json",
            url: "/firendlist",
            success: function(data) {



                var html = '';

                $.each(data, function(key, value) {
                    html +=
                        '<li>' +
                        '<img src="images/' + value.image + '" alt="Profile Picture">' +
                        '<span>' + value.name + '</span>' +
                        '<button onclick="unfriend(\'' + value.email + '\')" >Unfriend</button>' +
                        '</li>';
                });

                var memelist = document.getElementById("friends");
                memelist.innerHTML = html;


            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }

        });

    }
</script>

<!-- show add friend list end -->

@endsection