@extends('frontend')


@section('viewwatchparty')


<style>
    .conta11 {
        border: 2px solid #dedede;
        background-color: #495057;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }

    /* Darker chat conta11 */
    .darker {
        border-color: #ccc;
        background-color: #6c757d;
    }

    /* Clear floats */
    .conta11::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Style images */
    .conta11 img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    /* Style the right image */
    .conta11 img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    /* Style time text */
    .time-right {
        float: right;
        color: #aaa;
    }

    /* Style time text */
    .time-left {
        float: left;
        color: #999;
    }

    .chatbox {
        position: fixed;
        bottom: 40px;
        right: 40px;
        width: 500px;
        height: 590px;
        background-color: #fff;
        border-radius: 15px 15px 0 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .chat-content {
        overflow-y: scroll;
        flex-grow: 1;
        padding: 10px;
    }

    .slider {
        height: 20px;
        background-color: #ddd;
        border-radius: 10px;
        margin: 10px;
        cursor: pointer;
    }

    .slider-thumb {
        width: 20px;
        height: 20px;
        background-color: #555;
        border-radius: 50%;
        margin-top: -10px;
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-thumb {
        background: #ccc;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .mytitle {
        color: #f6f6f6;
        position: absolute;
        margin: 5px 0;
        padding: 10px 0;
        width: 100%;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0);
        background: rgba(0, 0, 0, 0.5);
        text-align: center;
    }
</style>

<div class="video-container" style="width: 55%; height: auto; margin-top: 200px; margin-left: 50px; position: relative;">
    <div id="videofile">
    <video  id="myVideo" controls autoplay style="width: 100%; height: auto; float: left; border: 5px solid #4dbf00; z-index: 2;">
            <source src="videos/Avatar.mp4" type="video/mp4">
        </video>
          
    </div>
    <div style="bottom: 470px; ">
        <h2 id="movieTitle" class="mytitle">Video Title</h2>

    </div>
</div>














<div class="chatbox" style="background-color: #495057;  border: 5px solid #4dbf00; ">
    <div id="allchats" class="chat-content">
        <!-- chat messages go here -->


        <div class="conta11 darker">
            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" />
            <p style="color: #f6f6f6;">Hey! I'm fine. Thanks for asking!</p>
            <span class="time-left">11:01</span>
        </div>

        <div class="conta11">
            <img src="/w3images/bandmember.jpg" alt="Avatar" />
            <p style="color: #f6f6f6;">Sweet! So, what do you wanna do today?</p>
            <span class="time-right">11:02</span>
        </div>


    </div>
    <div class="slider"></div>
    <textarea style=" border: 5px solid #4dbf00;  padding: 20px;" id="chats">chat where</textarea>

    <button onclick="chatstore()" style="border: 5px solid #4dbf00; background-color: #4dbf00;  padding: 10px; ">Send</button>
</div>
<script>
    var slider = document.querySelector('.slider');
    var content = document.querySelector('.chat-content');

    slider.addEventListener('mousedown', function(event) {
        var startY = event.clientY;
        var startScrollTop = content.scrollTop;

        document.addEventListener('mousemove', mousemove);
        document.addEventListener('mouseup', mouseup);

        function mousemove(event) {
            var delta = event.clientY - startY;
            var maxHeight = content.scrollHeight - content.clientHeight;
            content.scrollTop = Math.min(maxHeight, Math.max(0, startScrollTop - delta));
        }

        function mouseup(event) {
            document.removeEventListener('mousemove', mousemove);
            document.removeEventListener('mouseup', mouseup);
        }
    });

    content.addEventListener('scroll', function() {
        var maxHeight = content.scrollHeight - content.clientHeight;
        var sliderThumb = document.querySelector('.slider-thumb');
        var thumbPosition = (content.scrollTop / maxHeight) * (slider.clientHeight - sliderThumb.clientHeight);
        sliderThumb.style.transform = 'translateY(' + thumbPosition + 'px)';
    });

    function autoScroll() {
        content.scrollTop = content.scrollHeight - content.clientHeight;
    }

    function autoScrollOnNewContent() {
        // Listen for changes to the chat content
        var observer = new MutationObserver(function(mutations) {
            // Call autoScroll() whenever new content is added
            autoScroll();
        });
        observer.observe(content, {
            childList: true
        });
    }

    // Call autoScrollOnNewContent() to start listening for changes to the chat content and scroll automatically on new content
    autoScrollOnNewContent();

    function playvideoclip() {
        var movievid = sessionStorage.getItem('movievid');
        console.log(movievid);

        var str = '';
        str += `
                <video  id="myVideo" controls autoplay style="width: 100%; height: auto; float: left; border: 5px solid #4dbf00; z-index: 2;">
            <source src="videos/` + movievid + `" type="video/mp4">
        </video>`;

        var videofile = document.getElementById("videofile");
        videofile.innerHTML = str;


    }


    // playvideoclip();

 

    function loadWatchParty() {

        var moviename = sessionStorage.getItem('watchpartymoviename');
        console.log(moviename);
        var ownerEmail = sessionStorage.getItem('ownerEmail');
        console.log(ownerEmail);
        document.getElementById("movieTitle").innerHTML = moviename;



        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                moviename: moviename,
                ownerEmail: ownerEmail,
                _token: '{{ csrf_token() }}'
            },
            url: "/loadWatchParty",
            success: function(data) {

                console.log(data);


                console.log("chatstore");
                var html = '';
                $.each(data, function(key, value) {
                    html += `
                    <div class="conta11">
            <img src="images/` + value.chatimg + `" alt="Avatar" class="right" />
            <p style="color: #f6f6f6;">` + value.msg + `</p>
            <span class="time-left">` + value.dt + `</span>
             </div>`;

                });

                var memelist = document.getElementById("allchats");
                memelist.innerHTML = html;



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }
    loadWatchParty();



    function chatstore() {

        var moviename = sessionStorage.getItem('watchpartymoviename');
        var ownerEmail = sessionStorage.getItem('ownerEmail');
        console.log(ownerEmail);
        var chats = document.getElementById("chats").value;

        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                moviename: moviename,
                ownerEmail: ownerEmail,
                chats: chats,
                _token: '{{ csrf_token() }}'
            },
            url: "/chatstore",
            success: function(data) {
                loadWatchParty();
                ff();
                console.log("chatstore");



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });




    }
</script>

<script>
    var myVideo = document.getElementById("myVideo");

    myVideo.addEventListener("ended", function() {
        // Video has finished playing

        var moviename = sessionStorage.getItem('watchpartymoviename');
        var ownerEmail = sessionStorage.getItem('ownerEmail');


        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                moviename: moviename,
                ownerEmail: ownerEmail,
                _token: '{{ csrf_token() }}'
            },
            url: "/watchpartyend",
            success: function(data) {

                window.location.href = "{{'/watchparty'}}";

                console.log("Video has finished playing.");





            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    });

    function curtime() {

        var ownerEmail = sessionStorage.getItem('ownerEmail');

        var video = document.querySelector('#myVideo');
        var currentTime = video.currentTime;
        var minutes = Math.floor(currentTime / 60);
        var seconds = Math.floor(currentTime % 60);

        var now = new Date();

        // get the current minutes and seconds
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // add leading zero to single-digit numbers
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }

        var totalSeconds = minutes * 60 + seconds;


        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                ownerEmail: ownerEmail,
                _token: '{{ csrf_token() }}'
            },
            url: "/starttime",
            success: function(data) {


                var min1 = data['min'];
                var sec1 = data['sec'];
                var totalSeconds1 = min1 * 60 + sec1 + 5;


                var dif = totalSeconds - totalSeconds1;

                console.log(dif);



            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });


    }
</script>

@endsection