@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    @yield('find_study_common_content')
    <!-- ========== Start Section banner bottom Part ========== -->
    <section id="banner_bottom_part">
        <div class="container">
            <div class="row banner_btm_main">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="banner_btm_item">
                        <a href="{{ route("computingit") }}">
                            <div class="banner_icon_font">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <h5>Searches</h5>
                            <h5 class="mt-2">Computing and IT.</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="banner_btm_item">
                        <a href="{{ route('comeandsee') }}" class="banner_icon_font">
                            <i class="fa-solid fa-building-columns"></i>
                            <h5 class="my-2">Come and see us</h5>
                            <h6>Got questions? We can help. Book a free appointment with one of our expert teams.</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="banner_btm_item">
                        <a href="{{ route('whyfa') }}" class="banner_icon_font">
                            <i class="fa-solid fa-globe"></i>
                            <h5 class="mb-2">Why FA?</h5>
                            <h6 class="banner_btm_width">As a international education experts, we can turn your dreams into plan.</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section banner bottom Part ========== -->
     <!-- ========== Start Section considered Part ========== -->
    <section id="considered_part">
        <div class="container">
            <div class="title">
                <h2>Have you considered?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="consi_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/consider_pic1.png" alt="consider_pic1.png">
                        </div>
                        <div class="consi_text">
                            <a href="{{ route('studentbenefitcard') }}">FA ISIC-International Student Benefit Card</a>
                            <p>FA ISIC Student benefit card unlocks thousands of special offers for full time international students.</p>
                        </div>
                        <button >
                            <a href="{{ route('studentbenefitcard') }}" class="btn btn-sm consi_btn_bord">learn more</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="consi_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/consider_pic2.png" alt="consider_pic2.png">
                        </div>
                        <div class="consi_text">
                            <a href="{{ route('studenthealthcover') }}">Overseas Student Health Cover(OSHC)</a>
                            <p>Overseas Student Health Cover(OSHC) is compulsory for all international student in Australia.</p>
                        </div>
                        <button>
                            <a href="{{ route('commonhealthcare') }}" class="btn btn-sm consi_btn_bord">learn more</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="consi_item" style="position: relative;">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/consider_pic3.png" alt="consider_pic3.png">
                        </div>
                        <div class="consi_text">
                            <a href="{{ route('getpersonaladvice') }}">FA Helpline for Consultancy, Events...</a>
                            <p>We understand that questions can't wait so we created the FA Helpline a confidential,24/7 service.</p>
                        </div>
                        <button>
                            <a href="{{ route('getpersonaladvice') }}" class="btn btn-sm consi_btn_bord">learn more</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                        <div class="consi_btm_btn">
                            <a href="{{ route('studentheatlhcover') }}">More Student Essentials</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section Considered Part ========== -->
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
                        <img src="{{ asset('frontend_assets') }}/images/Inquiry-Image-UAE.png" alt="Inquiry-Image-UAE.png">
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
                            <input type="tel" class="form-control mb-2" name="phone_number" placeholder="Mobile Numbe* (+880)">
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
                            <label for="" class="form-label mb-2 mt-4">FA will not share your details with others without your permission:</label>
                            <div class="check_box mb-4">
                                <input type="checkbox" class="styled-checkbox" name="check_box" />
                                <label class="study_term_cond_mar">
                                    I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy policy</a></label>
                            </div>
                            <div class="check_box mb-4">
                                <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox" />
                                <label class="study_term_cond_mar">Please contact me by phone, email or SMS to assist with my enquiry</label>
                            </div>
                            <div class="check_box mb-4">
                                <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                    class="styled-checkbox" />
                                <label class="study_term_cond_mar">I would like to receive updates and offers from FA</label>
                            </div>
                        </div>
                        <button class="btn study_form_btm_btn">
                            <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                        </button>
                    </form>
                </div>
            </div>
    </section>
    <!-- ========== End Section Study Part ========== -->
    <!-- ========== Start Section study ========== -->
    <section id="student_storie_part">
        <div class="container">
            <div class="title">
                <h2>Our students share their stories...</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="student_storie_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/student_srorie_pic1.jpg" alt="student_storie_pic1">
                        </div>
                        <div class="study_video_icon">
                            <a class="my-video-links" data-autoplay="true" data-vbtype="video" href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div class="student_storie_title">
                            <strong>Anna studying in New Zealand</strong><br>
                            <span>Studying in New Zealand</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="student_storie_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/student_storie_pic2.jpg" alt="student_storie_pic2">
                        </div>
                        <div class="study_video_icon">
                            <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div class="student_storie_title">
                            <strong>Anna studying in New Zealand</strong><br>
                            <span>Studying in New Zealand</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="student_storie_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/student_storie_pic3.jpg" alt="student_storie_pic3">
                        </div>
                        <div class="study_video_icon">
                            <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i class="fa-solid fa-play"></i></a>
                        </div>
                        <div class="student_storie_title">
                            <strong>Anna studying in New Zealand</strong><br>
                            <span>Studying in New Zealand</span>
                        </div>
                        <div class="consi_btm_btn student_video_btn">
                            <a href="#">See More Videos</a>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section  Part ========== -->
    <!-- ========== Start Section study ========== -->
    <section id="askidp_part">
        <div class="container">
            <div class="title">
                <h2>Ask FA</h2>
                <h5>Our counsellors and institutions answer your burning questions in less than 30 seconds</h5>
            </div>
            <div class="row">
                <div class="askidp_slider_box">
                    <div class="askidp_video_item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/idp_review1.jpg" alt="idp_review1"></a>
                        </div>
                        <div class="askidp_overlay">
                            <div class="askidp_top_title">
                                <strong>Answered by</strong><br>
                                <span>Swinburne University of Technology</span>
                            </div>
                            <div class="askidp_video_icon">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="askidp_btm_title">
                                <span>What is the cost of living in Australia for international students?</span>
                            </div>
                        </div>
                    </div>
                    <div class="askidp_video_item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/idp_review2.jpg" alt="idp_review2.jpg"></a>
                        </div>
                        <div class="askidp_overlay">
                            <div class="askidp_top_title">
                                <strong>Answered by</strong><br>
                                <span>Swinburne University of Technology</span>
                            </div>
                            <div class="askidp_video_icon">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="askidp_btm_title">
                                <span>What is the cost of living in Australia for international students?</span>
                            </div>
                        </div>
                    </div>
                    <div class="askidp_video_item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/idp_review3.jpg" alt="idp_review3.jpg"></a>
                        </div>
                        <div class="askidp_overlay">
                            <div class="askidp_top_title">
                                <strong>Answered by</strong><br>
                                <span>Swinburne University of Technology</span>
                            </div>
                            <div class="askidp_video_icon">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="askidp_btm_title">
                                <span>What is the cost of living in Australia for international students?</span>
                            </div>
                        </div>
                    </div>
                    <div class="askidp_video_item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/idp_review4.jpg" alt="idp_review4.jpg"></a>
                        </div>
                        <div class="askidp_overlay">
                            <div class="askidp_top_title">
                                <strong>Answered by</strong><br>
                                <span>Swinburne University of Technology</span>
                            </div>
                            <div class="askidp_video_icon">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="askidp_btm_title">
                                <span>What is the cost of living in Australia for international students?</span>
                            </div>
                        </div>
                    </div>
                    <div class="askidp_video_item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/idp_review5.jpg" alt="idp_review5.jpg"></a>
                        </div>
                        <div class="askidp_overlay">
                            <div class="askidp_top_title">
                                <strong>Answered by</strong><br>
                                <span>Swinburne University of Technology</span>
                            </div>
                            <div class="askidp_video_icon">
                                <a class="my-video-links" data-autoplay="true" data-vbtype="video"
                                    href="https://www.facebook.com/fullstackdeveloperyamin/videos/924136365532982"><i
                                        class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="askidp_btm_title">
                                <span>What is the cost of living in Australia for international students?</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section Part ========== -->
    <!-- ========== Start Section study ========== -->
    <section id="testimonial_quote_part">
        <div class="container">
            <div class="title">
                <h2>What FA students say</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial_quote_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/" alt="">
                        </div>
                        <div class="testimonial_quote_overlay">
                            <div class="testimonial_quote_icon">
                                <img src="{{ asset('frontend_assets') }}/images/testimonial_quote.png" alt="testimonial_quote.png">
                            </div>
                            <div class="testimonial_quote_top_title">
                                <strong>"Hats off to all of you at FA for your commitment, dedication and hard work."</strong>
                                <b>LITHIN STYDING, IN CANADA</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial_quote_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/" alt="">
                        </div>
                        <div class="testimonial_quote_overlay">
                            <div class="testimonial_quote_icon">
                                <img src="{{ asset('frontend_assets') }}/images/testimonial_quote.png" alt="testimonial_quote.png">
                            </div>
                            <div class="testimonial_quote_top_title">
                                <strong>"Hats off to all of you at FA for your commitment, dedication and hard work."</strong>
                                <b>LITHIN STYDING, IN CANADA</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial_quote_item">
                        <div class="img">
                            <img src="{{ asset('frontend_assets') }}/images/" alt="">
                        </div>
                        <div class="testimonial_quote_overlay">
                            <div class="testimonial_quote_icon">
                                <img src="{{ asset('frontend_assets') }}/images/testimonial_quote.png" alt="testimonial_quote.png">
                            </div>
                            <div class="testimonial_quote_top_title">
                                <strong>"Hats off to all of you at FA for your commitment, dedication and hard work."</strong>
                                <b>LITHIN STYDING, IN CANADA</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section Part ========== -->
    <!-- ========== Start Section study ========== -->
    <section id="next_home_part">
        <div class="container">
            <div class="title">
                <h2>Could your next home be?</h2>
            </div>
            <div class="row">
                <div class="askidp_slider_box">
                    <a href="{{ route('studyaustralia') }}">
                        <div class="askidp_video_item">
                            <div class="img">
                                <img src="{{ asset('frontend_assets') }}/images/explore_coun_aust.jpg" alt="explore_coun_aust">
                            </div>
                            <div class="askidp_overlay">
                                <div class="askidp_btm_title">
                                    <strong>Astralia</strong>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('studycanada') }}">
                        <div class="askidp_video_item">
                            <div class="img">
                                <img src="{{ asset('frontend_assets') }}/images/explore_coun_canada.jpg" alt="explore_coun_canada.jpg">
                            </div>
                            <div class="askidp_overlay">
                                <div class="askidp_btm_title">
                                    <strong>Canada</strong>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('studynewzealand') }}">
                        <div class="askidp_video_item">
                            <div class="img">
                                <img src="{{ asset('frontend_assets') }}/images/explore_coun_new.jpg" alt="explore_coun_new.jpg">
                            </div>
                            <div class="askidp_overlay">
                                <div class="askidp_btm_title">
                                    <strong>Newzealand</strong>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('studyusa') }}">
                        <div class="askidp_video_item">
                            <div class="img">
                                <img src="{{ asset('frontend_assets') }}/images/explore_coun_uni.jpg" alt="explore_coun_uni.jpg">
                            </div>
                            <div class="askidp_overlay">
                                <div class="askidp_btm_title">
                                    <strong>USA</strong>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="askidp_video_item">
                        <div class="img">
                            <a href="#"><img src="{{ asset('frontend_assets') }}/images/idp_review5.jpg" alt="idp_review5.jpg"></a>
                        </div>
                        <div class="askidp_overlay">
                            <div class="askidp_btm_title">
                                <strong>Newzealand</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Start Section Banner Part ========== -->
    <!-- ========== Start Section popular event Part ========== -->
    <section id="popular_event_part">
        <img class="popular_img_pos" src="./{{ asset('frontend_assets') }}/images/blue-icon.png" alt="">
        <div class="container">
            <div class="title">
                <h2>Popular Articles</h2>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="event_item">
                        <div class="event_img">
                            <img src="{{ asset('frontend_assets') }}/images/popular1.jpg" alt="popular1.jpg">
                        </div>
                        <div class="text">
                            <b><a href="{{ route('findcourse') }}">Find a course</a></b><br>
                            <span>Find a Course that best suite your career goal.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event_item">
                        <div class="event_img">
                            <img src="{{ asset('frontend_assets') }}/images/popular2.jpg" alt="popular2.jpg">
                        </div>
                        <div class="text">
                            <b><a href="{{ route('freevirtualconsul') }}">Free Virtual Counselling</a></b><br>
                            <span>Find out and apply for the scholarships at universities overseas. Get detailed info on scholarships to study abroad for
                            the countries like USA, UK, Canada, Australia, New Zealand and Ireland.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="event_item">
                        <div class="event_img">
                            <img src="{{ asset('frontend_assets') }}/images/popular3.jpg" alt="popular4.jpg">
                        </div>
                        <div class="text">
                            <b><a href="{{ route('univercityranking') }}">University Rankings</a></b><br>
                            <span>There isn’t a single factor you can miss when finalising your future institution. Refer to the world university rankings can help map out your options.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event_item">
                        <div class="event_img">
                            <img src="{{ asset('frontend_assets') }}/images/event2.jpg" alt="event2.jpg">
                        </div>
                        <div class="text">
                            <b><a href="{{ route('whatwedo') }}">FA Services</a></b><br>
                            <span>If you have the dream, we have the way. Study internationally with FA.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="event_item">
                        <div class="event_img">
                            <img src="{{ asset('frontend_assets') }}/images/popular2.jpg" alt="evente4.jpg">
                        </div>
                        <div class="text">
                            <b><a href="{{ route('upcomingbangla') }}">Upcoming events in Bangladesh</a></b><br>
                            <span>It can get taxing to select the right course and university. Attend our events to interact directly
                                with top universities and make a well-informed decision. All our events are free!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section popular event part ========== -->
    <!-- ========== Start Section pupular course ========== -->
    <section id="popular_course_part">
        <div class="container">
            <div class="title">
                <h2>Popular Courses among Bangladeshi Students</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ route('healthmedicine') }}">
                            <div class="pupular_course_item text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-laptop-medical"></i>
                                </div>
                                <strong>Health and Medicine</strong>
                                <ul>
                                    <li>Medicine</li>
                                    <li>Dental Studies</li>
                                    <li>Veterinary Studies</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('business') }}">
                            <div class="pupular_course_item text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                <strong>Business</strong>
                                <ul>
                                    <li>Banking and Finance</li>
                                    <li>Accounting</li>
                                    <li>Sales And Marketing</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('computingit') }}">
                            <div class="pupular_course_item text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <strong>Computing and IT</strong>
                                <ul>
                                    <li>Computer Science</li>
                                    <li>Information Systems</li>
                                    <li>Software Engineering</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ route('alliedhealth') }}">
                            <div class="pupular_course_item text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-people-roof"></i>
                                </div>
                                <strong>Allied Health</strong>
                                <ul>
                                    <li>Speech Pathology</li>
                                    <li>Pharmacy</li>
                                    <li>Occupational Therapy</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('legalstudy') }}">
                            <div class="pupular_course_item text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-scale-balanced"></i>.
                                </div>
                                <strong>Law and Legal Studies</strong>
                                <ul>
                                    <li>Law</li>
                                    <li>Justice Studies</li>
                                    <li>Criminal Law</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('biologicalscience') }}">
                            <div class="pupular_course_item text-center">
                                <div class="icon">
                                    <i class="fa-solid fa-dna"></i>
                                </div>
                                <strong>Biological and life Sciences</strong>
                                <ul>
                                    <li>Biomedical Engineering</li>
                                    <li>Biological Sciences</li>
                                    <li>Psychology</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section pupular course ========== -->
    <!-- ========== Start Section university brand part ========== -->
    <section id="university_brand_part">
        <div class="uni_bord_after"></div>
        <div class="container">
            <div class="title">
                <h2>Study at leading universities</h2>
            </div>
            <div class="row">
                <div class="univer_slider_main_item">
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/RMIT.png" alt="RMIT.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/Cambridge.png" alt="Cambridge.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/SA.png" alt="SA.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/Canada.png" alt="Canada.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/RMIT.png" alt="RMIT.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/RMIT.png" alt="RMIT.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section university brand part ========== -->
    <!-- ========== Start Section university partner part ========== -->
    <section id="university_partner_part">
        <div class="container">
            <div class="title">
                <h2>Our Partners</h2>
            </div>
            <div class="row">
                <div class="univer_slider_main_item">
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/RMIT.png" alt="RMIT.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/Cambridge.png" alt="Cambridge.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/SA.png" alt="SA.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/Canada.png" alt="Canada.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/RMIT.png" alt="RMIT.png"></div>
                    </div>
                    <div class="univer_brand_item">
                        <div class="img"><img src="{{ asset('frontend_assets') }}/images/SA.png" alt="RMIT.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section university partner part ========== -->
@endsection
