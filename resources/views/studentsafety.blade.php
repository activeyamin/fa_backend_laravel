@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start what we do start  ========== -->
    <section id="student_health_banner_part2">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-left: 35px;">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home <i
                            class="fa-solid fa-angle-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('studentsafety') }}" class="text-white">
                        Get the right student health cover while studying abroad
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
                <div class="col-lg-8">
                    <div class="student_text student_safety_list_style px-3">
                        <h2 class="mb-3">Get the right student health cover while studying abroad</h2>
                        <h6 class="my-3">Congratulations! You’ve made a great decision to study abroad. We’re here to make the process easy, finding the best cover to suit your needs.</h6>
                        <strong>Contact your university security service</strong>
                        <h6 class="mb-3 mt-2">All campuses in Australia have a special body to ensure the safety of their international students. So, as the first
                        step, check if your school offers one and keep the security officer’s number saved in your phone.</h6>
                        <h6 class="my-4">Various universities and schools also offer services like shuttles and security escorts to drop you to your
                        accommodation or stations after hours. Some go a step further and have their own mobile apps with a direct line for
                        students to get in touch with the security.</h6>

                        <h6 class="my-4">If, at any point of time, you feel unsafe in and around you campus or accommodation, don’t hesitate to get in touch with
                        your college authorities.</h6>
                        <strong class="my-4">Emergency contacts</strong>
                        <h6 class="mb-4 mt-2">If you happen to face any emergency, call the toll free number 000. This is a common number that can be used for fire,
                        police or ambulance.</h6>

                        <h6 class="mt-4 mb-2">Some other emergency contact numbers you should have saved are:</h6>
                        <ul>
                            <li>SES assistance in floods and storms: 132 500</li>
                            <li>Police attendance: 131 444 (all states except Victoria)</li>
                            <li>International incident emergency helpline: 1300 555 135 (within Australia)</li>
                            <li>Outside Australia– external site: +61 2 6261 3305</li>
                        </ul>
                        <strong class="my-4">It’s important to stay alert</strong>
                        <strong class="my-4">When outdoors</strong>
                        <ul>
                            <li>Avoid travelling alone especially during the night. Pre-book a taxi or have your friend drop you. Carry sufficient emergency cash</li>
                            <li>Do not carry your passport when you go out exploring. If you do not have a permanent place to live, contact your university’s international support team to get you campus storage facilities</li>
                            <li>Never carry an inordinate amount of cash with you. Use cards and online banking</li>
                            <li class="mb-4">Australian laws may differ from your home country. So, learn the laws before to avoid break them unintentionally</li>
                        </ul>
                        <strong>Public transport</strong>
                        <h6 class="mb-3 mt-2">The public transportation system is Australia is particularly well developed and convenient to use especially in the
                        urban and metro areas. But it’s always better to be alert:</h6>
                        <ul>
                            <li>Never board an isolated bus or train or metro</li>
                            <li>Familiarise yourself with transport time tables especially if you travel at night. Stick to well-lit routes</li>
                            <li>Board a carriage closest to the driver or the guard to avoid untoward incidents</li>
                            <li class="mb-4">If you are in a carriage with only one other person and it makes you uncomfortable, move on to the next compartment</li>
                        </ul>
                        <strong class="my-3">Taxis</strong>
                        <ul>
                            <li>Know the address of your destination</li>
                            <li>Explain to the driver the route you are comfortable with and if he deviates, politely remind</li>
                            <li>Ask the driver to drop you off near your house if you don’t want to reveal your exact location</li>
                        </ul>
                        <h6 class="my-4">Lastly, remember the Internet too can be dangerous. So be wise about how you conduct yourself both online and offline.</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event_found_item">
                        <form action="#" method="post" class="form-control p-4">
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
                                <a href="#">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- <div class="title">
                    <h2>Your next steps</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="study_next_item text-center" style="height: 320px;">
                            <a href="study_next_page.html">
                                <div class="study_next_item_overlay">
                                    <i class="fa-solid fa-child-reaching study_next_icon"></i>
                                    <p>Australia is known for its research centric teaching. Find your best fit!</p>
                                    <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="study_next_item text-center" style="height: 320px;">
                            <div class="study_form_item_show_js">
                                <a href="#">
                                    <div class="study_next_item_overlay study_form_item_show_js">
                                        <i class="fa-solid fa-user-graduate study_next_icon"></i>
                                        <p>Understand the US education system before you apply.</p>
                                        <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- =============event found part end======== -->
    <!-- =============event found part start======== -->
    <section id="student_health_recomanded_part">
        <div class="container">
            <h2>Recommended articles</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row study_box_shadow mt-4">
                        <div class="col-sm-6 col-md-6 col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health1.jpg" alt="student_health1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">How to buy OSHC cover</a>
                                <p class="my-3">FA gives you the freedom to choose. It's easy to buy Overseas Student
                                    Health Cover (OSHC) online yourself, or you can
                                    do it with the help of an FA counsellor</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-4">
                        <div class="col-sm-6 col-md-6 col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health2.jpg" alt="student_health2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">How to use OSHC cover</a>
                                <p class="my-3">When you arrive in Australia, you may need to activate your OSHC policy
                                    and you can begin using it (but hopefully you
                                    won't need to!). Here are some tips of making a claim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-4">
                        <div class="col-sm-6 col-md-6 col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health3.jpg" alt="student_health3.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Understanding the Australian healthcare system</a>
                                <p class="my-3">We're here to help you understand the Australian healthcare system and
                                    how to navigate it. A little knowledge will help
                                    you to be confident you are getting the best healthcare services, when you need
                                    them.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-4">
                        <div class="col-sm-6 col-md-6 col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health4.jpg" alt="student_health4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Health and safety tips</a>
                                <p class="my-3">Australia is a safe and healthy place to live, and there's a lot to see
                                    and do. You will probably be studying in a town
                                    or city, but you may also want to experience the wild beauty of its oceans,
                                    mountains, rivers and the famous 'outback'
                                    or 'bush'.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============event found part end======== -->
    <!-- =============event found part start======== -->
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
                                <input type="text" class="form-control form_input_marg mb-2" name="first_name"
                                    placeholder="First Name*">
                                <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="tel" class="form-control mb-2" name="phone_number"
                                    placeholder="Mobile Numbe* (+880)">
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
                                        I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank"
                                            href="#">privacy
                                            policy</a></label>
                                </div>
                                <div class="check_box mb-4" style="display: flex;">
                                    <input type="checkbox" name="contact_method" id="contactMethod"
                                        class="styled-checkbox" />
                                    <label class="study_term_cond_mar">Please contact me by phone, email or SMS to
                                        assist
                                        with
                                        my enquiry</label>
                                </div>
                                <div class="check_box mb-4">
                                    <input type="checkbox" name="marketingPreferenceAcceptance"
                                        id="marketingPreferenceAcceptance" class="styled-checkbox" />
                                    <label class="study_term_cond_mar">I would like to receive updates and offers
                                        from
                                        FA</label>
                                </div>
                            </div>
                            <button class="btn">
                                <a href="#">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============event fount part end======== -->
    @endsection

