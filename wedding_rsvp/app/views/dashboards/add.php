<?php require APPROOT . '/views/inc/header.php' ?>
<div class="row">
    <div class="col">
        <form action="<?php echo URLROOT; ?>/dashboards/add" method="post">
            <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="surname">Surname: <sup>*</sup></label>
                <input type="text" name="surname" class="form-control form-control-lg <?php echo (!empty($data['surname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['surname']; ?>">
                <span class="invalid-feedback"><?php echo $data['surname_err']; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <div class="col">
    </div>
    <div class="col">
        One of three columns
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php' ?>

