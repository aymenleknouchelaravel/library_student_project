@extends('layouts.client')

@section('title', 'Home')

@section('content')
    <img style="height: 700px; width:100%;padding-top:70px;" class="img-fluid " src="../img.jpg" alt="">
    <section class="blog-posts grid-system">
        <div class="container">
            <div class="all-blog-posts">
                <br>
                <div style="padding-top: 30px" class="row">
                    @foreach ($books as $book)
                        <div class="col-md-3 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="../storage/{{ $book->cover }}" alt="">
                                </div>
                                <div class="down-content p-2">
                                    <span style="font-size: 13px"> {{ $book->author }} </span>
                                    <a href="">
                                        <h4>{{ $book->name }}</h4>
                                    </a>
                                    <p class="py-1">{{ $book->description }}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-bullseye"></i></li>
                                                    <li><a target="_blank" href="../storage/{{ $book->file }}">View
                                                            Book</a></li>
                                                    <br>
                                                    <li class=""><i class="fa fa-bullseye"></i></li>
                                                    <li class="ml-1"><a
                                                            href="/client/download/{{ $book->id }}">Download Book</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
