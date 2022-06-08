<?php require APPROOT . '/views/inc/header.php' ?>

<?php
flash('page_message');

$guestArray = $data['guest_array'];

create_session("guest_list", $guestArray);

?>

<!-- slider_area -->
<div class="slider_area ">
    <div class="slider_area_inner slider_bg_1 overlay2">
        <div class="slider_text text-center">
            <div class="text_inner">
                <img src="img/banner/ornaments.png" alt="">
                <h4>11 Feb 2023</h4>
                <h3>Stacey & Evan <br>
                    Wedding Ceremony</h3>
                <span>Get Married</span>
            </div>
        </div>
    </div>
</div>
<!--/ slider_area -->


<div class="rsvp_button">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <a href="#rsvp_section" class="boxed_btn3">RSVP NOW</a>
            </div>
        </div>
    </div>
</div>

<!-- wedding_countdown -->
<div class="weeding_countdown_area">
    <div class="flowaers_top d-none d-lg-block">
        <img src="img/banner/flower-top.png" alt="">
    </div>
    <div class="flowaers_bottom d-none d-lg-block">
        <img src="img/banner/flower-bottom.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <img src="img/banner/flowers.png" alt="">
                    <span>11. February. 2023</span>
                    <h3>THE. WEDDING. Countdown</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="clock" class="countdown_area counter_bg ">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ wedding_countdown -->

<!-- our_love-story -->
<div class="love_story_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <img src="img/banner/flowers.png" alt="">
                    <h3>Our. Love. Story</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_lover_story text-center">
                    <div class="story_thumb">
                        <img src="img/story/1.png" alt="">
                    </div>
                    <span>Groom</span>
                    <h3>Jack Wonner</h3>
                    <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some content of a page when looking at its layout. The point of using Lorem
                        Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                        Content here content here, making it look like readable English. Many desktop publishing
                        packages and web page editors now use.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="weding_time_line text-center">
                    <div class="single_time_line">
                        <h3>Fast Meet</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some.</p>
                    </div>
                    <div class="single_time_line">
                        <h3>He Proposed</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some.</p>
                    </div>
                    <div class="single_time_line">
                        <h3>Love Story</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some.</p>
                    </div>
                    <div class="single_time_line">
                        <h3>Wedding Day</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single_lover_story text-center">
                    <div class="story_thumb">
                        <img src="img/story/2.png" alt="">
                    </div>
                    <span>Bride</span>
                    <h3>Anjelina Kona</h3>
                    <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some content of a page when looking at its layout. The point of using Lorem
                        Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                        Content here content here, making it look like readable English. Many desktop publishing
                        packages and web page editors now use.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ our_love-story -->

<!-- program_details -->
<div class="program_details_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <img src="img/banner/flowers.png" alt="">
                    <h3>Program. Details</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="single_program program_bg_1 text-center">
                    <div class="program_inner ">
                        <span>
                            16.00
                        </span>
                        <h3>Wedding Ceremony</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some content of a page when looking at its layout. </p>
                        <img src="img/program_details/ornaments.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single_program program_bg_2 text-center">
                    <div class="program_inner ">
                        <span>
                            20.00
                        </span>
                        <h3>Lunch Time</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some content of a page when looking at its layout. </p>
                        <img src="img/program_details/ornaments.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single_program program_bg_3 text-center">
                    <div class="program_inner ">
                        <span>
                            22.00
                        </span>
                        <h3>WeParty Time</h3>
                        <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some content of a page when looking at its layout. </p>
                        <img src="img/program_details/ornaments.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ program_details -->

<!-- attend_area -->
<div class="attending_area" id="rsvp_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                <div class="main_attending_area">
                    <div class="flower_1 d-none d-lg-block">
                        <img src="img/appointment/flower-top.png" alt="">
                    </div>
                    <div class="flower_2 d-none d-lg-block">
                        <img src="img/appointment/flower-bottom.png" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="popup_box ">
                                <div class="popup_inner">
                                    <div class="form_heading text-center">
                                        <h3>Are You Attending?</h3>
                                        <p>Kindly respond before 01.12.2022</p>
                                    </div>

                                    <form action="#">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <input type="text" placeholder="Type your name" id="fname" name="fname" onkeyup="showHint(this.value)">
                                            </div>
                                            <div class="col-xl-12">
                                                <span id="txtHint"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- / attend_area -->

<!-- ================ contact section start ================= -->
<section class="location_area">
    <div class="location_info">
        <div class="location_inner">
            <div class="location_top text-center">
                <h3>Location</h3>
                <p>Mas Montagnette, 19 West 21th Str. <br>
                    <span>+1 843-853-1810</span>
                </p>
            </div>
            <div class="address_info d-flex justify-content-between">
                <div class="single_address text-center">
                    <h4>Where to stay</h4>
                    <p>4:00p – 12:00p <br>
                        The Secret Shrine Club</p>
                </div>
                <div class="single_address text-center">
                    <h4>Activities</h4>
                    <p>4:00p – 12:00p <br>
                        The Secret Shrine Club</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var ajax_url = "<?php echo URLROOT; ?>/pages/gethint/";
</script>
<?php require APPROOT . '/views/inc/footer.php' ?>