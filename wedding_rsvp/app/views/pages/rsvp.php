<?php require APPROOT . '/views/inc/header.php' ?>

<?php flash('page_message'); ?>

<!-- 
!!!!!!!!!!! Break this up into tasks when you get back

Build form and use the data below
to submit it to the details db
use empty input field for guest id
pull data from main table for options
use modal for not attending
 -->

<section id="rsvp_page_section">
    <div class="container">
        <div class="row rsvp_box h-100 justify-content-md-center">
            <div class="rsvp_column col-lg-4 col-md-8 align-self-center text-center">
                <h3>Attendance confirmation</h3>
                <p class="mb-5">Are you attending the wedding.</p>

                <button type="button" class="boxed_btn3" data-toggle="modal" data-target="#yesModal">
                    Yes
                </button>
                <button type="button" class="boxed_btn_no" data-toggle="modal" data-target="#noModal">
                    No
                </button>
            </div>
        </div>
    </div>
</section>


<!-- The Modal -->
<div class="modal fade" id="noModal">
    <div class="modal-dialog">
        <div class="modal-content text-center">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="modal-title mb-3">You do not wish to attend?</h4>
                Are you sure?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <form class="" action="<?php echo URLROOT; ?>/pages/no/<?php echo $data['id'] ?>" method="post">
                    <input type="submit" value="Yes" class="boxed_btn3">
                    <input type="button" value="No" class="boxed_btn_no" data-dismiss="modal">
                </form>
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
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- guest_id, main, attending -->

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col text-center">
                    <h4 class="mb-4">Select your main</h4>
                        <form action="<?php echo URLROOT; ?>/pages/yes/<?php echo $data['id']; ?>" method="post">
                            <div class="form-row justify-content-center">
                                <div class="col-md-8">
                                    <select class="form-select" aria-label="Default select example" name="guest_main">
                                        <option value="" selected>Select your main dish</option>
                                        <?php foreach ($data['main_array'] as $main_key => $main_value) { ?>
                                            <option value="<?php echo $main_key; ?>"><?php echo $main_value; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" name="guest_id" value="<?php echo $data['id']; ?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" class="boxed_btn3" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
get this select form to post
add error states to view
-->