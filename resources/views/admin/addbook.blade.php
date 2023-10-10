@extends('layouts.admin')

@section('title', 'Dashboard | Analytics')


@section('header')
    @include('shared.errors')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Add New Book
            </h3>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/addbook" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" id="exampleInputUsername2"
                                    placeholder="......................">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input name="description" type="text" class="form-control" id="exampleInputEmail2"
                                    placeholder="......................">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Author</label>
                            <div class="col-sm-9">
                                <input name="author" type="text" class="form-control" id="exampleInputEmail2"
                                    placeholder="......................">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Pages Count</label>
                            <div class="col-sm-9">
                                <input name="nbr_pages" type="number" class="form-control" id="exampleInputEmail2"
                                    placeholder="......................">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Language</label>
                            <div class="col-sm-9">
                                <select name="language_id" class="form-control form-control-lg"
                                    id="exampleFormControlSelect1">
                                    @foreach ($languages as $language)
                                        <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <select name="category_id" class="form-control form-control-lg"
                                    id="exampleFormControlSelect1">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Book Cover</label>
                            <div class="col-sm-9">
                                <input name="cover" type="file" class="form-control" id="exampleInputEmail2"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Book File</label>
                            <div class="col-sm-9">
                                <input name="file" type="file" class="form-control" id="exampleInputEmail2"
                                    placeholder="Email">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary me-2">Add This Book</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

@endsection
