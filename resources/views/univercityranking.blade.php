@extends('layouts.frontend.frontend_master')
@section('frontend_content')
     <!-- ========== Start Section study australia banner part  ========== -->
    <section id="university_ranking_banner_part">
        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home <i
                            class="fa-solid fa-angle-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('univercityranking') }}" class="text-white">
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
            <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button>
            <div class="row">
                <div class="col-lg-8">
                    <div class="title study_title_marg study_aus_width">
                        <h2 class="mb-3">Times Higher Education World University Rankings</h2>
                        <h4 class="mb-2">Find out where your university ranks on the global map</h4>
                        <p>Australia is a popular destination for international students from around the world. Home to
                            leading universities, it
                            offers a relaxed, affordable study experience and strong career opportunities in some of the
                            world’s most liveable
                            cities, including Sydney and Melbourne.</p>
                        <p class="mt-4">Deciding the right place to study overseas requires you to consider many factors. From the university’s reputation,
                        curriculum, faculty, student-teacher ratio, scope of research, employment opportunities to campus diversity and
                        international exposure; there isn’t a single thing you can miss when finalising your future institution.</p>
                        <button class="study_aust_btn">
                            <a href="#">Get Free Assistance From Our Experts</a>
                        </button>
                        <p class="my-3">We know this can get tedious, but you can largely map these factors by looking at the world university rankings, which
                        compare key performance indicators across different universities or schools.</p>
                        <p>Most students planning to go abroad consider these five internationally recognised university rankings. Do note that
                        each university ranking table has been developed using its own ranking system and there are differences across each of
                        the ranking tables.</p>
                        <ul class="uni_rank_list_font">
                            <li><b>Times Higher Education World University Rankings</b></li>
                            <p>The influencers under this ranking include teaching (30%), research (30%), citation (30%), industry connections (2.5%),
                            and international outlook (7.5%).</p>
                            <hr>
                            <li><b>QS World University Rankings</b></li>
                            <p>The QS system considers the university’s reputation among other universities (40%), employers (10%), student-teacher
                            ratio (20%), citations-academic staff ratio (20%) and international outlook including students and staff (10%) for its
                            compilation of top universities in the world.</p>
                            <li><b>Academic Ranking of World Universities</b></li>
                            <p>Also known as the Shanghai Ranking, ARWU is based on citation indices of articles (20%), articles in the journals in
                            Nature or Science (20%), highly cited (top 1%) scientists (20%), if an alumnus or alumna of the university is a Nobel
                            laureate (10%), receiving a Nobel prize or a Fields Medal whilst working in the university (20%) and the ratio of the
                            above achievements to the number of academic staff (10%). ARWU can be quite beneficial for students going for research
                            or doctoral degrees.</p>
                            <hr>
                            <li><b>CWTS Leiden Ranking</b></li>
                            <p>Universities are ranked on the basis of bibliometric statistics as per CWTS Leiden Ranking - citation impact and
                            scientific collaboration. You can study the ranking of a particular institution by selecting the time period, field,
                            country, and your preferred type of indicator.</p>
                            <li><b>The Webometrics Ranking</b></li>
                            <p>Unlike the conventional parameters, the Webometrics Ranking system uses the university’s web presence, web access, and
                            visibility as its indicators for its ranking.</p>
                        </ul>

                        <p class="mb-4">Some common scholarships programs available to international students in
                            Australia include:</p>

                        <p class="mb-4">1. Australia Awards: Funded by the Department of Education and the Australian
                            Centre for International Agricultural Research (ACIAR) and the Department of Foreign Affairs
                            (DFAT).</p>

                        <p class="mb-4">2. Australian Government Research and Training Program (AGRTP): Funded by the
                            Australian Government, the scholarship covers tuition fee and health insurance of the
                            student for up to 3 years.</p>

                        <p>3. Destination Australia: Aims to support international students to study in regional
                            Australia to regionally develop tertiary education providers in Australia and provide a
                            learning experience to its students.</p>

                        <p class="mt-3">Explore <a href="#" style="font-weight: 700;"> Scholarships in Australia!</a>
                        </p>

                        <strong class="study_aus_font_size">Live life in the FastLane</strong>
                        <p>Want to check if you're eligible to get into your dream university? With FA Fastlane you can
                            get an in-principle offer in seconds!</p>

                        <p class="mt-3">Enter your preferences to find and short list matching courses, provide your
                            academic details and get ready to receive a response from your dream university within
                            seconds!</p>

                        <a href="#" class="mt-3" style="display: block; font-size: 18px; font-weight: 700;">View
                            Fastlane enabled universities</a>

                        <strong class="study_aus_font_size">How Much Will it Cost to study in Australia?</strong>
                        <p>FA not only helps choose the right course and university but also guides you on how to manage
                            your living expenses.
                            Before you depart from Bangladesh, ensure that you consider expenses like accommodation,
                            food, health coverage and
                            travel along with your tuition fee when calculating the estimated cost of studying in
                            Australia. This will help you plan your budget more effectively.</p>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table table-striped-columns
                                        table-hover
                                        table-bordered
                                        table-primary
                                        align-middle">
                            <thead class="table-light table-border">
                                <caption>
                                    <p class="study_aust_table_und my-3">Find out more on <a href="#">Cost to study in
                                            australia!</a></p>
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
                    <p class="mt-2">With over 22,000 courses to study in Australia across 1,100 institutions, it may be
                        a little challenging to pick the
                        right one. We have a huge database from where you can look up the university of your choice and
                        know all about it in
                        detail. Go ahead and check now!</p>
                    <p class="study_aust_table_und my-3"><a href="#">Explore</a> Top Universities in Australia</p>

                    <strong class="study_aus_font_size">Visa Requirements to Study in Australia</strong>
                    <p class="mt-2">While it is a tedious task to apply for your visa all on your own, FA ensures that
                        we make it easy for you. We guide
                        you with the latest visa updates and also help you make your application, while also prepping
                        you up for the visa
                        interview. Some of the most common documents that you would require to study in Australia
                        include:</p>
                    <ul style="padding: 0;" class="mt-2">
                        <li>• Genuine Temporary Entrant (GTE) requirement</li>

                        <li>• Financial requirements</li>

                        <li>• English proficiency requirements</li>

                        <li>• Health and character requirements</li>

                        <li class="my-3"><a href="#">Read up in detail about the visa process!</a></li>
                    </ul>
                    <strong class="study_aus_font_size">Why Study in Australia</strong>
                    <p class="mt-2">According to the QS Best Student Cities 2019, 7 Australian cities – Melbourne,
                        Sydney, Brisbane, Canberra, Adelaide,
                        Perth and the Gold Coast – are in the world’s top 100 student cities.</p>

                    <p class="mt-2">If you want to study in Australia from Bangladesh, you are making a great choice.
                        the country is known for its quality
                        of education, internationally accredited qualifications, lingual diversity, scholarship and
                        internship opportunities,
                        and post-study work opportunities.</p>
                    <a href="#" class="my-2">Know more about Australia!</a><br>
                    <a href="#">Top Ranking Universities in Australia for 2022</a>
                    <p class="my-2">Updated on July 6, 2020</p>
                    <strong class="study_aus_font_size my-3">Find your perfect city</strong>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="./images/explore_coun_aust.jpg" alt="explore_coun_aust.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Student Essentials</a>
                                <p class="my-3">We have a range of special services for students applying to Australia!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="./images/explore_coun_canada.jpg" alt="explore_coun_canada.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Scholarships to study in Australia</a>
                                <p class="my-3">Australian universities and colleges provide a wide range of
                                    scholarships to meritorious international students to help
                                    them fund their studies. Find out if you are eligible to receive a scholarship.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="./images/explore_coun_aust.jpg" alt="explore_coun_aust.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Education system in Australia</a>
                                <p class="my-3">Australia is home to some of the world’s leading universities,
                                    consistently ranked in the world’s top 100. Let’s explore
                                    the education system so we can find the best options for you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row study_box_shadow mt-3">
                        <div class="col-lg-6 p-0">
                            <div class="study_aboard_bg_item p-0">
                                <div class="img">
                                    <img src="./images/explore_coun_new.jpg" alt="explore_coun_new.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aboard_bg_item">
                                <a href="#">Employment prospects in Australia</a>
                                <p class="my-3">Working part-time can be a great way to help cover your living expenses
                                    in Australia, but also help you gain work
                                    experience in your field of study.</p>
                            </div>
                        </div>
                    </div>
                    <!-- =======study success start========= -->
                    <div class="row mt-4 study_succ_marg">
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="./images/study_succ1.jpg" alt="study_succ1.jpg">
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
                                    <img src="./images/study_succ2.jpg" alt="study_succ2.jpg">
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
                                    <img src="./images/study_succ3.jpg" alt="study_succ3.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Let's help you study abroad</a></h5>
                                    <p>We find a student the right place to study every 15 minutes. Be the next one.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 study_succ_marg">
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="./images/study_succ1.jpg" alt="study_succ1.jpg">
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
                                    <img src="./images/study_succ2.jpg" alt="study_succ2.jpg">
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
                                    <img src="./images/study_succ3.jpg" alt="study_succ3.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Let's help you study abroad</a></h5>
                                    <p>We find a student the right place to study every 15 minutes. Be the next one.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 study_succ_marg">
                        <div class="col-lg-4">
                            <div class="study_succe_item">
                                <div class="study_succ_img">
                                    <img src="./images/study_succ1.jpg" alt="study_succ1.jpg">
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
                                    <img src="./images/study_succ2.jpg" alt="study_succ2.jpg">
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
                                    <img src="./images/study_succ3.jpg" alt="study_succ3.jpg">
                                </div>
                                <div class="study_succ_text">
                                    <h5><a href="#">Let's help you study abroad</a></h5>
                                    <p>We find a student the right place to study every 15 minutes. Be the next one.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="my-3">Further research</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="study_aus_research_item_res">
                                <a href="student_health_cover.html">Common Healthcare Words</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aus_research_item_res">
                                <a href="student_safety.html">Overseas Student Health Cover (OSHC)</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="study_aus_item_res text-center">
                                <h3>What Our Customers Are Saying</h3>
                                <h4 class="my-2">534+ reviews</h4>
                                <div class="study_aut_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half"></i>
                                </div>
                                <h5 class="mt-2">4.4/5</h5>
                                <button class="btn btn-warning study_aus_btn_col mt-3">
                                    <a href="#">Help me study aboard</a>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="study_aus_item_res text-center">
                                <h4><a href="#">Great support!!</a></h4>
                                <p class="my-2">Amazing place for educational counseling. I strongly recommend FA for
                                    your study partner. especially, Afroz Jahan
                                    Fredous (Apu) helped me a lot with the application process and explained step by
                                    step what would be needed. I highly
                                    appreciate Afroz Jahan Ferdous (Apu) for her excellent service.</p>
                                <p class="">Student from Gulshan, Dhaka</p>
                            </div>
                        </div>
                    </div>
                    <!-- =======study success end========= -->
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
                            <div class="study_form_term_cond student_ess_form_marg_btm">
                                <label for="" class="form-label mb-2 mt-4">FA will not share your details with
                                    others
                                    without
                                    your permission:</label>
                                <div class="check_box mb-4">
                                    <input type="checkbox" class="styled-checkbox" name="check_box" />
                                    <label class="study_term_cond_mar">
                                        I agree to FA <a target="_blank" href="#">Terms</a> and <a target="_blank" href="#">privacy policy</a></label>
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
                                <a href="{{ route('getpersonaladvice') }}">Get Personal advice</a>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============event fount part end======== -->
@endsection
