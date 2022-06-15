<?php require APPROOT . '/views/inc/header.php' ?>

<section id="rsvp_page_section">
    <div class="container">
        <div class="row main_row rsvp_box h-100 justify-content-md-center">
            <div class="rsvp_column col-lg-4 col-md-8 align-self-center text-center">
                <h3>Attendance confirmation</h3>
                <p class="mb-5">Are you attending the wedding.</p>


                <div class="row">
                    <div class="col">
                        <button type="button" class="boxed_btn3" data-toggle="modal" data-target="#yesModal">
                            Yes
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="boxed_btn_no" data-toggle="modal" data-target="#noModal">
                            No
                        </button>
                    </div>
                </div>
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
                    <div class="form-row">
                        <div class="col">
                            <input type="submit" value="Yes" class="boxed_btn3">
                        </div>
                        <div class="col">
                            <input type="button" value="No" class="boxed_btn_no" data-dismiss="modal">
                        </div>
                    </div>
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
                        <div class="main_menu_text">
                            <h5>Your options are</h5>
                            <p>1. Beef fillet with saut&eacute;ed mushrooms & sherry cr&eacute;me</p>
                            <p>2. Lemon & herb chicken fillet</p>
                            <p>3. Gnocci with wild rocket & pecorino in butternut & parmesan cream</p>
                        </div>
                        <form action="<?php echo URLROOT; ?>/pages/yes/<?php echo $data['id']; ?>" method="post">
                            <div class="form-row justify-content-center">
                                <div class="col-md-8 col-6">
                                    <select class="form-select" aria-label="Default select example" name="guest_main">
                                        <option value="" selected>Select main dish</option>
                                        <?php foreach ($data['main_array'] as $main_key => $main_value) { ?>
                                            <option value="<?php echo $main_key; ?>"><?php echo $main_value; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" name="guest_id" value="<?php echo $data['id']; ?>">
                                </div>
                                <div class="col-md-4 col-6">
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

