@extends('layouts.admin')

@section('title', 'Dashboard | Analytics')


@section('header')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Analytics
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        Overview
                        <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Books <i
                                class="mdi mdi-book-multiple mdi-24px float-right"></i>
                        </h4>
                        <h2>{{$books}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Categories<i
                                class="mdi mdi-shape mdi-24px float-right"></i>
                        </h4>
                        <h2>{{$categories}}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Languages <i
                                class="mdi mdi-alpha-t-box mdi-24px float-right"></i>
                        </h4>
                        <h2>{{$languages}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

@endsection
