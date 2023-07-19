@extends('layouts.frontend.frontend_master')
@section('frontend_content')
<!-- ========== Start Section register Part ========== -->
<section id="register_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="reg_text">
                    <div class="logo" style="width: 250px;">
                        <img src="{{ asset('frontend_assets') }}/images/fa_inter_logo.png" alt="fa_inter_logo" width="100%">
                    </div>
                    <div class="title">
                        <h2>FA has been helping international students for over 50 years</h2>
                        <p>Our full suite of student placement services and support is available to you</p>
                        <ul class="reg_list_col my-2">
                            <li>Supporting you in every step of your study abroad journey</li>
                            <li>Approachable international education experts</li>
                            <li>Get instant offer with FA FastLane</li>
                            <li>Proud co-owners of IELTS</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('student.index') }}" method="post" class="form-control">
                    @csrf
                    <div class="title text-center">
                        <h2>Sign up to create your profile</h2>
                        <p>Already have an FA profile? <a href="login.html">Login</a></p>
                    </div>
                    <div class="mb-3 mb-4" style="display: flex;">
                        <input type="text" class="form-control mb-2" name="first_name" placeholder="First Name*">
                        <input type="text" class="form-control mb-2" name="last_name" placeholder="Last Name*">
                    </div>
                    <div class="mb-3 mb-4 reg_input_pad">
                        <input type="email" class="form-control mb-2" name="email" placeholder="Email Address*">
                    </div>
                    <div class="mb-3 mb-4 reg_input_pad">
                        <input type="tel" class="form-control mb-2" name="phone_number" placeholder="Mobile Numbe* (+880)">
                    </div>
                    <div class="mb-3 mb-4 reg_input_pad">
                        <input type="password" class="form-control mb-2" name="password" placeholder="Input Password">
                    </div>
                    <div class="mb-3 mb-4 reg_input_pad">
                        <input type="password_confirmation" class="form-control mb-2" name="password_confirmation" placeholder="Input Confirm Password">
                    </div>

                    <!-- form FA office start -->
                    <div class="study_form_term_cond">
                        <div class="check_box mb-4">
                            <input type="checkbox" class="styled-checkbox" name="check_box"/>
                            <label class="study_term_cond_mar">
                                I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy
                                    policy</a></label>
                        </div>
                        <div class="check_box mb-4">
                            <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox"/>
                            <label class="study_term_cond_mar">Please contact me by phone, email or SMS to assist with
                                my enquiry</label>
                        </div>
                        <div class="check_box mb-4">
                            <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                class="styled-checkbox"/>
                            <label class="study_term_cond_mar">I would like to receive updates and offers from
                                FA</label>
                        </div>
                    </div>
                    <button type="submit" class="btn study_form_btm_btn text-white">
                       <h6> Create an Account</h6>
                    </button>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- ========== End Section register Part ========== -->
@endsection
