@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <section id="find_course_view_all_chemistry_banner">
        <nav class="evnt_bradcrmb_marg"
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item event_bread_col"><a href="{{ url('/') }}">FA Bangladesh</a>
                    </li>
                </ol>
            </nav>
    </section>
    {{-- find course view all babber part start --}}
    {{-- find course view all conntend part start --}}
    <section id="find_course_view_content">
        <div class="container view_all_box_shadow">
                <div class="row" style="padding: 0 60px; position: relative;">
                    <div class="col-lg-12 find_view_cours_pos">
                        <div class="card">
                            <div class="card-header py-4">
                                <h2 class="text-success mb-2">Study chemistry abroad</h2>
                                <h5>Studying Chemistry will equip you with a thorough understanding of the chemicals that exist in the world around us and give you the chance to make a real difference in people’s everyday lives, from food and medicine to technology and consumer goods.</h5>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-lg-3">
                                        <div class="view_content_item">
                                            <div class="icon">
                                                <i class="fa-solid fa-folder-tree"></i>
                                            </div>
                                            <h5>The median salary for chemists is USD$83,850</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="view_content_item">
                                            <div class="icon">
                                                <i class="fa-solid fa-chart-line"></i>
                                            </div>
                                            <h5>The demand for chemists is expected to grow 4% by 2028</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="view_content_item">
                                            <div class="icon">
                                                <i class="fa-solid fa-folder-tree"></i>
                                            </div>
                                            <h5>Chemists working in R&D earn an average of USD$92,830 a year</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="view_content_item" style="border-right: 0">
                                            <h4>61%</h4>
                                            <h5>More than 61% of Chemistry graduates find full-time employment after graduation</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="view_all_course_accrodian">
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                <h3>About chemistry</h3>
                                            </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <p>
                                                  Chemistry is a fascinating field that influences every facet of our lives, from the energy our cities run on to the medicines we take. By analysing how substances interact with each other and the molecular makeup of matter, chemists are able to develop new products and processes in a wide range of settings. Chemists might work with simple forms of matter, either to better understand the chemical, get insights into unfamiliar substances, or create new chemical compounds for various uses.
                                                </p>
                                                <p class="mt-4">
                                                    Whether you’re interested in developing new vaccines, conducting forensic analysis in criminal cases, improving the environment or formulating innovative cosmetic products, studying Chemistry can get you there.

                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                <h3>Is chemistry right for me?</h3>
                                            </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <p>
                                                  To succeed in the world of Chemistry, you’ll need to be familiar with a wide range of analytical instruments and techniques. You will also handle hazardous materials on a daily basis and need to abide by the proper safety protocol at all times. Collecting data and writing reports are other major parts of the role, meaning you’ll need strong communication skills and a brilliant eye for detail.
                                                </p>
                                                <p class="mt-4">
                                                    In terms of personality, chemists tend to be investigative and inquisitive people. They are also methodical and logical, capable of creating hypotheses, following procedures and documenting results.
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                               <h3>chemistry study options and costs</h3>
                                            </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <p>
                                                  Chemistry is a field that requires a high level of education. 88% of chemists have a Bachelor's degree, while 7% have gone the extra mile by completing a Master’s degree. A Bachelor of Science with a major in Chemistry, Biochemistry or Chemical Engineering are especially relevant pathways to consider. Other fascinating specialisations include nuclear chemistry, theoretical chemistry or neurochemistry.
                                                </p>
                                                <p class="my-4">
                                                  As a rough guide, a Bachelor of Science costs around AUD$40,000 a year in Australia and roughly £30,000 a year in the UK. With a degree under your belt, you will be able to access careers in medical science, food science, chemical engineering and even out-of-the-box fields such as education and IT.
                                                </p>
                                                <div class="view_all_course_flag">
                                                    <i class="fa-solid fa-flag "></i>
                                                </div>
                                                <p class="view_all_course_flage_pera_pos">
                                                  Finally, remember that even after obtaining a qualification, you might require certifications or security clearances for certain roles. This could be an Amazon Web Services certification, an industry accreditation like CISA or CISSP, or a Google certification, depending on the kinds of roles you’re aiming for.
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- find course view all conntend part end --}}

@endsection
