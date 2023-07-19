@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section explore countries  ========== -->
    <section id="why_fa_banr_part">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html" class="text-white">Home
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                </li>
                {{-- <li class="breadcrumb-item active" aria-current="page">
                    <a href="why_fa.html" class="text-white">
                        Top 6 Study Abroad Destinations
                    </a>
                </li> --}}
            </ol>
        </nav>
    </section>
    <!-- ========== End Section explore countries ========== -->
    <!-- =============event found part start======== -->
    <section id="why_fa_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-7">
                    <div class="text study_title_marg">
                        <h2 class="my-3">Want to study internationally? Here’s six reasons to choose FA.</h2>
                        <p class="my-2">
                            Study overseas with someone who knows the way
                        <p>
                            FA is the global leader in international education. We help international students study in English speaking countries. Our success comes from connecting students with the right course in the right university or institution and the right country.
                        </p>
                        <strong>Are you really ready to study overseas?</strong><br>
                        <p class="my-3">We've been doing it for over 50 years creating a huge network of opportunity with offices in 22 countries. Our extensive network of approachable experts helps you identify and secure the university or college where you can thrive.</p>
                        <strong>Ready to start your global career? We're here to help.</strong>
                        <p class="my-2">
                            Students like you come to us for advice and help on everything from choosing a study country, university or course as well as course application assistance. We also provide advice on accommodation options, visa applications and even link you up with other support partners such as education loan providers, property rental agents and student/alumni associations.
                        </p>
                        <strong class="my-4">Which countries can I choose from?</strong>
                        <p>
                            We work with you to turn your plan to study abroad into a launch pad for professional success and personal growth. FA combines experience and technology to help you make the most informed decision possible.

                        </p>
                        <strong class="my-3">1. We put you first.</strong>
                        <p class="mb-4">
                            Need help finding the best course, submitting your university application or guiding you through visa requirements? Our extensive network of approachable counsellors help you identify and secure the university or college where you can thrive. Your dedicated FA counsellor will work with you closely, supporting you and your family, throughout your study abroad journey.

                        </p>
                        <a href="{{ route('chooisecourse') }}" class="my-4">Learn more about our course advice</a>
                        <strong class="my-4">2. Approachable international education experts.</strong>
                        <p class="my-2">
                            Many FA counsellors were international students too. All of them are ready to do whatever it takes to help you find the right course and country. They're international education experts, ready to go the extra mile and a friendly face who've 'been there and done that' and willing to share what they learned. Our counsellors are the greatest.
                        </p>
                        <a href="{{ route('enquiryform') }}" class="my-3">Speak to an FA counsellor about the best fit for you</a>
                        <strong class="mb-4">
                            3. Supported every step of the way.
                        </strong>
                        <p class="mb-4">
                           Our support doesn't end when you receive your university acceptance letter. At FA, we're dedicated to ensuring you feel supported at every stage of your study journey. We offer a full suite of services, covering English language testing (IELTS), visas and pre-departure advice. Our services are continually evolving to support our students through to graduation and beyond.
                        </p>
                        <a href="{{ route('whatwedo') }}" class="mt-4">Find out about our student support</a>

                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="study_aus_item_res study_aus_item_width text-center">
                                <h3>What Our Customers Are Saying</h3>
                                <h4 class="my-2">534+ reviews</h4>
                                <div class="study_aut_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <h5 class="mt-2">4.4/5</h5>
                                <button class="btn btn-warning study_aus_btn_col mt-3">
                                    <a style="font-size: 20px;" href="{{ route('signupfree') }}">Help me study aboard</a>
                                </button>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="study_aus_item_res study_aus_item_width text-center">
                                <h3 class="text-info">Great support!!</h3>
                                <h6 class="my-2">Amazing place for educational
                                    counseling. I strongly recommend FA for your study partner.
                                    especially, Afroz Jahan
                                    Fredous (Apu) helped me a lot with the application process and explained step by step what
                                    would be needed. I
                                    highly
                                    appreciate Afroz Jahan Ferdous (Apu) for her excellent service.</h6>
                                <strong class="mt-3">Student from Gulshan, Dhaka</strong>
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
@endsection
