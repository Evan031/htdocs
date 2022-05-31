<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>
<div class="row">
    <div class="col-md-12">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>
    <div class="col-md-6">
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
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>/dashboards/add" class="btn btn-success">add Guests</a>
    </div>
</div>

<!-- Sort out controller -->
<!-- SELECT COUNT(IF(attending = 1, 1, NULL)) 'Yes', COUNT(IF(attending = 0, 1, NULL)) 'No' FROM details -->

<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)'
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
            }
        }
    });
</script>
<?php require APPROOT . '/views/inc/footer.php' ?>