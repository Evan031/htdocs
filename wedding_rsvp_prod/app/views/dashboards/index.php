<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>

<div id="dashboard_container" class="container-fluid">
    <div class="row mb-5">
        <div class="col-md-4">
            <canvas id="guests_attending" class="graph_style"></canvas>
        </div>
        <div class="col-md-4">
            <canvas id="guests_rsvp" class="graph_style"></canvas>
        </div>
        <div class="col-md-4">
            <a href="<?php echo URLROOT ?>/food_preferences.csv" class="btn btn-success">Download Food Preference CSV</a>
            <a href="<?php echo URLROOT; ?>/dashboards/add" class="btn btn-success">add Guests</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <canvas id="guests_mains" class="graph_style"></canvas>
        </div>
        <div class="col-md-3">
            <button id="r_no_btn" class="btn btn-light">Show haven't RSVP</button>
            <button id="r_yes_btn" class="btn  btn-light">Show RSVP'd guests</button>
            <div id="rsvp_yes">
                <h4 class="mb-4 mt-4">Have RSVP'd</h4>
                <?php foreach ($data['rsvp_yes'] as $rsvp) : ?>
                    <div class="card bg-success card-body mb-3">
                        <p class="card-title"><?php echo $rsvp->name; ?> <?php echo $rsvp->surname; ?></p>
                        <div class="row">
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/dashboards/edit/<?php echo $rsvp->id; ?>" class="btn btn-dark">Edit</a>
                            </div>
                            <div class="col">
                                <form class="pull-right" action="<?php echo URLROOT; ?>/dashboards/delete/<?php echo  $rsvp->id; ?>" method="post">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="rsvp_no">
                <h4 class="mb-4 mt-4">Have NOT RSVP'd</h4>
                <?php foreach ($data['rsvp_no'] as $rsvp) : ?>
                    <div class="card bg-danger card-body mb-3">
                        <p class="card-title"><?php echo $rsvp->name; ?> <?php echo $rsvp->surname; ?></p>
                        <div class="row">
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/dashboards/edit/<?php echo $rsvp->id; ?>" class="btn btn-dark">Edit</a>
                            </div>
                            <div class="col">
                                <form class="pull-right" action="<?php echo URLROOT; ?>/dashboards/delete/<?php echo  $rsvp->id; ?>" method="post">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-md-3">
            <button id="a_no_btn" class="btn btn-light">Show not attending</button>
            <button id="a_yes_btn" class="btn btn-light">Show attending</button>
            <div id="attending_yes">
                <h4 class="mb-4 mt-4"> Guests Attending </h4>
                <?php foreach ($data['attending_yes'] as $attending) : ?>
                    <div class="card bg-success card-body mb-3">
                        <p class="card-title"><?php echo $attending->name; ?> <?php echo $attending->surname; ?></p>
                        <div class="row">
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/dashboards/edit/<?php echo $attending->id; ?>" class="btn btn-dark">Edit</a>
                            </div>
                            <div class="col">
                                <form class="pull-right" action="<?php echo URLROOT; ?>/dashboards/delete/<?php echo  $attending->id; ?>" method="post">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="attending_no">
                <h4 class="mb-4 mt-4"> Guests NOT Attending </h4>
                <?php foreach ($data['attending_no'] as $attending) : ?>
                    <div class="card bg-danger card-body mb-3">
                        <p class="card-title"><?php echo $attending->name; ?> <?php echo $attending->surname; ?></p>
                        <div class="row">
                            <div class="col">
                                <a href="<?php echo URLROOT; ?>/dashboards/edit/<?php echo $attending->id; ?>" class="btn btn-dark">Edit</a>
                            </div>
                            <div class="col">
                                <form class="pull-right" action="<?php echo URLROOT; ?>/dashboards/delete/<?php echo  $attending->id; ?>" method="post">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
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