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
                        <h2>What are study abroad intakes?</h2>
                        <mark class="mb-2" style="font-size: 18px">
                            Know all about admissions and intakes abroad
                        </mark>
                    </div>
                    <p class="mb-2">
                        Unlike three intakes in the Bangladeshi universities (spring, summer and fall), colleges and universities abroad have various intakes in an academic year. Thus, when you apply for any of the universities in countries like Australia, Canada, Ireland, New Zealand or the UK and US, you can choose from more than one intake each year. For instance, if you missed the Spring intake this year, you can always try for the next intake in January instead of waiting for a complete one year.

                    </p>
                    <strong>What are the different kinds of intakes?</strong>
                    <p>
                        Most universities and colleges abroad offer two intakes – Fall and Spring. The fall intake usually starts in September (which ends in December) whereas as the Spring intakes begin in January (and ends in May). Certain universities and colleges also offer a minor intake in Summer that begins in April.
                    </p>
                    <p>
                        Intakes may vary on the basis of the program and institution. In certain institutions, intakes may also be referred to as terms or semesters. You must always check the official website of your preferred institution to confirm the available intake.
                    </p>
                    <strong>Wondering why these universities welcome students in two intakes?</strong>
                    <small>
                        Every university receives thousands of applications each year and it becomes difficult to accommodate a huge     crowd in one intake
                    </small>
                    <small>
                        The universities keep the option available for spring intake considering any constraints due to which a student might not be able to take admission in the fall intake
                    </small>
                    <strong>Confused about which intake to choose?</strong>
                    <p>
                        When choosing which intake to opt for, it is important to consider the availability of your preferred program, your academic records, entrance test scores, acceptance rates, job opportunities and your readiness on joining the course. We recommend you to start with your applications at least 10-12 months before the date of commencement of your program. For the Fall semester, ensure to have your score by April and for Spring, start no later than August.
                    </p>
                    <strong>Let’s compare the two intakes</strong>

                    <div class="table-responsive">
                        <table class="table table-secondary table-bordered">
                            <thead>
                                <tr>
                                    <th>Basic</th>
                                    <th>Spring Intake</th>
                                    <th>Fall Intakes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">University</td>
                                    <td>This is available in every university</td>
                                    <td>
                                        This intake may or may not be available for some and you might need to check with the university
                                    </td>
                                </tr>
                                <tr class="">
                                    <td scope="row">Acceptance Rate</td>
                                    <td>You might face severe competition as many students prefer this intake and chances of your application being accepted are minimal</td>
                                    <td>
                                        You might face severe competition as many students prefer this intake and chances of your application being accepted are minimal
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <strong>Which intake do Bangladeshi students prefer?</strong>
                        <p class="my-2">
                            Most Bangladeshi students opt for the September intake since it works in line with the completion of school or under-graduation and all the courses are started fresh during that time in abroad. Students going for research programs often prefer the Fall/September intake since many professors choose to start their research in the beginning of the year and thus acquiring an internship or assistantship is easier in this intake than the Spring/January intake.
                        </p>
                        <strong>Explore the upcoming intakes in top study abroad destinations</strong>
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
                        <a href="{{ route('studyabroadfaq') }}">
                            <div class="study_next_item_overlay">
                                <i class="fa-regular fa-comments study_next_icon"></i>
                                <p> Here are answers to your most frequently asked questions.</p>
                                <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <!-- ===study form aboard item show bar start=== -->
                        <div class="study_form_item_show_js">
                            <a href="{{ route('fastudyguide') }}">
                                <div class="study_next_item_overlay">
                                <i class="fa-solid fa-handshake-angle study_next_icon"></i>
                                        <p>Here’s a step-by-step guide to help you get started with your journey abroad.</p>
                                    <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
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
