<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>
<?php

?>
<div class="row">
    <div class="col-md-4">
        <canvas id="guests_attending" style="width:100%"></canvas>

        <?php var_dump($data['attending_values']); ?>
        </br>
        <?php var_dump($data['attending_names']); ?>
    </div>
    <div class="col-md-4">
    <canvas id="guests_rsvp" style="width:100%"></canvas>
    </div>
    <div class="col-md-4">
        
    </div>
</div>

<!-- Sort out controller -->
<!-- SELECT COUNT(IF(attending = 1, 1, NULL)) 'Yes', COUNT(IF(attending = 0, 1, NULL)) 'No' FROM details -->



<script>
    var attending_xValues = <?php echo json_encode($data['attending_names']); ?>;
    var attending_yValues = <?php echo json_encode($data['attending_values']); ?>;

    var rsvp_xValues = <?php echo json_encode($data['rsvp_names']); ?>;
    var rsvp_yValues = <?php echo json_encode($data['rsvp_values']); ?>;
</script>


<?php require APPROOT . '/views/inc/footer.php' ?>