
@extends('layouts.backend.backend_master')
@section('backend_content')
{{-- home student table list body start --}}
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
                        <h4>Student Register list</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-lg" id="student_table_search">
                            <table class="table table-striped
                            table-hover
                            table-bordered
                            table-dark
                            align-middle">
                                <thead class="table-light">
                                <caption>Student Register From Table</caption>
                                <tr>
                                    <th>SN:</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                    <th>Created at</th>
                                    <th>Phone Number</th>
                                </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @forelse ($users as $user)
                                            <tr class="">
                                                <td>{{ $loop->index +1 }}</td>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->first_name }},{{ $user->last_name }} </td>
                                                <td>{{ $user->email }}</td>
                                                <td>status</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->phone_number }}</td>
                                            </tr>
                                        @empty
                                            <tfoot>
                                                <tr>
                                                    <td colspan="50" class="text-danger text-center table-danger">no data show hear</td>
                                                </tr>
                                            </tfoot>
                                        @endforelse
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- home student table list body end --}}

@endsection
