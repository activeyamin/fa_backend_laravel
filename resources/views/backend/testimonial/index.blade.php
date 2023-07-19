@extends('layouts.backend.backend_master')
@section('backend_content')
    <div class="container">
            <div class="row">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('testimonial.index') }}">Testimonial Add</a></li>
        </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h2>Testimonial add title</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('testimonial.create') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="" class="form-label">Testimonial Title One</label>
                        <input type="text" class="form-control" name="testimonial_title_one" placeholder="example title">
                            <small class="form-text text-danger">@error('testimonial_title_one') {{ $message }} @enderror</small>
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Testimonial Short Title One</label>
                        <input type="text" class="form-control" name="testimonial_short_title_one" placeholder="example short title">
                            <small class="form-text text-danger">@error('testimonial_short_title_one') {{ $message }} @enderror</small>
                        </div>
                        <br>
                        <div class="mb-3">
                        <label for="" class="form-label">Testimonial Title Tow</label>
                        <input type="text" class="form-control" name="testimonial_title_tow" placeholder="example title">
                            <small class="form-text text-danger">@error('testimonial_title_tow') {{ $message }} @enderror</small>
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Testimonial Short Title Tow</label>
                        <input type="text" class="form-control" name="testimonial_short_title_tow" placeholder="example short title">
                            <small class="form-text text-danger">@error('testimonial_short_title_tow') {{ $message }} @enderror</small>
                        </div>
                        <br>
                        <div class="mb-3">
                        <label for="" class="form-label">Testimonial Title Three</label>
                        <input type="text" class="form-control" name="testimonial_title_one" placeholder="example title">
                            <small class="form-text text-danger">@error('testimonial_title_one') {{ $message }} @enderror</small>
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Testimonial Short Title Three</label>
                        <input type="text" class="form-control" name="testimonial_short_title_three" placeholder="example short title">
                            <small class="form-text text-danger">@error('testimonial_short_title_three') {{ $message }} @enderror</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="testimonial_submit_btn" class="btn btn-primary">Add Testimonial</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
