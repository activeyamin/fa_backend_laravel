@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <!-- ========== Start Section office location Part ========== -->
    <section id="office_location_part">
        <nav class="evnt_bradcrmb_marg" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
            <ol class="breadcrumb more_info_event_colo">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="index.html"><i class="fa-solid fa-angle-right"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Office Location</li>
            </ol>
        </nav>
        <div class="container">
            <div class="title">
                <h2>FA office Location</h2>
            </div>
            <div class="mb-3 offi_src_rel">
              <label for="" class="form-label">Enter a town, city, postcode or zip code:</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId">
                <a href="#"><i class="fa-solid fa-magnifying-glass office_src_icon"></i></a> <strong class="off_con_or">Or</strong>
                <button type="button" class="btn btn offi_btn_bg">
                    <a href="office_location.html">Find Offices near you</a>
                </button>
            </div>
        </div>
    </section>
    @endsection
<!-- ========== End Section office location Part ========== -->
