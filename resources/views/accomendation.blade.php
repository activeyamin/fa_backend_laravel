@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section explore countries  ========== -->
    <section id="accomendation_banner"></section>
    <!-- ========== End Section explore countries ========== -->
    <!-- =============explore part start======== -->
    <section id="study_aboard_part">
        <div class="container">
            {{-- <button type="button" class="study_shear_btn btn btn-outline-secondary mt-3">
                <a href="#"><i class="fa-solid fa-share-nodes"></i> Share</a>
            </button> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="title study_title_marg">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h2>Looking for accommodation?</h2> --}}
                                <div class="mb-3">
                                  <form action="#">
                                    <label for="" class="form-label">Looking for accommodation?</label>
                                    <select multiple class="form-select form-select-lg" name="" id="">
                                            <option selected>Select Destination</option>
                                            <option value="canada">Australia</option>
                                            <option value="australia">Canada</option>
                                            <option value="indai">India</option>
                                            <option value="usa">USA</option>
                                        </select>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <small>
                        Recommended properties shown below do not reflect real-time room availability or final pricing. For current availability and accurate pricing please click on the 'Proceed to book' link under the desired property.
                    </small>
                    <hr>
                    <br>
                    <strong>Find your home away from home</strong>
                    <p class="my-2">
                        Choosing where to live is a big decision. You’ll want to love where you live, so you can get the most from your international study experience. You need to feel safe, with access to people that can support you when needed.
                    </p>
                    <p class="my-2">
                        <strong>Why FA?</strong><br>
                        FA can guide you to choose your next home through our trusted accommodation partners across Australia, Canada, UK, USA, and New Zealand. We also have access to some exclusive IDP rates and deals. Use our comparison tool or ask your IDP counsellor for help choosing the right option for you. They can also help you through the application process once you’ve made your decision.
                    </p>
                    <strong>Your stay options</strong>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Student Apartments</strong>
                            <p class="my-2">
                                Student apartments are a fantastic choice if you are looking for convenience, affordability and the chance to share your experience with students from all over the world. Everything you need is in one place and you can move in straight away.
                            </p>
                            <strong>Why choose a Student Apartment?</strong>
                            <ul class="accomendation_list">
                                <li>
                                    It's easy to make friends and socialise
                                </li>
                                <li>
                                    Support staff are available if need help or are unsure about anything
                                </li>
                                <li>
                                    Apartments are usually close to campus, so you spend less time travelling
                                </li>
                                <li>
                                    You live in a safe, secure environment.
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <strong>Student Apartments</strong>
                            <p class="my-2">
                                A Homestay is perfect if you want to stay with a local family to experience their culture and lifestyle. Host families chosen by our providers are easy-going, friendly people and will make you welcome in their home. You all stay in a comfortable room of your own and share meals at home with your new family. Your host can also give you tips on interesting places to explore and how to get there.
                            </p>
                            <strong>Why choose a Student Apartment?</strong>
                            <ul class="accomendation_list">
                                <li>
                                    It's easy to make friends and socialise
                                </li>
                                <li>
                                    Support staff are available if need help or are unsure about anything
                                </li>
                                <li>
                                    Apartments are usually close to campus, so you spend less time travelling
                                </li>
                                <li>
                                    You live in a safe, secure environment.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <caption class="mb-2">
                        We have done the hard work for you by putting together an awesome range of accommodation options to fit your needs and budget. All our partners are chosen for their reputation as trusted accommodation providers for students.
                    </caption><br>

                </div>
            </div>
        </div>
    </section>
    <!-- =============explore part end======== -->
@endsection
