@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start what we do part  ========== -->
    <section id="what_wedo_part">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home <i
                            class="fa-solid fa-angle-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="what_we_do.html" class="text-white">
                        What We do?
                    </a>
                </li>
            </ol>
        </nav>
    </section>
    <!-- ========== End what we do part ========== -->
    <!-- =============event found part start======== -->
    <section id="study_aboard_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-7">
                    <div class="title study_title_marg what_wedo_h2_font">
                        <h2 class="mb-3">What we do?</h2>
                        <h5 class="mb-2">If you have the dream, we have the way. Study internationally with FA.</h5>
                        <p>FA provides a wide range of services to support you with your international education journey. If you are dreaming of
                        studying overseas, FA will get you there. From course information to career advice, we are dedicated to you and your
                        international future.</p>
                    </div>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_ind.jpg" alt="explore_coun_ind.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a class="what_wedo_font" href="#">Free study abroad counselling</a>
                                <p class="my-3">Our counsellors are international education specialists who are ready to do whatever it takes to help you find the right
                                course and country. Best part, all sessions are free!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_aust.jpg" alt="explore_coun_aust.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a class="what_wedo_font" href="#">Visa application assistance</a>
                                <p class="my-3">We’ll guide you through the application process and help you prepare the right documents for your visa submission.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_new.jpg" alt="explore_coun_new.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a class="what_wedo_font" href="#">Prepare for departure</a>
                                <p class="my-3">Get off the plane feeling confident and ready for the adventures ahead with our pre-departure support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_uni.jpg" alt="explore_coun_uni.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a class="what_wedo_font" href="#">Welcome to events</a>
                                <p class="my-3">Get off the plane feeling confident and ready for the adventures ahead with our pre-departure support.</p>
                            </div>
                        </div>
                    </div>
                    <!-- =======study success start========= -->
                    <div class="row mt-4 study_succ_marg">
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ1.jpg" alt="study_succ1.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Pave your path to success</a></h5>
                                    <p>We’ll walk you step-by-step through the entire application process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ2.jpg" alt="study_succ2.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Pave your path to success</a></h5>
                                    <p>We’ll walk you step-by-step through the entire application process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ3.jpg" alt="study_succ3.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Let's help you study abroad</a></h5>
                                    <p>We find a student the right place to study every 15 minutes. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="{{ asset('frontend_assets') }}./images/study_succ3.jpg" alt="study_succ3.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Let's help you study abroad</a></h5>
                                    <p>We find a student the right place to study every 15 minutes. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =======study success end========= -->
                </div>

            </div>
            <div class="title">
                <h2>Your next steps</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <a href="study_next_page.html">
                            <div class="study_next_item_overlay">
                                <i class="fa-solid fa-graduation-cap study_next_icon "></i>
                                <p>Choose a subject and we’ll find courses that match your criteria.</p>
                                <i class="fa-solid fa-angle-right study_next_arro_icon"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="study_next_item text-center">
                        <!-- ===study form aboard item show bar start=== -->
                        <div class="study_form_item_show_js">
                            <a href="fa_helpline.html">
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
    <!-- =============event fount part end======== -->
@endsection
