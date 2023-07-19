@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section explore countries  ========== -->
    <section id="why_study_abroad_banner">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home <i class="fa-solid fa-angle-right"></i></a></li>
                    {{-- <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('aboutusfa') }}" class="text-white">
                            Top 6 Study Abroad Destinations
                        </a>
                    </li> --}}
                </ol>
            </nav>
        </div>
    </section>

    <!-- ========== End Section explore countries ========== -->
    <!-- =============explore part start======== -->
    <section id="study_aboard_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-7">
                    <div class="title study_title_marg">
                        <h2 class="mb-3">Course Advice</h2>
                        <p class="mb-2">
                            Let’s help you find a course that suits your career goals
                        </p>
                    </div>
                    <p class="mb-2">
                        Whether you’re still considering possible courses, tossing up between two fields of study or have no idea what kind of career you want, we can help you find the best course and coordinate your university application.

                    </p>
                    <div class="row study_box_shadow">
                        <div class="col-lg-12 p-0">
                            <div class="study_aboard_bg_item  p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}/images/our_students.jpg" alt="our_students">
                                </div>
                                <div class="our_student_video_icon">
                                    <a class="my-video-links" data-autoplay="true" data-vbtype="video" href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i class="fa-solid fa-play"></i></a>
                                </div>
                                <div class="student_storie_title">
                                    <strong>FA and Trending Coursese</strong><br>
                                    <span>Studying via FA Institute</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('chooisecourse') }}">Choosing your course</a>
                    <strong class="my-3">1. Let's find your best fit </strong>
                    <p class="my-3">
                        With so many courses and universities to choose from, deciding where and what to study abroad can be a daunting task. Don't worry, we are here to hand-hold you during the entire process. Our teams are backed by a sophisticated knowledge matching system that contains all the latest information on our partner institutions, including schools, English language colleges, vocational colleges, and universities.
                    </p>
                    <strong>2. We work on your dream goals</strong>
                    <p class="my-3">
                        It may seem obvious, but your education, experiences and topics of interest are the first step to finding your dream course. Also, your chosen course should put you on a path to a profession you’ll love for life. Your FA counsellor will work with you to shortlist a range of courses and dive down deep into the detail of course handbooks and subject choices.
                    </p>
                    <a class="my-2" href="{{ route('chooisecourse') }}">Struggling to choose a course? find the right one.</a><br>
                    <strong>3. Consider the timelines and budgets</strong>
                    <p class="my-2">
                        Knowing how much a course will cost and how much you can afford to spend on your education are important factors in choosing where and what to study.
                    </p>
                    <p class="my-3">Carefully consider the academic year you wish to enroll in and the intake you want to apply for. Remember, every country has its own intake and you need to time your application process accordingly. Here's a quick view of the major intakes in the most popular destinations.</p>
                    <div class="table-responsive">
                        <table class="table table-secondary table-bordered">
                            <thead>
                                <tr>
                                    <td colspan="50" class="text-center">Major intakes of top destinations</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Australia</td>
                                    <td>Semester 1 <hr> Semestar 2</td>
                                    <td>Starts late February/early March to late May/early June <hr>
                                        Starts late July/early August through to November
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">New Newealand</td>
                                    <td>Semester 1 <hr> Semestar 2</td>
                                    <td>From February to June <hr>
                                        From July to November
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">UK</td>
                                    <td>Team 1 <hr> Team 2 <br> <hr> Team 3 <hr></td>
                                    <td>From January to April <hr>
                                        From April to June <hr>
                                        From April to June <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Canada</td>
                                    <td>Fall 1 <hr> Spring 2 <br> <hr> Summer 3</td>
                                    <td>Primary intake starts in August/September <hr>
                                        From April to June <hr>
                                        From April to June
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>The above dates are indicative. Always check for exact dates with the university or college you are applying to.</p>
                        <p class="my-3">Your FA counsellor will also guide you through the practicalities of when, where and how you can apply to study and commence your course in these destinations.</p>
                        <strong>4. Course experience and campus life.</strong>
                        <p class="my-3">The environment and social culture of a university are important factors in determining how satisfied and happy you’ll be in your course. Every student’s preferences are different. You may thrive in a lively city campus, or you might prefer a smaller, rural location. You might want a campus with lots of cultural diversity or one with active clubs and societies. We’ll take all of this into account as we help you select your choice.</p>
                        <h4 class="my-3">Applying for your course and accepting the offer</h4>
                        <strong>1. Apply with confidence, we’ve got your back</strong>
                        <p class="my-3">
                            We take the hassle out of submitting your university and school applications. Your designated FA counsellor will submit your applications on your behalf.
                        </p>
                        <p class="mb-2">
                            Our team will also help with course application documents, compile your applications, certify supporting documents and send your application directly to your chosen university or institution.
                        </p>
                        <strong>2. Application assessment and acceptance</strong>
                        <p class="my-3">
                            Most universities and institutions respond within 2-6 weeks of your application being submitted, and if they offer you a place in a course, you will receive an official offer letter. You can also attend our various education fairs and seminars where representatives from top universities area available to interact directly and assess your eligibility for the course on-the-spot. If you would like to be updated on these events, keep checking our latest updates on events in your city.
                        </p>
                        <strong>3. Acceptance and payment, the final steps</strong>
                        <p class="my-3">
                            If there are no conditions on your offer letter that you need to meet, you can accept the offer immediately. Examples of conditions that could be specified include submission of a new IELTS test result, your academic transcript of a recently completed study, or certain certified documents.
                        </p>
                        <p class="mb-3">
                            If your tuition fee payment is in the form of a bank draft, make it payable to your institution and we can help courier it for you.
                        </p>
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
            <div class="title">
                <h5>Your next steps</h5>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <a href="{{ route('whatwedo') }}">
                            <div class="study_next_item_overlay">
                                <i class="fa-solid fa-graduation-cap study_next_icon "></i>
                                <p>We’re the global leaders. Find out why we are the best at what we do.</p>
                                <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <!-- ===study form aboard item show bar start=== -->
                        <div class="study_form_item_show_js">
                            <a href="{{ route('getpersonaladvice') }}">
                                <div class="study_next_item_overlay">
                                    <i class="fa-solid fa-headphones-simple study_next_icon study_form_item_show_js"></i>
                                        <p>We’ll help you achieve your study abroad dreams. Find out how?</p>
                                    <i class="fa-solid fa-angle-right study_next_arro_icon study_form_item_show_js"></i>
                                </div>
                            </a>
                        </div>
                        <!-- ===study form aboard item show bar end=== -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============explore part end======== -->
@endsection
