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
                        <h2 class="my-3">Ready to apply to study abroad? We answer your questions.</h2>
                        <p class="my-2">
                            We get it – studying overseas is a big decision. It’s not every day you fly across the world to wander the hallowed halls of a Russell Group university or join a study tour to the Great Barrier Reef. But for us, it’s our everyday. Let’s just say we know what international students really want: a balance of a quality education and amazing life experiences.
                        </p>
                        <p>
                            Here are the answers to some of the most common questions we get from students just like you.
                        </p>
                        <strong>Are you really ready to study overseas?</strong><br>
                        <p class="my-3">However, it's a great idea to talk openly about any concerns you have before applying with your family as well as one of our counsellors so that you are confident and ready to take the next step. Talking to other friends or teachers who have also studied overseas will also give you some valuable tips and real-life advice to consider.</p>
                        <strong>What are the services provided by FA?</strong>
                        <p class="my-2">
                            Students like you come to us for advice and help on everything from choosing a study country, university or course as well as course application assistance. We also provide advice on accommodation options, visa applications and even link you up with other support partners such as education loan providers, property rental agents and student/alumni associations.
                        </p>
                        <strong class="my-4">Which countries can I choose from?</strong>
                        <p>
                            We represent universities, schools and colleges in Australia, Canada, New Zealand, the United Kingdom and the United States.
                        </p>
                        <strong class="my-3">How do I apply?</strong>
                        <p class="mb-4">
                            Our experienced counsellors will help you compile your application and certify the supporting documents. Your counsellor will then submit your application on your behalf to your university or school of choice...
                        </p>
                        <strong class="my-4">Do I need to make an appointment to meet an FA counsellor?</strong>
                        <p>
                            You can schedule an appointment with one of our counsellors by completing an online enquiry or giving us a call on +8801316587380 or +880example . We also welcome walk-ins on weekdays between 10.30am and 5.30pm (6.30pm on Thursdays) and 10.00am to 2.00pm on Saturdays.
                        </p>
                        <strong class="my-4">What certificates and other documents should I bring to my appointment?</strong>
                        <p class="my-2">
                            You’ll need to bring documents to verify your identity (valid passport) and your certificates from GCE ‘O’ levels (original results/transcripts) onwards. This will help your counsellor streamline your application.
                        </p>
                        <strong class="my-3">Which universities and schools do you partner with?</strong>
                        <p class="mb-4">
                            FA represents more than 600 universities, colleges and schools globally, which is the largest institution network available in Bangladesh. You can apply to any of the 38 Australian public universities (including all Group of Eight universities), all eight New Zealand universities, a majority of UK universities (including the Russell Group) and many quality US and Canadian schools.
                        </p>
                        <strong class="my-3">Do I have to pay for a UCAS application for UK universities?</strong>
                        <p class="mb-4">
                           You can avoid paying any save on the UCAS application fees when you apply for a course in UK via FA. Discuss this with your FA counsellor.
                        </p>
                        <strong class="mt-4">How long do applications take to process?</strong>
                        <p class="mt-2">It takes four to six weeks to process a course application. It may take longer if it is during peak period or a holiday season. We know this can feel like a really long wait! We'll keep communicating with you during this time to help you keep calm and hope for the best.</p>

                        <strong class="mt-4">How much does FA charge for its services?</strong>
                        <p class="mt-2">FA doesn’t charge any agent fees for applications, so you’ll get all the convenience at no cost. Many universities and schools also waive their application fees when you apply through us.</p>
                        <strong class="mt-4">Where is the FA Bangladesh office?</strong>
                        {{-- <strong class="mt-4">Know about the visa requirements</strong> --}}
                        <p class="mt-2">Students can walk in to any of our three offices in Gulshan, Dhanmondi and Chittagong. Here are the details:</p>
                        <strong class="mt-4">Gulshan:</strong>
                        <ul>
                            <li></li>
                            <li>Hamid Tower 4th Floor, Level 5, Gulshan Circle 2 Dhaka – 1212, Bangladesh</li>
                            <li>Phone: +88 01968 782782, +88 01316587380</li>
                            <li>Email: infobd@idp.com</li>
                            <li>Timings: Sunday - Thursday - 9.00 AM - 5.30 PM</li>
                            <li>Dhanmondi:</li>
                            <li>Bikalpa Tower, 4th Floor, House 74, Road 5/A, Satmasjid Road, Dhanmondi, Dhaka 1209, Bangladesh</li>
                            <li>Phone:  +88 09612333888, +88 01970066233</li>
                            <li>Email: infobd@idp.com</li>
                            <li>Timings:  Sunday - Thursday - 9.00 AM - 5.30 PM</li>
                            <li>Chittagong:</li>
                            <li>Rahima Center, (3rd Floor), 1839 CDA Avenue, Nasiarabad, Chittagong.(Besides Sanmar)</li>
                            <li>Phone:  01316587380, 01316587380</li>
                            <li>Email: <a href="mail:example@gmail.com">example@gmail.com</a></li>
                            <li>Timings:  Sunday - Thursday - 9.00 AM - 5.30 PM</li>
                        </ul>

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
