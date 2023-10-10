@extends('layouts.admin')

@section('title', 'Dashboard | Analytics')


@section('header')
    @include('shared.errors')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Add New Category
            </h3>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/addcategory" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="......................">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Add This Category</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

@endsection
