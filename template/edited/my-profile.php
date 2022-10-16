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
    </section>

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <img src="assets/img/common/dashboard-user.png" alt="img">
                            <h3>Sherlyn Chopra</h3>
                            <p><a href="tel:+00-123-456-789">+00 123 456 789</a></p>
                            <p><a href="mailto:sherlyn@domain.com">sherlyn@domain.com</a></p>
                        </div>
                        <div class="dashboard_menu_area">
                            <ul>
                                <li><a href="dashboard.html"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                                <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i
                                        class="fas fa-address-card"></i>My bookings
                                    <span> <i class="fas fa-angle-down"></i></span>
                                    <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                                        style="display: none;">
                                        <ul>
                                            <li><a href="hotel-booking.html"><i class="fas fa-hotel"></i>Hotel
                                                    booking</a></li>
                                            <li><a href="flight-booking.html"><i class="fas fa-paper-plane"></i>Flight
                                                    booking</a></li>
                                            <li>
                                                <a href="tour-booking.html">
                                                    <i class="fas fa-map"></i>Tour booking
                                                </a>
                                            </li>
                                            <li><a href="booking-history.html"><i class="fas fa-history"></i>Booking
                                                    history</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="my-profile.html" class="active"><i class="fas fa-user-circle"></i>My
                                        profile</a></li>
                                <li><a href="dashboard.html"><i class="fas fa-wallet"></i>Wallet</a></li>
                                <li><a href="notification.html"><i class="fas fa-bell"></i>Notifications</a></li>
                                <li><a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>My Profile</h3>
                        <div class="profile_update_form">
                            <form action="https://andit.co/projects/html/and-tour/demo/!#" id="profile_form_area">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="f-name">First name</label>
                                            <input type="text" class="form-control" id="f-name" placeholder="Your Name"
                                                value="Sherlyn">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l-name">Last name</label>
                                            <input type="text" class="form-control" id="l-name" value="chopra">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mail-address">Email address</label>
                                            <input type="text" class="form-control" id="mail-address"
                                                value="sherlyn@domain.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mobil-number">Mobile number</label>
                                            <input type="text" class="form-control" id="mobil-number"
                                                value="+00 123 456 789">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="u-name">User name</label>
                                            <input type="text" class="form-control" id="u-name" value="sherlyn">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group change_password_field">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" value="cdkdkdd">
                                            <p>Change password</p>
                                        </div>
                                    </div>
                                    <div class="change_password_input_boxed">
                                        <h3>Change password</h3>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                        placeholder="Old Password">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control"
                                                        placeholder="New Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
include('foot.php');
?>