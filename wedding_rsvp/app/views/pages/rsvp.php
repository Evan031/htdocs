<?php require APPROOT . '/views/inc/header.php' ?>

<p><?php var_dump($data['main_array']); ?></p>

<?php flash('page_message'); ?>

<!-- 
!!!!!!!!!!! Break this up into tasks when you get back

Build form and use the data below
to submit it to the details db
use empty input field for guest id
pull data from main table for options
use modal for not attending
 -->

<div class="container mt-3">

    <p>Are you attending the wedding.</p>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#yesModal">
        Yes
    </button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#noModal">
        No
    </button>
</div>

<!-- The Modal -->
<div class="modal fade" id="noModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">No modal</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Are you sure?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <form class="pull-right" action="<?php echo URLROOT; ?>/pages/no/<?php echo $data['id'] ?>" method="post">
                    <input type="submit" value="Yes" class="btn btn-danger">
                </form>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
            </div>

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="yesModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Yes modal</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- guest_id, main, attending -->

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form action="<?php echo URLROOT; ?>/pages/yes/<?php echo $data['id']; ?>" method="post">
                            <select class="form-select" aria-label="Default select example" name="guest_main">
                                <option value="" selected>Open this select menu</option>
                                <?php foreach ($data['main_array'] as $main_key => $main_value) { ?>
                                    <option value="<?php echo $main_key; ?>"><?php echo $main_value; ?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="guest_id" value="<?php echo $data['id']; ?>">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- 
get this select form to post
add error states to view
-->