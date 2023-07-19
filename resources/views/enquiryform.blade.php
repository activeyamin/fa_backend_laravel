@extends('layouts.frontend.frontend_master')
@section('frontend_content')
    <section id="enquiry_form_banner">
        <div class="container py-4">
            <h2>4O4</h2>
            <h3 class="my-3">Sorry about that</h3>
            <h4>The page you’re looking for is busy studying in Sydney</h4>
            <div class="equiry_form_btn mt-4">
                <a class="btn btn-success" href="{{ url('/') }}">Go Home</a>
                <a class="btn btn-success" href="{{ route('findcourse') }}">Find a Course</a>
            </div>
        </div>
    </section>
@endsection
