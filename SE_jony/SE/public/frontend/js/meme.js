// ajax setup
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name ="csrf-token"]').attr("content"),
    },
});

// collect all memes from database and show it to the frontend

function allData() {
    $.ajax({
        type: "GET",
        datatype: "json",
        url: "/allData",
        success: function (data) {
            html = "";
            i = 0;
            $.each(data, function (key, value) {
                ck = "vote";

                $.ajax({
                    type: "GET",
                    datatype: "json",
                    url: "/ckvote" + value.Time,
                    async: false,
                    success: function (data) {
                        ck = data.status;
                    },
                });

                html += "<li class='li-style'>";
                html +=
                    '<img src="images/' + value.PostImg + '" alt="Meme Title">';
                html += "<h3>" + value.memetitle + "</h3>";
                html +=
                    '<button id="' +
                    value.Time +
                    '" onclick="editdata(\'' +
                    value.Time +
                    "')\">" +
                    ck +
                    "</button>";
                html += "<span>" + value.PostLike + "</span>";
                html += "</li>";
                i++;
            });

            var memelist = document.getElementById("meme-list");
            memelist.innerHTML = html;
        },
    });
}
allData();

// memeimg and memetitle are adding here

function addData() {
    var memeimg = document.getElementById("memeimg").value;
    var memetitle = document.getElementById("memetitle").value;

    $.ajax({
        type: "POST",

        dataType: "json",

        data: { memetitle: memetitle, memeimg: memeimg },

        url: "/memestore",
        success: function (data) {
            allData();
            clearData();
        },
    });
}

// clearing data from the filed

function clearData() {

    document.getElementById("memeimg").value = "";
    document.getElementById("memetitle").value = "";
    
}

//when the upvote button clicked

function editdata(time) {
    $.ajax({
        type: "GET",
        datatype: "json",
        url: "/vote" + time,
        success: function (data) {
            allData();
        },
    });
}


//timer

function updateCurrentTime(targetTime) {
    const currentTimeElement = document.getElementById("current-time");
  
    const now = new Date();
    const hours = now.getHours();
    const minutes = now.getMinutes();
    const seconds = now.getSeconds();
  
    // If the current time is equal to the target time, start the timer
    if (hours === targetTime.hours && minutes === targetTime.minutes && seconds === targetTime.seconds) {
      startCountdown(targetTime);
    }
  
    const timeText =
      ("0" + hours).slice(-2) +
      ":" +
      ("0" + minutes).slice(-2) +
      ":" +
      ("0" + seconds).slice(-2);
    currentTimeElement.innerHTML = timeText;
  }
  
  function startCountdown(targetTime) {
    const timerElement = document.getElementById("timer");
  
    const targetDate = new Date();
    targetDate.setHours(targetTime.hours);
    targetDate.setMinutes(targetTime.minutes + 2); // add 2 minutes
    targetDate.setSeconds(targetTime.seconds);
  
    let intervalId;
  
    function updateTimer() {
      const now = new Date();
      const timeDiff = targetDate.getTime() - now.getTime();
  
      // If time has run out, stop the timer
      if (timeDiff <= 0) {
        clearInterval(intervalId);
        timerElement.innerHTML = "Time's up!";
        return;
      }
  
      const hoursRemaining = Math.floor(timeDiff / (1000 * 60 * 60));
      const minutesRemaining = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
      const secondsRemaining = Math.floor((timeDiff % (1000 * 60)) / 1000);
  
      const timerText =
        ("0" + hoursRemaining).slice(-2) +
        ":" +
        ("0" + minutesRemaining).slice(-2) +
        ":" +
        ("0" + secondsRemaining).slice(-2);
      timerElement.innerHTML = timerText;

    }
  
    // Call updateTimer immediately, then every second
    updateTimer();
    intervalId = setInterval(updateTimer, 1000);
  }
  
  // Call updateCurrentTime every second
  setInterval(function () {
    updateCurrentTime({ hours: 22, minutes: 48, seconds:45  });
  }, 1000);
  




 