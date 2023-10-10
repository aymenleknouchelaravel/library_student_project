@extends('layouts.admin')

@section('title', 'Dashboard | Books')


@section('header')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> All Books
            </h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Book Name </th>
                                <th> Author name </th>
                                <th> Category </th>
                                <th> Language </th>
                                <th> Pages Count </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td> {{ $book->name }} </td>
                                    <td> {{ $book->author }} </td>
                                    <td> {{ $book->category->name }} </td>
                                    <td> {{ $book->language->name }} </td>
                                    <td> {{ $book->nbr_pages }} </td>
                                    <td>
                                        <form action="/admin/book/delete/{{ $book->id }}" method="post">
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
