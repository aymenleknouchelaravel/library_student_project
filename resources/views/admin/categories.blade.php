@extends('layouts.admin')

@section('title', 'Dashboard | Categories')


@section('header')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> All Categories
            </h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Category Name </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td> {{ $category->name }} </td>
                                    <td>
                                        <form action="/admin/category/delete/{{ $category->id }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-inverse-danger btn-fw">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('content')

@endsection
