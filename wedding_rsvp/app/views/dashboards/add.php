<?php require APPROOT . '/views/inc/header.php' ?>
<div class="row">
    <div class="col">
        <form action="<?php echo URLROOT; ?>/dashboard/add" method="post">
            <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="surname">Surname: <sup>*</sup></label>
                <input type="text" surname="surname" class="form-control form-control-lg <?php echo (!empty($data['surname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['surname']; ?>">
                <span class="invalid-feedback"><?php echo $data['surname_err']; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <div class="col">
        <?php foreach ($data['users'] as $user) : ?>
            <div class="card card-body mb-3">
                <h4 class="card-title"><?php echo $user->name; ?></h4>
                <div class="bg-light p-2 mb-3">
                    <?php echo $user->email; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col">
        One of three columns
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php' ?>

<br /><b>Notice</b>:  Undefined index: name in <b>C:\MAMP\htdocs\wedding_rsvp\app\views\dashboards\index.php</b> on line <b>7</b><br />