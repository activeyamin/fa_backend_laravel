@extends('layouts.frontend.frontend_master')

@section('frontend_content')
  <section id="register_part">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="reg_text">
              <div class="logo" style="width: 250px;">
                  <img src="{{ asset('frontend_assets') }}/images/fa_inter_logo.png" alt="fa_inter_logo" width="100%">
              </div>
              <div class="title">
                  <h2>FA has been helping international students for over 35 years</h2>
                  <p>Our full suite of student placement services and support is available to you</p>
                  <ul class="reg_list_col my-2">
                      <li>Supporting you in every step of your study abroad journey</li>
                      <li>Approachable international education experts</li>
                      <li>Get instant offer with FA FastLane</li>
                  </ul>
              </div>
          </div>
      </div>
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                       <div class="title text-center bg-success text-white">
                          <h2>Sign up to create your profile</h2>
                          <p>Already have an FA profile? <a style="font-size: 18px; text-decoration:underline;" href="{{ route('login') }}">{{ __("login") }}</a> here</p>
                      </div>
                  </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="register_padd_form">
                            @csrf
                            <div class="mb-3 mb-4">
                              <input type="text" class="form-control mb-2 @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" name="first_name" placeholder="First Name*">
                              @error('first_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="mb-3 mb-4">
                              <input type="text" class="form-control mb-2 @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" name="last_name" placeholder="Last Name*">
                              @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                            <div class="mb-3 mb-4">
                              <input type="email" value="{{ old('email') }}" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" placeholder="Email Address*">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="mb-3 mb-4">
                                <input id="password" type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" placeholder="Input Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="mb-3 mb-4">
                                <input name="password_confirmation" type="password" class="form-control mb-2 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 mb-4">
                                <input type="tel" class="form-control mb-2" name="phone_number" value="{{ old('phone_number') }}" placeholder="Mobile Numbe* (+880)">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="study_form_term_cond">
                          <div class="check_box mb-4">
                              <input type="checkbox" class="styled-checkbox" name="check_box" />
                              <label class="study_term_cond_mar">
                                  I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy
                                      policy</a></label>
                          </div>
                          <div class="check_box mb-4">
                              <input type="checkbox" name="contact_method" id="contactMethod" class="styled-checkbox" />
                              <label class="study_term_cond_mar">Please contact me by phone, email or SMS to assist with
                                  my enquiry</label>
                          </div>
                          <div class="check_box mb-4">
                              <input type="checkbox" name="marketingPreferenceAcceptance" id="marketingPreferenceAcceptance"
                                  class="styled-checkbox" />
                              <label class="study_term_cond_mar">I would like to receive updates and offers from
                                  FA</label>
                          </div>
                      </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-12">
                                    <button type="submit" class="btn study_form_btm_btn text-white">
                                        {{ __('Create an Account') }}
                                    </button>
                                </div>
                            </div>
                          </form>
                    </div>
              </div>
          </div>
      </div>
    </div>
  </section>
@endsection



