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
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="why_fa.html" class="text-white">
                        Top 6 Study Abroad Destinations
                    </a>
                </li>
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
                        <h2 class="my-3">Study Abroad - Courses, Exams, Colleges, Free Counseling</h2>
                        
                        <strong>1. Research</strong><br>
                        <a href="{{ route('freevirtualconsul') }}" class="btn btn-sm bg-success text-white mt-2">Get Free Assistance From Our Experts</a>
                        <p class="my-3">One final word of advice – don’t trust everything you read online. Some reviews from other students might be influenced by a single negative personal experience or choosing a course that wasn’t right for them. It doesn’t always mean you will feel the same way. FA can ensure you get accurate and unbiased advice.</p>
                        <a href="{{ route('findcourse') }}" class="text-info mb-3" style="font-size: 16px">
                            Use the course search on this website to start your search.
                        </a><br>
                        <strong>2. Speak with one of our FA counsellors</strong>
                        <p class="my-2">
                            When you’re ready, make an appointment with an FA Counsellor. Our counsellors are professionally certified and many have been international students themselves. They’re a friendly face and wealth of first-hand professional and personal experience from different study locations all over the world.
                        </p>
                        <p>
                            Bring your wish list and course preferences along with you to your appointment as a starting point. Your counsellor will work through all the big and small details to ensure the best possible fit between you, your future university and your area of study.
                        </p>
                        <a href="{{ route('enquiryform') }}" class="text-info mb-3" style="font-size: 16px">Get in touch now to set up an appointment.</a><br>
                        <strong class="my-3">3. Make you application</strong>
                        <p class="mb-4">
                            After you’ve chosen your course and university or school, it’s time to apply. Your FA counsellor will support your university and course applications. We take our job very seriously and follow the strictest legal and ethical standards. Your counsellor will personally contact your chosen university or school to ensure they convey the full picture to help improve your chances of acceptance.
                        </p>
                        <strong>4. Offer acceptance</strong>
                        <p>
                            Once your application is received, the university or school will assess it thoroughly and notify you of the result. It can take up to a few weeks (or longer for postgraduate applications) for your application to be processed.
                        </p>
                        <p class="my-2">
                            If your application is successfully selected, you’ll receive a letter of offer and an acceptance form. Before you accept the offer, go through it carefully with your counsellor to check for any conditions that may apply.
                        </p>
                        <p class="mb-4">
                            If you are accepted for more than one course or school, your counsellor will help you decide on the best option for you.
                        </p>
                        <strong class="my-3">5. Student visa</strong>
                        <p class="mb-4">
                            After accepting the letter of offer the most important task is to apply for your student visa. Since each country has its own set of formalities to fulfill, your FA counsellor will guide you through the visa application process and help prepare the documents needed for your submission.

                        </p>
                        <strong class="mt-4">Ready to start your global career? We're here to help.</strong>
                        <p class="mt-2">We work with you to turn your plan to study overseas into a launch pad for professional success and personal growth. FA
                        combines experience and technology to help you make the most informed decision possible.</p>

                        <p class="mt-2">We partner with more than 650 leading universities, schools and colleges across Australia, Canada, New Zealand, the
                        United Kingdom and the United States. This means we have access to a database of more than 180,000 courses and programs
                        – so we are sure to find your best fit.</p>
                        {{-- <strong class="mt-4">Know about the visa requirements</strong> --}}
                        <p class="mt-2">Congratulations – you’re off on a huge adventure. There will be many minute, yet important to-do things you need to consider before flying abroad for which your FA counsellor will guide your way. This will include matters such as exchanging money, insurance, accommodation, SIM cards, opening a bank account, country rules and adapting to new culture. We also host regular pre-departure sessions throughout the year to help prepare you for student life in your new country.</p>

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
