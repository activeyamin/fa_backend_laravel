@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section Computing it ========== -->
    <section id="computing_it_part">
        <nav class="evnt_bradcrmb_marg"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item event_bread_col"><a href="{{ url('/') }}">FA Bangladesh</a></li>
                <li class="breadcrumb-item event_bread_col"><a href="{{ route('findcourse') }}">Courses</a></li>
                <li class="breadcrumb-item event_bread_col"><a href="{{ route('legalstudy') }}">Law and Legal Studies Courses</a>
                </li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="computing_item">
                        <div class="title">
                            <h2>Law and Legal Studies courses abroad</h2>
                            <h5>282 international courses found, showing 1-10 below</h5>
                        </div>
                        <button class="btn btn-white computing_btn_bg mb-3">
                            <h6>
                                <i class="fa-solid fa-up-down compu_drop_manu_show"></i>
                                <span>Popularity</span>
                                <i class="fa-solid fa-angle-down compu_drop_manu_show"></i>
                            </h6>

                        </button>
                        <div class="compu_drop_pos">
                            <div class="computing_manu_item">
                                <a href="#">Popularity</a>
                                <a href="#">Course Name (A-Z)</a>
                                <a href="#">Next Starting</a>
                                <a href="#">Course fee low to heigh</a>
                                <a href="#">Course fee heigh to low</a>
                                <a href="#">Course Name (A-Z)</a>
                            </div>
                            <!-- ==boostrap offencanvas start -->
                            <div class="compu_filter_btn">
                                <button class="btn btn compu_btn_marg_pos" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                    <h5 style="display: inline-block;">Filters</h5>
                                </button>

                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                                    tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling
                                        </h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>Try scrolling the rest of the page to see this option in action.</p>
                                    </div>
                                </div>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                                    aria-labelledby="offcanvasWithBackdropLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with
                                            backdrop</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>.....</p>
                                    </div>
                                </div>
                                <div class="offcanvas offcanvas-start" style="width: 50%;" data-bs-scroll="true"
                                    tabindex="-1" id="offcanvasWithBothOptions"
                                    aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <div class="offcanvas-header">
                                        <h3 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Filter courses
                                            (1)
                                        </h3>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <b style="margin-left: 15px;">Start a new search</b>
                                    <hr>
                                    <div class="compu_form_input_marg">
                                        <div
                                            class="offcanvas-body compu_filter_Specific_sub_area compu_sub_for_right_inp_rela">
                                            <h4>specific subject area</h4>
                                            <input type="checkbox" value=""><label for="">Computer Science</label><br>
                                            <input type="checkbox" value=""><label for="">Information
                                                Systems</label><br>
                                            <input type="checkbox" value=""><label for="">Information
                                                technology</label><br>
                                            <input type="checkbox" value=""><label for="">Computer
                                                Engineering</label><br>
                                            <input type="checkbox" value=""><label for="">Software
                                                Engineering</label><br>
                                            <div class="compu_right_input">
                                                <input type="checkbox" value=""><label for="">Data analysis</label><br>
                                                <input type="checkbox" value=""><label for="">Intelligence</label><br>
                                                <input type="checkbox" value=""><label for="">Came
                                                    Development</label><br>
                                                <input type="checkbox" value=""><label for="">IT Security</label><br>
                                                <input type="checkbox" value=""><label for="">Web
                                                    Development</label><br>
                                            </div>

                                            <hr>
                                        </div>
                                        <div
                                            class="offcanvas-body compu_filter_Specific_sub_area compu_sub_for_right_inp_rela">
                                            <h4>Study Level</h4>
                                            <input type="checkbox" value=""><label for="">Undergraduate</label><br>
                                            <input type="checkbox" value=""><label for="">Postgraduate</label><br>
                                            <input type="checkbox" value=""><label for="">Doctorate</label><br>
                                            <input type="checkbox" value=""><label for="">VET</label><br>
                                            <input type="checkbox" value=""><label for="">Foundation</label><br>
                                            <div class="compu_right_input comp_study_level_right_input">
                                                <input type="checkbox" value=""><label for="">Pre-Degree &
                                                    Vocational</label><br>
                                                <input type="checkbox" value=""><label for="">University
                                                    Preparation</label><br>
                                                <input type="checkbox" value=""><label for="">English</label><br>
                                                <input type="checkbox" value=""><label for="">School</label><br>
                                            </div>
                                            <hr>
                                        </div>
                                        <div
                                            class="offcanvas-body compu_filter_study_desitination compu_sub_for_right_inp_rela">
                                            <h4>Study Desitination</h4>
                                            <input type="checkbox" value=""><label for="">United Status</label><br>
                                            <input type="checkbox" value=""><label for="">United Kingdom</label><br>
                                            <input type="checkbox" value=""><label for="">Australia</label><br>
                                            <input type="checkbox" value=""><label for="">Canada</label><br>
                                            <input type="checkbox" value=""><label for="">New Zealand</label><br>
                                            <div class="comp_study_level_right_input comp_study_degina_right_input">
                                                <input type="checkbox" value=""><label for="">Ireland</label><br>
                                                <input type="checkbox" value=""><label for="">Canada</label><br>
                                                <input type="checkbox" value=""><label for="">New Zealand</label><br>
                                                <input type="checkbox" value=""><label for="">Ireland</label><br>
                                            </div>
                                            <hr>
                                        </div>
                                        <div
                                            class="offcanvas-body compu_filter_study_mode compu_sub_for_right_inp_rela">
                                            <h4>Study Mode</h4>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>

                                            <input type="checkbox" value=""><label style="margin-right: 25px" for="">On
                                                campus study</label>
                                            <input type="checkbox" value=""><label for="">Online study</label><br>
                                            <input type="checkbox" value=""><label for="">On campus with online start
                                                (due to COVID-19)</label><br>
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                5000+
                                                <span class="visually-hidden">5000+</span>
                                            </span>
                                            <input style="position: relative; width: 100%;" type="range" name="range"
                                                id="">
                                            <br>
                                            <hr>
                                            <div class="offcanvas-body compu_filter_city compu_sub_for_right_inp_rela">
                                                <h4>City</h4>
                                                <input type="checkbox" value=""><label for="">Sydney</label><br>
                                                <input type="checkbox" value=""><label for="">Melbourne</label><br>
                                                <input type="checkbox" value=""><label for="">Brisbane</label><br>
                                                <input type="checkbox" value=""><label for="">Springfield</label><br>
                                                <input type="checkbox" value=""><label for="">London</label><br>
                                                <div class="comp_study_level_right_input comp_study_degina_right_input">
                                                    <input type="checkbox" value=""><label for="">Los
                                                        Angeles</label><br>
                                                    <input type="checkbox" value=""><label for="">Boston</label><br>
                                                    <input type="checkbox" value=""><label for="">Auckland</label><br>
                                                    <input type="checkbox" value=""><label for="">Torono</label><br>
                                                    <input type="checkbox" value=""><label for="">New York</label><br>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="offcanvas-body compu_filter_city compu_sub_for_right_inp_rela">
                                                <h4>Institution</h4>
                                                <input type="checkbox" value=""><label for="">University of Michigan -
                                                    Ann Arbor</label><br>
                                                <input type="checkbox" value=""><label for="">The University of
                                                    Queensland</label><br>
                                                <input type="checkbox" value=""><label for="">The Universi
                                                    ty of Queensland</label><br>
                                                <input type="checkbox" value=""><label for="">University of California -
                                                    Irvine</label><br>
                                                <input type="checkbox" value=""><label for="">RMIT
                                                    University</label><br>
                                                <input type="checkbox" value=""><label for="">Liverpool Hope
                                                    University</label><br>
                                                <div class="comp_study_inistitue_right_input">
                                                    <input type="checkbox" value=""><label for="">Illinois Institute Of
                                                        Technology - CEG</label><br>
                                                    <input type="checkbox" value=""><label for="">Macquarie
                                                        University</label><br>
                                                    <input type="checkbox" value=""><label for="">Deakin
                                                        University</label><br>
                                                    <input type="checkbox" value=""><label for="">Northeastern
                                                        University</label><br>
                                                </div>
                                                <hr>
                                                <div class="p-2">
                                                    <button style="display: block; margin: auto;"
                                                        class="btn btn-outline-success bg-dark text-white py-2 px-4">
                                                        Apply Filters
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ==boostrap offencanvas end -->
                    </div>
                </div>
            </div>
            <div class="computing_item">
                <button style="margin-top: -70px !important;" type="button"
                    class="study_shear_btn btn btn-outline-secondary mt-3">
                    <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
                </button>
            </div>
            <div class="row my-4">
                <div class="col-lg-8">
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="computing_text_img_items">
                                <div class="computing_img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets') }}./images/computing_scince1.jpg" alt="computing_scince1.jpg">
                                        <div class="compu_title">
                                            <h5>UTP Stage II: Recreation Management and Community Development</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="computing_texts">
                                    <a href="#" style="text-decoration: underline; color: #414141;font-weight: 700;">At
                                        Rivier University</a><br>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#" style="color: #414141; margin: 10px 0;">
                                        <small class="com_btm_bord">Manchester, </small>
                                        <small>United Status</small>
                                    </a>
                                    <div class="computing_course_status">
                                        <div class="com_cour_quli_item mt-4">
                                            <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                                            <a href="#">Course Qulification</a><br>
                                            <h6>Master Degree</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-regular fa-clock"></i></a>
                                            <a href="#">Entry Score</a><br>
                                            <h6>5.6</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-solid fa-dollar-sign"></i></a>
                                            <a href="#">Total Score</a><br>
                                            <h6>BDT 1,982,255 <div class="compu_quali_mark">?</div>
                                            </h6><br>
                                            <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                title="Tooltip on bottom">
                                                Tooltip on bottom
                                            </button> -->
                                            <div class="compu_quation_item">
                                                <h5 style="font-weight: 700;">USD 25,123</h5>
                                                <p style="font-weight: 600;">title="Bachelor of Exercise Science/Master
                                                    of Physiotherapy and Exercise Physiology"</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="computing_text_img_items">
                                <div class="computing_img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets') }}./images/computing_scince2.jpg" alt="computing_scince2.jpg">
                                        <div class="compu_title">
                                            <h5>Ontario College Graduate Certificate in Health Systems Management</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="computing_texts">
                                    <a href="#" style="text-decoration: underline; color: #414141;font-weight: 700;">At
                                        Valpariso University</a><br>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#" style="color: #414141; margin: 10px 0;">
                                        <small class="com_btm_bord">Manchester, </small>
                                        <small>Valpariso Status</small>
                                    </a>
                                    <div class="computing_course_status">
                                        <div class="com_cour_quli_item mt-4">
                                            <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                                            <a href="#">Course Qulification</a><br>
                                            <h6>Master Degree</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-regular fa-clock"></i></a>
                                            <a href="#">Entry Score</a><br>
                                            <h6>6</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-solid fa-dollar-sign"></i></a>
                                            <a href="#">Total Score</a><br>
                                            <h6>BDT 2,134,782 <div class="compu_quali_mark">?</div>
                                            </h6><br>

                                            <div class="compu_quation_item">
                                                <h5 style="font-weight: 700;">USD 23,128</h5>
                                                <p style="font-weight: 600;">Program fees are indicative only. Speak to
                                                    your FA study counsellor to get up-to-date course prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="computing_text_img_items">
                                <div class="computing_img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets') }}./images/computing_scince3.jpg" alt="computing_scince3.jpg">
                                        <div class="compu_title">
                                            <h5>Ontario College Diploma in Hospitality - Hotel Operations Management
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="computing_texts">
                                    <a href="#" style="text-decoration: underline; color: #414141;font-weight: 700;">At
                                        Rivier University</a><br>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#" style="color: #414141; margin: 10px 0;">
                                        <small class="com_btm_bord">Manchester, </small>
                                        <small>United Status</small>
                                    </a>
                                    <div class="computing_course_status">
                                        <div class="com_cour_quli_item mt-4">
                                            <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                                            <a href="#">Course Qulification</a><br>
                                            <h5>Bachelor of Science in Health Sciences</h5><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-regular fa-clock"></i></a>
                                            <a href="#">Entry Score</a><br>
                                            <h6>5.6</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-solid fa-dollar-sign"></i></a>
                                            <a href="#">Total Score</a><br>
                                            <h6>BDT 1,982,255 <a href="#" class="compu_quali_mark">?</a></h6><br>
                                            <div class="compu_quation_item">
                                                <h5 style="font-weight: 700;">USD 25,123</h5>
                                                <p style="font-weight: 600;">Program fees are indicative only. Speak to
                                                    your FA study counsellor to get up-to-date course prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="computing_text_img_items">
                                <div class="computing_img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets') }}./images/computing_scince4.jpg" alt="computing_scince4.jpg">
                                        <div class="compu_title">
                                            <h5>Master of Science in Information Technology - Computing</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="computing_texts">
                                    <a href="#" style="text-decoration: underline; color: #414141;font-weight: 700;">At
                                        Valpariso University</a><br>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#" style="color: #414141; margin: 10px 0;">
                                        <small class="com_btm_bord">Manchester, </small>
                                        <small>Valpariso Status</small>
                                    </a>
                                    <div class="computing_course_status">
                                        <div class="com_cour_quli_item mt-4">
                                            <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                                            <a href="#">Course Qulification</a><br>
                                            <h6>Master Degree</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-regular fa-clock"></i></a>
                                            <a href="#">Entry Score</a><br>
                                            <h6>6</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-solid fa-dollar-sign"></i></a>
                                            <a href="#">Total Score</a><br>
                                            <h6>BDT 2,134,782 <a href="#" class="compu_quali_mark">?</a></h6><br>
                                            <div class="compu_quation_item">
                                                <h5 style="font-weight: 700;">USD 23,128</h5>
                                                <p style="font-weight: 600;">Program fees are indicative only. Speak to
                                                    your FA study counsellor to get up-to-date course prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="computing_text_img_items">
                                <div class="computing_img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets') }}./images/computing_scince5.jpg" alt="computing_scince5.jpg">
                                        <div class="compu_title">
                                            <h5>Master of Science in Information Technology</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="computing_texts">
                                    <a href="#" style="text-decoration: underline; color: #414141;font-weight: 700;">At
                                        Rivier University</a><br>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#" style="color: #414141; margin: 10px 0;">
                                        <small class="com_btm_bord">Manchester, </small>
                                        <small>United Status</small>
                                    </a>
                                    <div class="computing_course_status">
                                        <div class="com_cour_quli_item mt-4">
                                            <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                                            <a href="#">Course Qulification</a><br>
                                            <h6>Master Degree</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-regular fa-clock"></i></a>
                                            <a href="#">Entry Score</a><br>
                                            <h6>5.6</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-solid fa-dollar-sign"></i></a>
                                            <a href="#">Total Score</a><br>
                                            <h6>BDT 1,982,255 <a href="#" class="compu_quali_mark">?</a></h6><br>
                                            <div class="compu_quation_item">
                                                <h5 style="font-weight: 700;">USD 25,123</h5>
                                                <p style="font-weight: 600;">Program fees are indicative only. Speak to
                                                    your FA study counsellor to get up-to-date course prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="computing_text_img_items">
                                <div class="computing_img">
                                    <a href="#">
                                        <img src="{{ asset('frontend_assets') }}./images/computing_scince6.jpg" alt="computing_scince6.jpg">
                                        <div class="compu_title">
                                            <h5>Master of Science in Computer Information - system</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="computing_texts">
                                    <a href="#" style="text-decoration: underline; color: #414141;font-weight: 700;">At
                                        Valpariso University</a><br>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#" style="color: #414141; margin: 10px 0;">
                                        <small class="com_btm_bord">Manchester, </small>
                                        <small>Valpariso Status</small>
                                    </a>
                                    <div class="computing_course_status">
                                        <div class="com_cour_quli_item mt-4">
                                            <a href="#"><i class="fa-solid fa-graduation-cap"></i></a>
                                            <a href="#">Course Qulification</a><br>
                                            <h6>Master Degree</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-regular fa-clock"></i></a>
                                            <a href="#">Entry Score</a><br>
                                            <h6>6</h6><br>
                                        </div>
                                        <div class="com_cour_quli_item">
                                            <a href="#"><i class="fa-solid fa-dollar-sign"></i></a>
                                            <a href="#">Total Score</a><br>
                                            <h6>BDT 2,134,782 <a href="#" class="compu_quali_mark">?</a></h6><br>
                                            <div class="compu_quation_item">
                                                <h5 style="font-weight: 700;">USD 23,128</h5>
                                                <p style="font-weight: 600;">Program fees are indicative only. Speak to
                                                    your FA study counsellor to get up-to-date course prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=== boostrap pagination start==== -->
                    <div class="boostrap_pagination">
                        <!--=== boostrap pagination end==== -->
                        <nav aria-label="Page navigation example" style="display: flex;">
                            <h4 style="margin-right: 10px;">Showing 1-10 of 121 courses</h4>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event_found_item">
                        <form action="#" method="post" class="form-control p-4">
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
                                <label for="" class="form-label mb-2 mt-4">FA will not share your details with others
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
                                    <label class="study_term_cond_mar">I would like to receive updates and offers from
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
    <!-- ========== End Section Computing it ========== -->
    <!-- ========== Start Section Recommended Subject ========== -->
    <section id="recommended_subj_part">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>Recommended Subjects</h2>
                </div>
                <div class="col-lg-4">
                    <div class="recommended_sub_item">
                        <div class="reco_img">
                            <img src="{{ asset('frontend_assets') }}./images/recomment_sub1.jpg" alt="recomment_sub1.jpg">
                        </div>
                        <div class="reco_text">
                            <h5 class="mb-3">
                                <a href="#" class="text-success" style="font-weight: 600;">All about Web Development
                                    abroad</a>
                            </h5>
                            <h6 style="line-height: 24px;" class="mb-4">As technology continues to take up a bigger role
                                in our lives, web Development presents a great pathway for
                                technically-minded ...</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="recommended_sub_item">
                        <div class="reco_img">
                            <img src="{{ asset('frontend_assets') }}./images/recomment_sub2.jpg" alt="recomment_sub2.jpg">
                        </div>
                        <div class="reco_text">
                            <h5 class="mb-3">
                                <a href="#" class="text-success" style="font-weight: 600;">All about Software
                                    Engineering abroad
                                </a>
                            </h5>
                            <h6 style="line-height: 24px;" class="mb-4">Love creating digital magic? Studying Software
                                Engineering could be the pathway you’re searching for, allowing you to
                                use the t...</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="recommended_sub_item">
                        <div class="reco_img">
                            <img src="{{ asset('frontend_assets') }}./images/recomment_sub3.jpg" alt="recomment_sub3.jpg">
                        </div>
                        <div class="reco_text">
                            <h5 class="mb-3">
                                <a href="#" class="text-success" style="font-weight: 600;">All about Computing & IT
                                    abroad</a>
                            </h5>
                            <h6 style="line-height: 24px;" class="mb-4">Computing & IT is the way of the future, with
                                all elements of our lives now relying on computers and technology to
                                function.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Section Recommended Subject ========== -->
    <!-- ========== End Section Related Rearches  ========== -->
    <section id="related_rearche_part">
        <div class="container">
            <div class="title">
                <h2>Related Rearches</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="rela_rearche_item">
                        <i class="fa-solid fa-book-open"></i>
                        <h3 class="mb-3 mt-3">By course subject</h3>
                        <ul style="padding-left: 0;">
                            <li><a href="#">Computer Science</a></li>
                            <li><a href="#">Information Systems</a></li>
                            <li><a href="#">Information technology</a></li>
                            <li><a href="#">Computer Engineering</a></li>
                            <li><a href="#">Software Engineering</a></li>
                            <li><a href="#">Data analysis</a></li>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Game Development</a></li>
                            <li><a href="#">IT Security</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Computer Graphics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rela_rearche_item">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h3 class="mb-3 mt-3">By study level</h3>
                        <ul>
                            <li><a href="#">Undergraduate Computing and IT</a></li>
                            <li><a href="#">Postgraduate Computing and IT</a></li>
                            <li><a href="#">Doctorate Computing and IT</a></li>
                            <li><a href="#">VET Computing and IT</a></li>
                            <li><a href="#">Foundation Computing and IT</a></li>
                            <li><a href="#">Pre-Degree & Vocational Computing and IT</a></li>
                            <li><a href="#">University Preparation Computing and IT</a></li>
                            <li><a href="#">English Computing and IT</a></li>
                            <li><a href="#">School Computing and IT</a></li>
                            <li><a href="#">Computing and IT</a></li>
                            <li><a href="#">Computer Graphics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rela_rearche_item">
                        <i class="fa-solid fa-plane-departure"></i>
                        <h3 class="mb-3 mt-3">By overseas country</h3>
                        <ul>
                            <li><a href="#">Computing and courses in United States Kingdom</a></li>
                            <li><a href="#">Computing and IT courses in United Status</a></li>
                            <li><a href="#">Computing and IT courses in Canada</a></li>
                            <li><a href="#">Computing and IT courses in New Zealand</a></li>
                            <li><a href="#">Computing and IT courses in Australia</a></li>
                            <li><a href="#">Computing and IT courses in Ireland</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Start Section Related Rearches ========== -->
@endsection
