<?php require APPROOT . '/views/inc/header.php' ?>
<?php flash('dashboard_message'); ?>
<div class="row">
    <div class="col">
        <?php foreach ($data['guests'] as $guests) : ?>
            <div class="card card-body mb-3">
                <h4 class="card-title"><?php echo $guests->name; ?></h4>
                <div class="bg-light p-2 mb-3">
                    <?php echo $guests->surname; ?>
                    <form class="pull-right" action="<?php echo URLROOT; ?>/dashboards/delete/<?php echo $guests->id; ?>" method="post">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col">
    </div>
    <div class="col">
        <a href="<?php echo URLROOT; ?>/dashboards/add" class="btn btn-success">add Guests</a>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php' ?>