<?php
include('head.php');
?>

    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Booking Confirmation</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Booking Submission Areas -->
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tou_booking_form_Wrapper">
                        <div class="tour_booking_form_box mb-4">
                            <div class="booking_success_arae">
                                <div class="booking_success_img">
                                    <img src="assets/img/icon/right.png" alt="img">
                                </div>
                                <div class="booking_success_text">
                                    <h3>John Doe, your order was submitted successfully!</h3>
                                    <h6>Your booking details has been sent to: yourmail@domain.com</h6>
                                </div>
                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Your information</h3>
                            <div class="tour_booking_form_box">
                                <div class="your_info_arae">
                                    <ul>
                                        <li><span class="name_first">First name:</span> <span
                                                class="last_name">John</span></li>
                                        <li><span class="name_first">Last name:</span> <span
                                                class="last_name">Doe</span></li>
                                        <li><span class="name_first">Email address:</span> <span
                                                class="last_name">yourmail@domain.com</span></li>
                                        <li><span class="name_first">Address:</span> <span class="last_name">1901
                                                Thornridge Cir. Shiloh, Hawaii 81063</span></li>
                                        <li><span class="name_first">City:</span> <span
                                                class="last_name">Thornridge</span></li>
                                        <li><span class="name_first">State:</span> <span class="last_name">Hawaii</span>
                                        </li>
                                        <li><span class="name_first">Postal code:</span> <span
                                                class="last_name">81063</span></li>
                                        <li><span class="name_first">Country:</span> <span class="last_name">USA</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking details</h3>
                                </div>
                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Booking ID: <span>#RB5783GH</span></li>
                                        <li>Booking date: <span>10 February 2022</span></li>
                                        <li>Payment method: <span>Bank transfer</span></li>
                                        <li>Booking status: <span>Success</span></li>
                                    </ul>
                                    <ul>
                                        <li>Adult Price x 1 <span>$40,000.00</span></li>
                                        <li class="remove_coupon_tour">Discount <span>10%</span></li>
                                        <li>Tax <span>5%</span></li>
                                    </ul>
                                    <div class="tour_bokking_subtotal_area">
                                        <h6 class="remove_coupon_tour">Subtotal <span>$38,000.00</span></h6>
                                    </div>
                                    <div class="coupon_add_area">
                                        <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)
                                            <span>$5,000.00</span>
                                        </h6>
                                    </div>
                                    <div class="total_subtotal_booking">
                                        <h6 class="remove_coupon_tour">Total Amount <span>$33,000.00</span> </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include('foot.php');
?>