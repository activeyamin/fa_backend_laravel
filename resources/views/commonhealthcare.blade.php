@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start what we do start  ========== -->
    <section id="student_health_banner_part">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-left: 35px;">
                <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home <i
                            class="fa-solid fa-angle-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="student_benefit_card.html" class="text-dark">
                        Student Benefit Card?
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
                <div class="title">
                    <h1 class="text-success">Get the right student health cover while studying abroad</h1>
                    <h6 class="mt-2">Congratulations! You’ve made a great decision to study abroad. We’re here to make the process easy, finding the best cover to suit your needs.</h6>
                </div>
                <h2>Why do I need a student health cover?</h2>
                <h6 class="my-2">1. It helps cover you for medical expenses while you're studying abroad, including:</h6>
                <ul class="comon_healt_cear_list">
                    <li>Doctor visits</li>
                    <li>Hostipital</li>
                    <li>Emergency Ambulance</li>
                    <li>Prescription medicine </li>
                </ul>

                <h2>Get the student health care stress-free with IDP </h2>
                <h6 class="my-2">2. We've done the hard work of selecting quality health cover providers wherever you choose to study in Australia, Canada, UK, USA and New Zealand.</h6>
                <ul class="comon_healt_cear_list">
                    <p>Our quality providers offer:</p>
                    <li>Exclusive benefits</li>
                    <li>Speedy turnaround</li>
                    <li>Value for money</li>
                </ul>
                <div class="col-lg-8">
                    <div class="student_text study_title_marg mt-3">
                        <h2 class="mb-3">Common healthcare words</h2>
                        <hr>
                        <h6 class="my-3"><b>Allied health professional</b> - A health professional who is not a doctor, nurse or dentist, including physiotherapists,
                        psychologists and dieticians.</h6>
                        <h6 class="my-4"><b>GP</b> - A General Practitioner, or doctor. You’ll find these at medical centres in the community.</h6>
                        <h6 class="my-4"><b>Benefit</b> - The amount you get back when you claim for an allowed service.</h6>
                        <h6 class="my-4"><b>Hospital cover</b> - Covering your costs when you’re admitted to hospital, including benefits for prosthesis and medical
                        services provided during your hospital stay.</h6>
                        <h6 class="my-4"><b>Rehabilitation</b> – Treatment that is designed to help a patient recover from injury, illness or disease, for example
                        physiotherapy or hydrotherapy.</h6>
                        <h6 class="my-4"><b>Exclusions</b> - Things you can’t claim for because they’re not included in your cover.</h6>
                        <h6 class="my-4"><b>Out-of-pocket expenses</b> - the difference you have to pay between the insurer’s benefit and what is charged by the service
                        provider.</h6>
                        <h6 class="my-4"><b>HICAPS (Health Industry Claims and Payments Service)</b> - An electronic system that makes it easy for you to get money back
                        by letting you claim benefits when you pay for your treatment.</h6>
                        <h6 class="my-4"><b>Ophthalmology</b> - specialised care relating to the eyes.</h6>
                        <h6 class="my-4"><b>Outpatient service</b> - Hospital service where patients get treatment without being admitted, or without staying in
                        hospital.</h6>
                        <h6 class="my-4"><b>Chiro, physio</b> - specialists in chiropractic care and physiotherapy.</h6>
                        <h6 class="my-4"><b>Policy</b> - this is your health cover agreement or contact with your OSHC provider.</h6>
                        <h6 class="my-4"><b>Private hospital</b> - A non-government hospital which is privately owned and operated for patients who are treated by a
                        doctor they choose.</h6>
                        <h6 class="my-4"><b>Public hospital</b> - hospital owned and managed by government.</h6>
                        <h6 class="my-4"><b>Natural therapies</b> - alternative treatments like acupuncture, naturopathy and remedial massage</h6>

                        <button class="btn student_health_btn">
                            <a href="#">Buy Study Health cover</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============event found part end======== -->
    <!-- =============event found part start======== -->
    <section id="student_health_recomanded_part">
        <div class="container">
            <b>Recommended articles</b>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row study_box_shadow mt-4">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health1.jpg" alt="student_health1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">How to buy OSHC cover</a>
                                <p class="my-3">FA gives you the freedom to choose. It's easy to buy Overseas Student Health Cover (OSHC) online yourself, or you can
                                do it with the help of an FA counsellor</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-4">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health2.jpg" alt="student_health2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">How to use OSHC cover</a>
                                <p class="my-3">When you arrive in Australia, you may need to activate your OSHC policy and you can begin using it (but hopefully you
                                won't need to!). Here are some tips of making a claim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-4">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health3.jpg" alt="student_health3.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Understanding the Australian healthcare system</a>
                                <p class="my-3">We're here to help you understand the Australian healthcare system and how to navigate it. A little knowledge will help
                                you to be confident you are getting the best healthcare services, when you need them.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-4">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/student_health4.jpg" alt="student_health4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Health and safety tips</a>
                                <p class="my-3">Australia is a safe and healthy place to live, and there's a lot to see and do. You will probably be studying in a town
                                or city, but you may also want to experience the wild beauty of its oceans, mountains, rivers and the famous 'outback'
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

