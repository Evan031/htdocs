<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <canvas id="guests_attending" class="graph_style"></canvas>
        </div>
        <div class="col-md-4">
            <canvas id="guests_rsvp" class="graph_style"></canvas>
        </div>
        <div class="col-md-4">
            <canvas id="guests_mains" class="graph_style"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <a href="<?php echo URLROOT ?>/food_preferences.csv" class="btn btn-success">Download Food Preference CSV</a>

            <a href="<?php echo URLROOT; ?>/dashboards/add" class="btn btn-success">add Guests</a>

        </div>
        <div class="col-md-6">
            <button id="r_no_btn" class="btn btn-light">Show haven't RSVP</button>
            <button id="r_yes_btn" class="btn  btn-light">Show RSVP'd guests</button>
            <div id="rsvp_yes">
                <?php foreach ($data['rsvp_yes'] as $rsvp) : ?>
                    <div class="card card-body mb-3">
                        <p class="card-title"><?php echo $rsvp->name; ?> <?php echo $rsvp->surname; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="rsvp_no">
                <?php foreach ($data['rsvp_no'] as $rsvp) : ?>
                    <div class="card card-body mb-3">
                        <p class="card-title"><?php echo $rsvp->name; ?> <?php echo $rsvp->surname; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-md-6">
            <button id="a_no_btn" class="btn btn-light">Show not attending</button>
            <button id="a_yes_btn" class="btn btn-light">Show attending</button>
            <div id="attending_yes">
                <?php foreach ($data['attending_yes'] as $attending) : ?>
                    <div class="card card-body mb-3">
                        <p class="card-title"><?php echo $attending->name; ?> <?php echo $attending->surname; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="attending_no">
                <?php foreach ($data['attending_no'] as $attending) : ?>
                    <div class="card card-body mb-3">
                        <p class="card-title"><?php echo $attending->name; ?> <?php echo $attending->surname; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
    var attending_xValues = <?php echo $data['attending_names']; ?>;
    var attending_yValues = <?php echo $data['attending_values']; ?>;

    var rsvp_xValues = <?php echo $data['rsvp_names']; ?>;
    var rsvp_yValues = <?php echo $data['rsvp_values']; ?>;

    var food_xValues = <?php echo $data['food_names']; ?>;
    var food_yValues = <?php echo $data['food_values']; ?>;
</script>


<?php require APPROOT . '/views/inc/footer.php' ?>