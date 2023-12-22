// navbar js start
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name ="csrf-token"]').attr("content"),
    },
});


document.addEventListener("DOMContentLoaded", function (event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
                nav.classList.toggle("show");
                toggle.classList.toggle("bx-x");
                bodypd.classList.toggle("body-pd");
                headerpd.classList.toggle("body-pd");
            });
        }
    };

    showNavbar("header-toggle", "nav-bar", "body-pd", "header");

    const linkColor = document.querySelectorAll(".nav_link");

    function colorLink() {
        if (linkColor) {
            linkColor.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        }
    }
    linkColor.forEach((l) => l.addEventListener("click", colorLink));
});

// profile name

function toggleClock() {
    var my = document.getElementById("dropdown");
    var displaySetting = my.style.display;
    if (displaySetting == "block") {
        my.style.display = "none";
    } else {
        my.style.display = "block";
    }
}

//   hover video div

function MouseWheelHandler(e, element) {
    var delta = 0;
    if (typeof e === "number") {
        delta = e;
    } else {
        if (e.deltaX !== 0) {
            delta = e.deltaX;
        } else {
            delta = e.deltaY;
        }
        e.preventDefault();
    }

    element.scrollLeft -= delta;
}

window.onload = function () {
    var carousel = {};
    carousel.e = document.getElementById("carousel");
    carousel.items = document.getElementById("carousel-items");
    carousel.leftScroll = document.getElementById("left-scroll-button");
    carousel.rightScroll = document.getElementById("right-scroll-button");

    carousel.items.addEventListener("mousewheel", handleMouse, false);
    carousel.items.addEventListener("scroll", scrollEvent);
    carousel.leftScroll.addEventListener("click", leftScrollClick);
    carousel.rightScroll.addEventListener("click", rightScrollClick);

    setLeftScrollOpacity();
    setRightScrollOpacity();

    function handleMouse(e) {
        MouseWheelHandler(e, carousel.items);
    }

    function leftScrollClick() {
        MouseWheelHandler(100, carousel.items);
    }

    function rightScrollClick() {
        MouseWheelHandler(-100, carousel.items);
    }

    function scrollEvent(e) {
        setLeftScrollOpacity();
        setRightScrollOpacity();
    }

    function setLeftScrollOpacity() {
        if (isScrolledAllLeft()) {
            carousel.leftScroll.style.opacity = 0;
        } else {
            carousel.leftScroll.style.opacity = 1;
        }
    }

    function isScrolledAllLeft() {
        if (carousel.items.scrollLeft === 0) {
            return true;
        } else {
            return false;
        }
    }

    function isScrolledAllRight() {
        if (carousel.items.scrollWidth > carousel.items.offsetWidth) {
            if (
                carousel.items.scrollLeft + carousel.items.offsetWidth ===
                carousel.items.scrollWidth
            ) {
                return true;
            }
        } else {
            return true;
        }

        return false;
    }

    function setRightScrollOpacity() {
        if (isScrolledAllRight()) {
            carousel.rightScroll.style.opacity = 0;
        } else {
            carousel.rightScroll.style.opacity = 1;
        }
    }
};

// navbar js end

// // all movie list api

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);

        for (var i = 0; i < myObj.content.length; i++) {
            const mealsContainer = document.getElementById("divContainer");

            const mealDiv = document.createElement("div");
            mealDiv.classList.add("col");
            mealDiv.innerHTML = `
    <div  class="mb-5">
        <div   class="item">
            <img style="border: 5px solid #4dbf00;" class="item-image" src="images/${myObj.content[i].image}" />
            <span class="item-title">${myObj.content[i].movie_name}</span>
            <button  onclick="show('${myObj.content[i].movie_name}')" class="item-load-icon button opacity-none">
            <i class="fas fa-info-circle"></i>
            </button>
            <div class="item-description opacity-none">${myObj.content[i].synopsis}</div>
        </div>
    </div>
`;


            mealsContainer.appendChild(mealDiv);
        }
    }
};

let url = "http://localhost:8000/api";

xmlhttp.open("GET", url, true);

xmlhttp.send();

// all movie list api end

// movie fetch from imdb api - index page (start)
const options = {
    method: "GET",
    headers: {
        "X-RapidAPI-Key": "401ca45f1emsh31556d97b49908ep103387jsn5cb236fe3b14",
        "X-RapidAPI-Host": "imdb-top-100-movies.p.rapidapi.com",
    },
};

fetch("https://imdb-top-100-movies.p.rapidapi.com/", options)
    .then((response) => response.json())
    .then((json) => {
        for (var i = 0; i < 40; i++) {
            console.log(json[i]);
            var table = document.getElementById("carousel-items");
            var tr = document.createElement("tr");
            tr.innerHTML =
                '<div class="item">' +
                '<img class="item-image" src="' +
                json[i].image +
                '" />' +
                '<span class="item-title">' +
                json[i].title +
                "</span>" +
                '<a href="streaming"><span class="item-load-icon button opacity-none"><i class="fa fa-play"></i></span></a>' +
                '<div class="item-description opacity-none">Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</div>' +
                "</div>";

            table.append(tr);
        }
    })

    .catch((err) => console.error(err));

// movie fetch from imdb api - index page (end)

// movie fetch from imdb api - index page slider (start)

fetch("https://imdb-top-100-movies.p.rapidapi.com/", options)
    .then((response) => response.json())

    .then((json) => {
        for (var i = 0; i < 2; i++) {
            var table = document.getElementById("uiu");
            var tr = document.createElement("tr");
            tr.innerHTML =
                '<div class="carousel-item active loopVideo">' +
                '<video class="embed-responsive embed-responsive-4by3 img-fluid" autoplay loop unmuted>' +
                '<source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />' +
                "</video>" +
                '<div class="carousel-caption d-none d-md-block">' +
                "<h5>" +
                json[i].title +
                "</h5>" +
                "<p>" +
                "Nulla vitae elit libero, a pharetra augue mollis interdum." +
                "</p>" +
                "</div>" +
                "</div>";

            table.append(tr);
        }
    })
    .catch((err) => console.error(err));

// movie fetch from imdb api - index page slider (end)
