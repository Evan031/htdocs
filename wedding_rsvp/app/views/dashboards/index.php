<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>
<?php
$answers = [];
$columns = [];
foreach ((array)($data['guest_graph'][0]) as $key => $value) {
    array_push($columns, $key);
    array_push($answers, $value);
}

?>
<div class="row">
    <div class="col-md-4">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

        <?php var_dump($answers); ?>
        </br>
        <?php var_dump($columns); ?>
    </div>
    <div class="col-md-4">
        <?php foreach ($data['guests'] as $guests) : ?>
            <div class="card card-body mb-3">
                <h4 class="card-title"><?php echo $guests->name; ?></h4>
                <div class="bg-light p-2 mb-3">
                    <?php echo $guests->surname; ?>
                    <form class="pull-right" action="<?php echo URLROOT; ?>/dashboards/delete/<?php echo $guests->id; ?>" method="post">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
                <a href="<?php echo URLROOT; ?>/dashboards/edit/<?php echo $guests->id; ?>" class="btn btn-dark">Edit</a>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-md-4">
        <a href="<?php echo URLROOT; ?>/dashboards/add" class="btn btn-success">add Guests</a>
    </div>
</div>

<!-- Sort out controller -->
<!-- SELECT COUNT(IF(attending = 1, 1, NULL)) 'Yes', COUNT(IF(attending = 0, 1, NULL)) 'No' FROM details -->



<script>
    var foojs = <?php echo $phpfoo; ?>;

    // console.log(guestCountArray);

    // const arrOfNum = [];

    // js_array.forEach(str => {
    //   arrOfNum.push(Number(str));
    // });

    console.log(arrOfNum);
</script>

<script>
    var xValues = <?php echo json_encode($columns); ?>;
    var yValues = <?php echo json_encode($answers); ?>;
    var barColors = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
    ];


    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "World Wine Production 2018"
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
</script>
<?php require APPROOT . '/views/inc/footer.php' ?>