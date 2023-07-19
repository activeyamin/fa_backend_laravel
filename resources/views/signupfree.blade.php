
@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section personal banner part  ========== -->
    <section id="personal_banner_part">
        <div class="container">
            <div class="personal_img">
                <img style="width: 100%;" src="{{ asset('frontend_assets') }}./images/banner_signup_info.jpg" alt="per_info_banner">
            </div>
            <p class="my-4 text-center"><b>Looking to study in the UK?</b> FA Education and Study Group are trusted partners that provide comprehensive support for
                international students. FA offers guidance in choosing the right institution, while Study Group offers pathway programs
                for university entry. Benefit from their expertise and <b>make your UK study dreams a reality.</b></p>
            <div class="row" style="justify-content: center; align-items: center;">
                <div class="col-lg-8">
                    <div class="event_found_item mb-4">
                        <form action="#" method="post" class="form-control p-4">
                            <div class="title study_aboard_form_title">
                                <h2>Register for the event</h2>
                                <h4 class="mb-4">Fill out the information below, then click Next to continue.</h4>
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


                            <button class="btn">
                                <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                    <hr>
                    <h5>Program Scheduled:</h5>
                    <strong>FA Chattogram Office - 5th June 2023, 12PM to 4PM</strong>
                    <hr>
                    <p>The event is free to attend!</p>
                    <p class="text-danger">Note: Please bring your educational certificates, copies of your passport, and copies of your job documentation (if any)</p>
                    <strong>Additional Information:</strong>
                    <p>FA is a global company that offers services to support people wishing to study abroad. By providing your information to
                    us, you understand that your data will be transferred outside of your country of residence to allow us to provide our
                    services to you. To find out more about how FA manages your personal information you can read our privacy policy
                    here.You can withdraw your consent easily – here’s how: By unsubscribing from one of our emails. Making a request to
                    privacyofficer@FA.com</p>
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
                            <label class="study_term_cond_mar">I would like to receive updates and offers from FA</label>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section find personal banner part ========== -->
@endsection
