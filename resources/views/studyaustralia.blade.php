@extends('layouts.frontend.frontene_common_study_form')
@section('frontend_common_banner_form')
     <!-- ========== Start Section study australia banner part  ========== -->
    <section id="study_australia_bannr_part">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home <i class="fa-solid fa-angle-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('studyaustralia') }}" class="text-white">
                        Top 6 Study Abroad Destinations
                    </a>
                </li>
            </ol>
        </nav>
    </section>
    <!-- ========== End Section study australia banner part ========== -->
    <!-- =============event found part start======== -->
    <section id="study_aboard_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="title study_title_marg study_aus_width">
                        <h2 class="mb-3">Study in Australia from Bangladesh</h2>
                        <h4 class="mb-2">A quick guide for your favorite study destination <mark> – Australia!</mark></h4>
                        <p>Australia is a popular destination for international students from around the world. Home to leading universities, it
                        offers a relaxed, affordable study experience and strong career opportunities in some of the world’s most liveable
                        cities, including Sydney and Melbourne.</p>
                        <p class="mt-4">In fact, Aussie universities rank 3rd for the highest number of international students. Many Bangladeshi students study
                        in Australia for its unparalleled quality of education, high standard of living, post-study work opportunities,
                        promising career prospects and other factors.</p>
                        <button class="study_aust_btn">
                            <a href="{{ route('freevirtualconsul') }}">Get Free Assistance From Our Experts</a>
                        </button>
                        <strong class="study_aus_font_size">Top Courses to Study in Australia</strong>
                        <div class="table-responsive mt-2">
                            <table class="table table-striped-columns
                            table-hover
                            table-bordered
                            table-primary
                            align-middle">
                                <thead class="table-light table-border">
                                    <caption><p class="study_aust_table_und">Explore other <a href="{{ route('findcourse') }}">Study Abroad Courses!</a></p></caption>
                                    <tr class="study_aus_font_weigt">
                                        <th><h5>Topic</h5></th>
                                        <th><h5>Topic</h5></th>
                                        <th><h5>Topic</h5></th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-group-divider study_table_text_und">
                                        <tr class="table-secondary" >
                                            <td scope="row">
                                                <a href="#" class="study_aust_table_head_font">Engineering</a>
                                            </td>
                                            <td>
                                                <a href="#" class="study_aust_table_head_font">Health and Medicine</a>
                                            </td>
                                            <td>
                                                <a href="#" class="study_aust_table_head_font">Agriculture Science</a>
                                            </td>
                                        </tr>
                                        <tr class="table-secondary">
                                            <td scope="row">
                                                <a href="#" class="study_aust_table_head_font">Business Studies</a>
                                            </td>
                                            <td>
                                                <a href="#" class="study_aust_table_head_font">Information Technology</a>
                                            </td>
                                            <td>
                                                <a href="#" class="study_aust_table_head_font">Art and Design</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                            </table>
                        </div>
                        <strong class="study_aus_font_size">Get Scholarships to Study in Australia</strong>
                        <p>From finding the best scholarships for you to helping you earn them, <a href="{{ url('/') }}">FA Bangladesh</a> is there to support you all
                        throughout with the latest updates on various scholarship programs and how to avail them. In 2019, Australia authorities
                        offered over 3,000 Australia Awards scholarships and short courses to students from over 55 countries.</p>

                        <p class="mb-4">Some common scholarships programs available to international students in Australia include:</p>

                        <p class="mb-4">1. Australia Awards: Funded by the Department of Education and the Australian Centre for International Agricultural Research (ACIAR) and the Department of Foreign Affairs (DFAT).</p>

                        <p class="mb-4">2. Australian Government Research and Training Program (AGRTP): Funded by the Australian Government, the scholarship covers tuition fee and health insurance of the student for up to 3 years.</p>

                        <p>3. Destination Australia: Aims to support international students to study in regional Australia to regionally develop tertiary education providers in Australia and provide a learning experience to its students.</p>

                        <p class="mt-3">Explore <a href="{{ route('univercityranking') }}" style="font-weight: 700;"> Scholarships in Australia!</a></p>

                        <strong class="study_aus_font_size">Live life in the FastLane</strong>
                        <p>Want to check if you're eligible to get into your dream university? With FA Fastlane you can get an in-principle offer in seconds!</p>

                        <p class="mt-3">Enter your preferences to find and short list matching courses, provide your academic details and get ready to receive a response from your dream university within seconds!</p>

                        <a href="#" class="mt-3" style="display: block; font-size: 18px; font-weight: 700;">View Fastlane enabled universities</a>

                        <strong class="study_aus_font_size">How Much Will it Cost to study in Australia?</strong>
                        <p>FA not only helps choose the right course and university but also guides you on how to manage your living expenses.
                        Before you depart from Bangladesh, ensure that you consider expenses like accommodation, food, health coverage and
                        travel along with your tuition fee when calculating the estimated cost of studying in Australia. This will help you plan your budget more effectively.</p>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-striped-columns
                                        table-hover
                                        table-bordered
                                        table-primary
                                        align-middle">
                            <thead class="table-light table-border">
                                <caption>
                                    <p class="study_aust_table_und my-3">Find out more on <a href="#">Cost to study in australia!</a></p>
                                </caption>
                                <tr class="study_aus_font_weigt">
                                    <th>
                                        <h5>S.no</h5>
                                    </th>
                                    <th>
                                        <h5>Study Program/Degree</h5>
                                    </th>
                                    <th>
                                        <h5>Average Fees in $AUD*</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider study_table_text_und">
                                <tr class="table-secondary">
                                    <td scope="row">
                                        <p>1.</p>
                                    </td>
                                    <td>
                                        <p>School</p>
                                    </td>
                                    <td>
                                        <p>$7,800 to $30,000 annually</p>
                                    </td>
                                </tr>
                                <tr class="table-secondary">
                                    <td scope="row">
                                        <p>2.</p>
                                    </td>
                                    <td>
                                        <p>English language studies</p>
                                    </td>
                                    <td>
                                        <p>$300/week (varies as per course length)</p>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    <strong class="study_aus_font_size">Top Universities to Study in Australia</strong>
                    <p class="mt-2">With over 22,000 courses to study in Australia across 1,100 institutions, it may be a little challenging to pick the
                        right one. We have a huge database from where you can look up the university of your choice and know all about it in
                        detail. Go ahead and check now!</p>
                        <p class="study_aust_table_und my-3"><a href="#">Explore</a> Top Universities in Australia</p>

                        <strong class="study_aus_font_size">Visa Requirements to Study in Australia</strong>
                        <p class="mt-2">While it is a tedious task to apply for your visa all on your own, FA ensures that we make it easy for you. We guide
                        you with the latest visa updates and also help you make your application, while also prepping you up for the visa
                        interview. Some of the most common documents that you would require to study in Australia include:</p>
                        <ul style="padding: 0;" class="mt-2">
                            <li>• Genuine Temporary Entrant (GTE) requirement</li>

                            <li>• Financial requirements</li>

                            <li>• English proficiency requirements</li>

                            <li>• Health and character requirements</li>

                            <li class="my-3"><a href="#">Read up in detail about the visa process!</a></li>
                        </ul>
                        <strong class="study_aus_font_size">Why Study in Australia</strong>
                        <p class="mt-2">According to the QS Best Student Cities 2019, 7 Australian cities – Melbourne, Sydney, Brisbane, Canberra, Adelaide,
                        Perth and the Gold Coast – are in the world’s top 100 student cities.</p>

                        <p class="mt-2">If you want to study in Australia from Bangladesh, you are making a great choice. the country is known for its quality
                        of education, internationally accredited qualifications, lingual diversity, scholarship and internship opportunities,
                        and post-study work opportunities.</p>
                        <a href="#" class="my-2">Know more about Australia!</a><br>
                        <a href="#">Top Ranking Universities in Australia for 2023</a>
                        <p class="my-2">Updated on July 6, 2023</p>
                        <strong class="study_aus_font_size my-3">Find your perfect city</strong>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_aust.jpg" alt="explore_coun_aust.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Student Essentials</a>
                                <p class="my-3">We have a range of special services for students applying to Australia!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_canada.jpg" alt="explore_coun_canada.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Scholarships to study in Australia</a>
                                <p class="my-3">Australian universities and colleges provide a wide range of scholarships to meritorious international students to help
                                them fund their studies. Find out if you are eligible to receive a scholarship.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_aust.jpg" alt="explore_coun_aust.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Education system in Australia</a>
                                <p class="my-3">Australia is home to some of the world’s leading universities, consistently ranked in the world’s top 100. Let’s explore
                                the education system so we can find the best options for you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="{{ asset('frontend_assets') }}./images/explore_coun_new.jpg" alt="explore_coun_new.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Employment prospects in Australia</a>
                                <p class="my-3">Working part-time can be a great way to help cover your living expenses in Australia, but also help you gain work
                                experience in your field of study.</p>
                            </div>
                        </div>
                    </div>
@endsection


