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
            text: "Guests Food Preferences"
        }
    }
});



// Dashboard filters
$(document).ready(function () {
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
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", ajax_url + str, true);
        xmlhttp.send();
    }
}