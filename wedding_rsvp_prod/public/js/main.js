
$(document).ready(function () {
    // clock for index page
    $('#clock').countdown('2023/02/11', function (event) {
        $(this).html(event.strftime(
            '<div class="countdown_wrap d-flex"><div  class="single_countdown"><h3>%D</h3><span>Days</span></div><div class="single_countdown"><h3>%H</h3><span>Hours</span></div><div class="single_countdown"><h3>%M</h3><span>Minutes</span></div><div class="single_countdown"><h3>%S</h3><span>Seconds</span></div></div>'
        ));
    });

    // Add scrollspy to button
    $('body').scrollspy({
        target: ".weeding_countdown_area",
        offset: 50
    });

    // Add smooth scrolling on all links inside the navbar
    $("#rsvp_scroll_button").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });


    // Dashboard filters
    $("#r_no_btn").click(function () {
        $("#rsvp_yes").hide();
        $("#rsvp_no").show();
        $("#r_yes_btn").show();
        $("#r_no_btn").hide();
    });
    $("#r_yes_btn").click(function () {
        $("#rsvp_no").hide();
        $("#rsvp_yes").show();
        $("#r_no_btn").show();
        $("#r_yes_btn").hide();
    });
    $("#a_no_btn").click(function () {
        $("#attending_yes").hide();
        $("#attending_no").show();
        $("#a_yes_btn").show();
        $("#a_no_btn").hide();
    });
    $("#a_yes_btn").click(function () {
        $("#attending_no").hide();
        $("#attending_yes").show();
        $("#a_no_btn").show();
        $("#a_yes_btn").hide();
    });
});


// Ajax javascript
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", ajax_url + str, true);
        xmlhttp.send();
    }
}


// Guest attending graph
var attending_colours = [
    'rgba(255, 99, 132, 0.2)',
    'rgba(255, 159, 64, 0.2)',
];


new Chart("guests_attending", {
    type: "bar",
    data: {
        labels: attending_xValues,
        datasets: [{
            backgroundColor: attending_colours,
            data: attending_yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Attending Guests"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

// Guest RSVP graph
var attending_colours = [
    'rgba(153, 102, 255, 0.2)',
    'rgba(201, 203, 207, 0.2)'
];

new Chart("guests_rsvp", {
    type: "bar",
    data: {
        labels: rsvp_xValues,
        datasets: [{
            backgroundColor: attending_colours,
            data: rsvp_yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "RSVP Guests"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


// Food Preferences graph
var food_colours = [
    'rgba(153, 102, 255, 0.2)',
    'rgba(201, 203, 207, 0.2)',
    'rgba(255, 99, 132, 0.2)',
    'rgba(255, 159, 64, 0.2)'
];

new Chart("guests_mains", {
    type: "doughnut",
    data: {
        labels: food_xValues,
        datasets: [{
            backgroundColor: food_colours,
            data: food_yValues
        }]
    },
    options: {
        title: {
            display: true,
            text: "Guests Food Preferences!"
        }
    }
});