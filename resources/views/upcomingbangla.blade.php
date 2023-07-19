@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ===============================
            evetn body start
        ===================================== -->
    <section id="event_part">
        <nav class="evnt_bradcrmb_marg"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item event_bread_col"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
            </ol>
        </nav>
        <div class="container">
            <div class="title">
                <h2>Education Events in Bangladesh</h2>
                <p>At our Bangladesh events, you can meet university representatives and discuss your study prospects,
                    campus life
                    and more
                    in person. You can also have your application assessed and submitted, if sufficient. We currently have 3
                    active
                    events
                    in Bangladesh. The next event is Canada Dhanmondi Application Hour | 8June 2023 for Canada and it’s
                    happening
                    from 08
                    June 2023. Register today!</p>

            </div>
            <div class="event_fotm">
                <h3>View events by</h3>
            </div>
            <div class="evnt_form_item">
                <form action="#" method="post">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>City</option>
                        <option value="1">Dhaka</option>
                        <option value="2">Cylhet</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Month</option>
                        <option value="1">Jan</option>
                        <option value="2">Favroary</option>
                        <option value="3">March</option>
                        <option value="3">Aprlil</option>
                        <option value="3">May</option>
                        <option value="3">Jun</option>
                        <option value="3">Jully</option>
                        <option value="3">Augest</option>
                        <option value="3">Septembor</option>
                        <option value="3">Octobar</option>
                        <option value="3">Nobembar</option>
                        <option value="3">Decembor</option>
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Destinations</option>
                        <option value="1">Dhaka</option>
                        <option value="2">Cylhet</option>
                        <option value="3">Three</option>
                    </select>
                </form>
            </div>

        </div>
    </section>
    <!-- =============event part end======== -->
    <!-- =============event found part start======== -->
    <section id="event_found_part">
        <div class="container">
            <div class="title">
                <h1>2 event found</h1>
                <h4 class="mt-2">July '23</h4>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="event_found_item mt-4 p-3">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}./images/event_page.jpg" alt="event_page.jpg">
                        </div>
                        <div class="event_text_item mt-3">
                            <strong>Study in UK | Study Group | Chattogram | June 2023</strong>
                            <h5 class="my-2">Attend FA's University of Western Australia Application Day, Meet the
                                University expert and clear all your doubts to
                                study in abroad!</h5>
                            <p>Bangladesh</p>
                            <div class="event_img_country">
                                <img src="{{ asset('frontend_assets') }}./images/event_australia_flag.png" alt="event_australia_flag.png"> AU
                                <img src="{{ asset('frontend_assets') }}./images/event_uk_flag.png" alt="event_uk_flag.png"> UK
                                <img src="{{ asset('frontend_assets') }}./images/event_india_flag.png" alt="event_india_flag.png"> IE
                                <img src="{{ asset('frontend_assets') }}./images/event_gb_flag.png" alt="event_gb_flag.png"> GB
                                <img src="{{ asset('frontend_assets') }}./images/event_canada_flag.png" alt="event_canada_flag.png"> CA
                            </div>
                            <p class="my-2">Dhaka , Bangladesh</p>
                            <div class="event_icons_date">
                                <small><i class="fa-solid fa-flag"></i> BD</small><br>
                                <small><i class="fa-regular fa-calendar-days"></i> calender icon 5th Jul 2023</small><br>
                                <small><i class="fa-regular fa-clock"></i> clock icon 12:00 PM - 04:00 PM</small><br>
                            </div>
                            <button class="my-4">
                                <a href="more_info.html">more info</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event_found_item mt-4 p-3">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}./images/event_page2.jpg" alt="event_page2.jpg">
                        </div>
                        <div class="event_text_item mt-3">
                            <strong>Study in UK | Study Group | Chattogram | June 2023</strong>
                            <h5 class="my-2">Attend FA's University of Western Australia Application Day, Meet the
                                University expert and clear all your doubts to
                                study in abroad!</h5>
                            <p>Bangladesh</p>
                            <div class="event_img_country">
                                <img src="{{ asset('frontend_assets') }}./images/event_australia_flag.png" alt="event_australia_flag.png"> AU
                                <img src="{{ asset('frontend_assets') }}./images/event_uk_flag.png" alt="event_uk_flag.png"> UK
                                <img src="{{ asset('frontend_assets') }}./images/event_india_flag.png" alt="event_india_flag.png"> IE
                                <img src="{{ asset('frontend_assets') }}./images/event_gb_flag.png" alt="event_gb_flag.png"> GB
                                <img src="{{ asset('frontend_assets') }}./images/event_canada_flag.png" alt="event_canada_flag.png"> CA
                            </div>
                            <p class="my-2">Dhaka , Bangladesh</p>
                            <div class="event_icons_date">
                                <small><i class="fa-solid fa-flag"></i> BD</small><br>
                                <small><i class="fa-regular fa-calendar-days"></i> calender icon 5th Jul 2023</small><br>
                                <small><i class="fa-regular fa-clock"></i> clock icon 12:00 PM - 04:00 PM</small><br>
                            </div>
                            <button class="my-4">
                                <a href="more_info.html">more info</a>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =============event fount part end======== -->
    <!-- ========== Start Section Study Part ========== -->
    <section id="study_part">
        <div class="title">
            <h2>Study Abroad with FA Bangladesh</h2>
            <h5>Fill in your details below to get a personalised advice</h5>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="study_img_item">
                    <div class="img">
                        <img src="images/Inquiry-Image-UAE.png" alt="Inquiry-Image-UAE.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="study_form_item">
                    <form action="#" method="post" class="form-control">
                        <div class="mb-3 mb-4" style="display: flex;">
                            <input type="text" class="form-control mb-2" name="first_name" placeholder="First Name*">
                            <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                        </div>
                        <div class="mb-3 mb-4">
                            <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                        </div>
                        <div class="mb-3 mb-4">
                            <input type="tel" class="form-control mb-2" name="phone_number"
                                placeholder="Mobile Numbe* (+880)">
                        </div>
                        <div style="display: flex; position: relative; margin-top: 70px;">
                            <!-- selected study start -->
                            <label class="form-label mb-3 study_label_pos">Your preferred study destination</label>
                            <select name="study_degination" class="form-select mb-4">
                                <option class="study_select_padd" value="" selected="selected">
                                    Please select</option>
                                <option value="AU">Australia</option>
                                <option value="CA">Canada</option>
                                <option value="NZ">New Zealand</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="IE">Ireland</option>
                            </select>
                            <!-- selected study end -->
                            <!-- year selected start -->
                            <label class="control-label mb-3 when_study_label_pos">
                                When do you plan to study?</label>
                            <select name="years_select" class="form-select mb-4" id="">
                                <option value="" selected="selected">
                                    Please select</option>
                                <option value="Jul-2023">Jul 2023</option>
                                <option value="Aug-2023">Aug 2023</option>
                                <option value="Sep-2023">Sep 2023</option>
                                <option value="Oct-2023">Oct 2023</option>
                                <option value="Nov-2023">Nov 2023</option>
                                <option value="Dec-2023">Dec 2023</option>
                                <option value="Jan-2024">Jan 2024</option>
                                <option value="Feb-2024">Feb 2024</option>
                                <option value="Mar-2024">Mar 2024</option>
                                <option value="Apr-2024">Apr 2024</option>
                                <option value="May-2024">May 2024</option>
                                <option value="Jun-2024">Jun 2024</option>
                                <option value="Jul-2024">Jul 2024</option>
                                <option value="Aug-2024">Aug 2024</option>
                                <option value="Sep-2024">Sep 2024</option>
                                <option value="Oct-2024">Oct 2024</option>
                                <option value="Nov-2024">Nov 2024</option>
                                <option value="Dec-2024">Dec 2024</option>
                                <option value="Jan-2025">Jan 2025</option>
                                <option value="Feb-2025">Feb 2025</option>
                                <option value="Mar-2025">Mar 2025</option>
                                <option value="Apr-2025">Apr 2025</option>
                                <option value="May-2025">May 2025</option>
                                <option value="Jun-2025">Jun 2025</option>
                                <option value="Jul-2025">Jul 2025</option>
                                <option value="Aug-2025">Aug 2025</option>
                                <option value="Sep-2025">Sep 2025</option>
                                <option value="Oct-2025">Oct 2025</option>
                                <option value="Nov-2025">Nov 2025</option>
                                <option value="Dec-2025">Dec 2025</option>
                                <option value="Jan-2026">Jan 2026</option>
                                <option value="Feb-2026">Feb 2026</option>
                                <option value="Mar-2026">Mar 2026</option>
                                <option value="Apr-2026">Apr 2026</option>
                                <option value="May-2026">May 2026</option>
                                <option value="Jun-2026">Jun 2026</option>
                                <option value="Jul-2026">Jul 2026</option>
                                <option value="Aug-2026">Aug 2026</option>
                                <option value="Sep-2026">Sep 2026</option>
                                <option value="Oct-2026">Oct 2026</option>
                                <option value="Nov-2026">Nov 2026</option>
                                <option value="Dec-2026">Dec 2026</option>
                                <option value="Jan-2027">Jan 2027</option>
                                <option value="Feb-2027">Feb 2027</option>
                                <option value="Mar-2027">Mar 2027</option>
                                <option value="Apr-2027">Apr 2027</option>
                                <option value="May-2027">May 2027</option>
                                <option value="Jun-2027">Jun 2027</option>
                                <option value="Jul-2027">Jul 2027</option>
                                <option value="Aug-2027">Aug 2027</option>
                                <option value="Sep-2027">Sep 2027</option>
                                <option value="Oct-2027">Oct 2027</option>
                                <option value="Nov-2027">Nov 2027</option>
                                <option value="Dec-2027">Dec 2027</option>
                                <option value="Jan-2028">Jan 2028</option>
                                <option value="Feb-2028">Feb 2028</option>
                                <option value="Mar-2028">Mar 2028</option>
                                <option value="Apr-2028">Apr 2028</option>
                                <option value="May-2028">May 2028</option>
                            </select>
                            <!-- selected year end -->
                        </div>
                        <!-- form FA office start -->
                        <label class="control-label">Nearest FA Office</label>
                        <select id="" name="office_Name" class="form-select mb-4">
                            <option value="" selected="selected">
                                Please select</option>
                            <option value="Chattogram ">Chattogram </option>
                            <option value="Dhaka &ndash; Dhanmondi">Dhaka &ndash; Dhanmondi</option>
                            <option value="Dhaka &ndash; Gulshan">Dhaka &ndash; Gulshan</option>
                            <option value="Sylhet">Sylhet</option>
                        </select>
                        <!-- form FA office end -->
                        <!--form counselling start  -->
                        <label class="control-label">Preferred mode of counselling</label>
                        <select name="" class="form-select mb-4">
                            <option value="" selected="selected">
                                Please select</option>
                            <option value="In-person">In-person</option>
                            <option value="Virtual Counselling">Virtual Counselling</option>
                        </select>

                        <!-- form counselling end -->
                        <!-- form founded start -->
                        <label class="control-label">How would you fund your education?</label>
                        <select name="" class="form-select mb-4">
                            <option value="" selected="selected">
                                Please select</option>
                            <option value="01">Self-Funded</option>
                            <option value="02">Parents</option>
                            <option value="03">Seeking Scholarship</option>
                            <option value="06">Bank Loan</option>
                        </select>
                        <!-- form founded end -->

                        <div class="study_form_term_cond">
                            <label for="" class="form-label mb-2 mt-4">FA will not share your details with others
                                without your permission:</label>
                            <div class="check_box mb-4">
                                <input type="checkbox" class="styled-checkbox" name="check_box" />
                                <label class="study_term_cond_mar">
                                    I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank"
                                        href="#">privacy policy</a></label>
                            </div>
                            <div class="check_box mb-4">
                                <input type="checkbox" name="contact_method" id="contactMethod"
                                    class="styled-checkbox" />
                                <label class="study_term_cond_mar">Please contact me by phone, email or SMS to assist
                                    with my enquiry</label>
                            </div>
                            <div class="check_box mb-4">
                                <input type="checkbox" name="marketingPreferenceAcceptance"
                                    id="marketingPreferenceAcceptance" class="styled-checkbox" />
                                <label class="study_term_cond_mar">I would like to receive updates and offers from
                                    FA</label>
                            </div>
                        </div>
                        <button class="btn study_form_btm_btn">
                            <a href="#">Get Personal advice</a>
                        </button>
                    </form>
                </div>
            </div>
    </section>
    <!-- ========== End Section Study Part ========== -->
@endsection
