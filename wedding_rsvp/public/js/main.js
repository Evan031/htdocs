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