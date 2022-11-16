<?php require APPROOT . '/views/inc/header.php' ?>

<?php
flash('page_message');

$guestArray = $data['guest_array'];

create_session("guest_list", $guestArray);


?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- slider_area -->
<div class="slider_area ">
    <div class="slider_area_inner slider_bg_1 overlay2">
        <div class="slider_text text-center">
            <div class="text_inner">
                <img src="<?php echo URLROOT; ?>/img/banner/ornaments.png" alt="">
                <h4>11 Feb 2023</h4>
                <h3 class="announcement_heading">Stacey & Evan's <br>
                    Wedding Celebration</h3>
                <span>We're Getting Married!</span>
            </div>
        </div>
        <div id="wreath_image" class="slider_text text-center">
        </div>
    </div>
</div>
<!--/ slider_area -->

<!-- wedding_countdown -->
<div class="weeding_countdown_area">
    <div class="flowaers_top d-none d-lg-block">
        <img src="<?php echo URLROOT; ?>/img/banner/flower-top.png" alt="">
    </div>
    <div class="flowaers_bottom d-none d-lg-block">
        <img src="<?php echo URLROOT; ?>/img/banner/flower-bottom.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <img class="img-fluid" src="<?php echo URLROOT; ?>/img/banner/flowers.png" alt="">
                    <span>11th February 2023</span>
                    <h3>THE WEDDING Countdown</h3>
                </div>
            </div>
            <div class="col-md-12 text-center mb-5">
            <a href="#rsvp_section" class="boxed_btn3" id="rsvp_scroll_button">RSVP NOW</a>
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
                    <img class="img-fluid" src="<?php echo URLROOT; ?>/img/banner/flowers.png" alt="">
                    <h3>Our Love Story</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-6">
                <div class="single_lover_story text-center">
                    <div class="story_thumb">
                        <img src="<?php echo URLROOT; ?>/img/story/1.png" alt="">
                    </div>
                    <span>The Couple</span>
                    <h3>Evan & Stacey</h3>
                    <p>Welcome family and friends! We are finally getting hitched and cannot wait to share our special day with you.
                        We've created this wedding website as a hub for all of our wedding information. Find the answers to any questions you have 
                        about our big day. We can't wait to see you on the big day!
                    </p>
                </div>
            </div>
            <div class="col-xl-8 col-md-6 col-lg-6">
                <div class="weding_time_line text-center">
                    <div class="single_time_line">
                        <h3>They Met</h3>
                        <p>Evan & Stacey met in 2015 through social media. They instantly clicked and the friendship soon became a blossoming romance. 
                            Fun fact, Evan met Stacey's mom on their first date!</p>
                    </div>
                    <div class="single_time_line">
                        <h3>He Proposed</h3>
                        <p>Evan popped the question on 09 June 2018 at the very top of Moses Mabhida stadium, surrounded by a loving family. They 
                            continued their day with a beautiful lunch at Makaranga and a walk around the whimsical gardens.</p>
                    </div>
                    <div id="last_timeline" class="single_time_line">
                        <h3>Wedding Day</h3>
                        <p>The big day has finally arrived... We hope to commemorate our matrimony with lots of love and laughter! #TurningTaylor2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ our_love-story -->

<!-- program_details -->
<div class="program_details_area">
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-xl-12">
                <div class="section_title text-center">
                    <img class="img-fluid" src="<?php echo URLROOT; ?>/img/banner/flowers.png" alt="">
                    <h3>Program Details</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="single_program program_bg_1 text-center">
                    <div class="program_inner ">
                        <span>
                            13.00
                        </span>
                        <h3>The Ceremony</h3>
                        <p>The ceremony will take place at St. Theresa's Church. This will be a formal mass and we respectfully 
                            request that guests do not take photographs during the ceremony as professional pictures will be taken 
                            throughout the day. We invite you to relax, enjoy the moment and we'll gladly share these images with 
                            you after the celebration.</p>
                        <img src="<?php echo URLROOT; ?>/img/program_details/ornaments.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single_program program_bg_2 text-center">
                    <div class="program_inner ">
                        <span>
                            15.00
                        </span>
                        <h3>Canapes</h3>
                        <p>We will travel to the reception venue at Graceland's Farm after the ceremony. Canapes and refreshments will be served on arrival.</p>
                        <img src="<?php echo URLROOT; ?>/img/program_details/ornaments.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="single_program program_bg_3 text-center">
                    <div class="program_inner ">
                        <span>
                            16.30
                        </span>
                        <h3>Reception</h3>
                        <p>We will commence our evening with a welcome speech, we eat, we drink, we party!</p>
                        <img src="<?php echo URLROOT; ?>/img/program_details/ornaments.png" alt="">
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
                        <img src="<?php echo URLROOT; ?>/img/appointment/flower-top.png" alt="">
                    </div>
                    <div class="flower_2 d-none d-lg-block">
                        <img src="<?php echo URLROOT; ?>/img/appointment/flower-bottom.png" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="popup_box ">
                                <div class="popup_inner">
                                    <div class="form_heading text-center">
                                        <h3>Are You Attending?</h3>
                                        <p>Kindly respond by 30.11.2022</p>
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
    <div class="container">
        <div class="row location_section_row">
            <div class="col-md-12 mb-5">
                <div class="single_address text-center">
                    <h3>Gift Registry</h3>
                    <p>We ask only of your love and presence but if a present is your desire, we would be honoured with a gift card or a gift of cash to make our house a cosy home.</p>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <div class="single_address text-center">
                    <h3>Attire</h3>
                    <p>Theme: Formal</br>
                        We kindly ask our favourite people to indulge their 
                        inner fashionista and wear our wedding colours!
                    </p>

                    <img src="<?php echo URLROOT; ?>/img/colours.svg" class="mt-2 img-responsive">
                </div>
            </div>
            <div class="col-md-4">
                <div class="location_top text-center">
                    <h3>Church</h3>
                    <p>St. Theresas Church, 14 St Theresa Rd<br>
                        <span>Berea, Durban, 4091</span>
                    </p>
                    <a href="https://goo.gl/maps/B23KJRDy43o127yu7" target="_blank" rel="noopener noreferrer" class="boxed_btn3 mt-4">Directions</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single_address text-center">
                    <h3>Reception Venue</h3>
                    <p>Graceland Farms D706 Rd,<br>
                    Peacevale, Durban, 3624</p>
                    <a href="https://g.page/gracelandsfarm?share" target="_blank" rel="noopener noreferrer" class="boxed_btn3 mt-4">Directions</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single_address text-center">
                    <h3>Accommodation</h3>
                    <p>Please find below list of<br>accommodation</p>
                    <a href="https://drive.google.com/file/d/1MuUcK1mn5zQMFpOe11rS7qTY7CG4aiwF/view?usp=share_link" target="_blank" rel="noopener noreferrer" class="boxed_btn3 mt-4">Download</a>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div class="single_address text-center">
                    <h3>Some Boring Rules</h3>
                    <p>To give all our guests the opportunity to celebrate without having to worry about little eyes and ears we politely request no children at the reception.<br><br>

                    Please note we will have a cash bar for the entirety of our reception and the venue prohibits any alcohol purchased off-site
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var ajax_url = "<?php echo URLROOT; ?>/pages/gethint/";
</script>
<?php require APPROOT . '/views/inc/footer.php' ?>