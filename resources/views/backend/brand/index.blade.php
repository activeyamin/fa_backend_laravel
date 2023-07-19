@extends('layouts.backend.backend_master')
@section('backend_content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Brand Add</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="brand_name" id="" placeholder="brand name">
                            <small class="form-text text-muted">Help text</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Brand Photo</label>
                            <input type="file" class="form-control" name="" id="" aria-describedby="fileHelpId">
                            <div class="form-text">Help text</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
