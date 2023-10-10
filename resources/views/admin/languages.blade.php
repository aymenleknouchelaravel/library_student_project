@extends('layouts.admin')

@section('title', 'Dashboard | Books')


@section('header')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> All Languages
            </h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Language Name </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($languages as $language)
                                <tr>
                                    <td> {{ $language->name }} </td>
                                    <td>
                                        <form action="/admin/language/delete/{{ $language->id }}" method="post">
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
