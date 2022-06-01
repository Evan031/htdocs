<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>

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

<script>
    var attending_xValues = <?php echo $data['attending_names']; ?>;
    var attending_yValues = <?php echo $data['attending_values']; ?>;

    var rsvp_xValues = <?php echo $data['rsvp_names']; ?>;
    var rsvp_yValues = <?php echo $data['rsvp_values']; ?>;

    var food_xValues = <?php echo $data['food_names']; ?>;
    var food_yValues = <?php echo $data['food_values']; ?>;
</script>


<?php require APPROOT . '/views/inc/footer.php' ?>