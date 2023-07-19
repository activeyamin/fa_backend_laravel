@extends('layouts.frontend.frontend_master')
@section('frontend_content')

    <!-- ========== Start what we do start  ========== -->
    <section id="student_benefit_banner_part">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-left: 35px;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-dark">Home <i
                    class="fa-solid fa-angle-right"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('studentbenefitcard') }}" class="text-dark">
                        Student Benefit?
                    </a>
                </li>
            </ol>
        </nav>
    </section>

    <!-- ========== End what we do end ========== -->
    <!-- =============event found part start======== -->
    <section id="study_aboard_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary my-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-7">
                    <div class="student_text">
                        <h2 class="mb-3">FA ISIC Student Benefit </h2>
                        <h5 class="my-4">You want great student discounts. We have the .</h5>
                        <p>The FA ISIC Student benefit  unlocks thousands of special offers for full-time international students. And best of
                        all, it’s free.</p>
                        <h5 class="my-4">Explore life beyond the classroom for less</h5>
                        <p class="my-4">The FA ISIC  lets you take advantage of discounts on travel, shopping, movies, entertainment, tourist attractions
                        and dining with more than 5,000 companies across Australia and New Zealand.</p>
                        <ul class="student_benefit_list">
                            <li>Up to 20% off many cafes, bars and restaurants</li>
                            <li>Up to 40% off flights and train tickets</li>
                            <li>Special offers from theme parks and attractions</li>
                            <li>$25 off your first ride with Uber</li>
                            <li>Movie tickets from $11.50</li>
                            <li>5% off groceries with Woolworths supermarket gift cards</li>
                        </ul>
                        <b>The FA ISIC  is free to students using any of these FA services:</b>
                        <ul class="student_benefit_list mt-4">
                            <li>Accommodation Services</li>
                            <li>Overseas Student Health Cover</li>
                            <li>FA Helpline</li>
                            <li>Guardianship and Welfare Services</li>
                        </ul>
                    </div>
                    <div class="title">
                        <h2>Your next steps</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="study_next_item text-center" style="height: 320px;">
                                <a href="{{ route('findcourse') }}">
                                    <div class="study_next_item_overlay">
                                        <i class="fa-solid fa-plane-circle-check study_next_icon"></i>
                                        <p>Apply to a range of scholarships, funds and bursaries provided by the Australian...</p>
                                        <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_next_item text-center" style="height: 320px;">
                                <!-- ===study form aboard item show bar start=== -->
                                <div class="study_form_item_show_js">
                                    <a href="{{ route('getpersonaladvice') }}">
                                        <div class="study_next_item_overlay study_form_item_show_js">
                                            <i class="fa-solid fa-headphones-simple study_next_icon study_form_item_show_js"></i>
                                            <p>Want to know more contact our expert counsellors now!</p>
                                            <i class="fa-solid fa-angle-right study_next_arro_icon study_form_item_show_js"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- ===study form aboard item show bar end=== -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="event_found_item">
                        <form action="#" method="post" class="form-control p-4">
                            <div class="title study_aboard_form_title">
                                <h2>Interested in studying abroad with FA?</h2>
                                <p>Enter your details below and we'll call you back when it suits you.</p>
                            </div>
                            <div class="mb-3 mb-4" style="display: flex;">
                                <input type="text" class="form-control form_input_marg mb-2" name="first_name" placeholder="First Name*">
                                <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="tel" class="form-control mb-2" name="phone_number" placeholder="Mobile Numbe* (+880)">
                            </div>
                            <div>
                                <!-- selected study start -->
                                <label class="form-label">Your preferred study destination</label>
                                <select name="study_degination" class="form-select">
                                    <option class="study_select_padd" value="" selected="selected">
                                        Please select</option>
                                    <option value="AU">Australia</option>
                                    <option value="CA">Canada</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="IE">Ireland</option>
                                </select><br>
                                <!-- selected study end -->
                                <!-- year selected start -->
                                <label class="control-label mb-3">
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
                                <label for="" class="form-label mb-2 mt-4">FA will not share your details with
                                    others
                                    without
                                    your permission:</label>
                                <div class="check_box mb-4">
                                    <input type="checkbox" class="styled-checkbox" name="check_box" />
                                    <label class="study_term_cond_mar">
                                        I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy
                                            policy</a></label>
                                </div>
                                <div class="check_box mb-4" style="display: flex;">
                                    <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox" />
                                    <label class="study_term_cond_mar">Please contact me by phone, email or SMS to
                                        assist
                                        with
                                        my enquiry</label>
                                </div>
                                <div class="check_box mb-4">
                                    <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                        class="styled-checkbox" />
                                    <label class="study_term_cond_mar">I would like to receive updates and offers
                                        from
                                        FA</label>
                                </div>
                            </div>
                            <button class="btn">
                                <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============event fount part end======== -->
    <!-- =============event fount part start======== -->
    <section id="student_benefit_show_form">
        <div class="container">
            <div class="row student_benefit_form_center">
                <div class="col-lg-6">
                    <!-- <i class="fa-regular fa-circle-xmark student_benefit_form_close"></i> -->
                    <i class="fa-solid fa-circle-xmark student_benefit_form_close"></i>
                    <div class="event_found_item">
                        <form action="#" method="post" class="form-control p-4 student_benefit_form_scroll">
                            <div class="title study_aboard_form_title">
                                <h2>Interested in studying abroad with FA?</h2>
                                <p>Enter your details below and we'll call you back when it suits you.</p>
                            </div>
                            <div class="mb-3 mb-4" style="display: flex;">
                                <input type="text" class="form-control mb-2" name="first_name" placeholder="First Name*">
                                <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="tel" class="form-control mb-2" name="phone_number" placeholder="Mobile Numbe* (+880)">
                            </div>
                            <div>
                                <!-- selected study start -->
                                <label class="form-label">Your preferred study destination</label>
                                <select name="study_degination" class="form-select">
                                    <option class="study_select_padd" value="" selected="selected">
                                        Please select</option>
                                    <option value="AU">Australia</option>
                                    <option value="CA">Canada</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="IE">Ireland</option>
                                </select><br>
                                <!-- selected study end -->
                                <!-- year selected start -->
                                <label class="control-label mb-3">
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
                                <label for="" class="form-label mb-2 mt-4">FA will not share your details with
                                    others
                                    without
                                    your permission:</label>
                                <div class="check_box mb-4">
                                    <input type="checkbox" class="styled-checkbox" name="check_box" />
                                    <label class="study_term_cond_mar">
                                        I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy
                                            policy</a></label>
                                </div>
                                <div class="check_box mb-4" style="display: flex;">
                                    <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox" />
                                    <label class="study_term_cond_mar">Please contact me by phone, email or SMS to
                                        assist
                                        with
                                        my enquiry</label>
                                </div>
                                <div class="check_box mb-4">
                                    <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                        class="styled-checkbox" />
                                    <label class="study_term_cond_mar">I would like to receive updates and offers
                                        from
                                        FA</label>
                                </div>
                            </div>
                            <button class="btn">
                                <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============event fount part end======== -->
@endsection
