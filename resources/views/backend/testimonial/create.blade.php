@extends('layouts.backend.backend_master')
@section('backend_content')
   <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('testimonial.create') }}">Testimonial list</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Testimonial title</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">SN</th>
                                        <th scope="col">Testimonial title</th>
                                        <th scope="col">Testimonial short title</th>
                                        <th scope="col">Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($testimonials as $testimonial)
                                        <tr class="">
                                            <td>{{ $loop->index +1 }}</td>
                                            <td scope="row">{{ $testimonial->testimonial_title_one }}</td>
                                            <td>{{ $testimonial->testimonial_short_title_one }}</td>
                                            <td>{{ $testimonial->created_at }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="50" class="text-danger text-center">no data show here</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
