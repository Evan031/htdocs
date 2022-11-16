<?php require APPROOT . '/views/inc/header.php' ?>
<div id="dashboard_container" class="container">
<div class="row justify-content-md-center">
    <div class="col">
        <form action="<?php echo URLROOT; ?>/dashboards/edit/<?php echo $data['id']; ?>" method="post">
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
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php' ?>

