@extends('layouts.admin')

@section('title', 'Dashboard | Books')


@section('header')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> All Users
            </h3>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Lasname </th>
                                <th> Email </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->role == 'client')
                                    <tr>
                                        <td> {{ $user->name }} </td>
                                        <td> {{ $user->surname }} </td>
                                        <td> {{ $user->email }} </td>
                                        <td>
                                            <form action="/admin/user/delete/{{ $user->id }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-inverse-danger btn-fw">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
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
