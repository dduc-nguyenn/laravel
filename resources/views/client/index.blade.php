@extends('client.layouts.master')

@section('title')
    Home
@endsection

@section('text')
    Bạn Thích Đọc Gì <br> Vào Ngày Hôm Nay?
@endsection

@section('content')
    @include('client.layouts.components.banner', ['data' => $categories])
 
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Biên tập chọn</h2>
                    @foreach ($editors as $item)
                        <article class="card">
                            <div class="post-slider slider-sm">
                                <img src="{{ $item->thumbnail }}" class="card-img-top" alt="post-thumb">
                            </div>

                            <div class="card-body">
                                <h3 class="h4 mb-3">
                                    <a class="post-title" href="{{ route('post_detail', $item->id) }}">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author-single.html" class="card-meta-author">
                                            <img src="">
                                            <span>Đức</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $item->format_created_at }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a href="{{ route('category', $item->category_id) }}">{{ $item->category->name }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>{{ substr($item->content, 0, 50) . '...' }}</p>
                                <a href="{{ route('post_detail', $item->id) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết xu hướng</h2>
                    @foreach ($trending as $item)
                        <article class="card mb-4">
                            <div class="card-body d-flex">
                                <img class="card-img-sm" src="{{ $item->thumbnail }}">
                                <div class="ml-3">
                                    <h4><a href="{{ route('post_detail', $item->id) }}" class="post-title">{{ $item->title }}</a>
                                    </h4>
                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>{{ $item->format_created_at }}
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-timer"></i>2 Min To Read
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Bài viết phổ biến</h2>
                    @foreach ($popular as $item)
                        <article class="card">
                            <div class="post-slider slider-sm">
                                <img src="{{ $item->thumbnail }}" class="card-img-top" alt="post-thumb">
                            </div>
                            <div class="card-body">
                                <h3 class="h4 mb-3">
                                    <a class="post-title" href="{{ route('post_detail', $item->id) }}">
                                        {{ $item->title }}
                                    </a>
                                </h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author-single.html" class="card-meta-author">
                                            <img src="" alt="">
                                            <span>Đức</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $item->format_created_at }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a href="{{ route('category', $item->category_id) }}">{{ $item->category->name }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>{{ substr($item->content, 0, 50) . '...' }}</p>
                                <a href="{{ route('post_detail', $item->id) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Bài viết gần đây</h2>
                    @foreach ($recent as $item)
                        <article class="card mb-4">
                            <div class="post-slider">
                                <img src="{{ $item->thumbnail }}" class="card-img-top" alt="post-thumb">
                                {{-- <img src="/theme/client/images/post/post-1.jpg" class="card-img-top" alt="post-thumb"> --}}
                            </div>
                            <div class="card-body">
                                <h3 class="mb-3"><a class="post-title" href="{{ route('post_detail', $item->id) }}">{{ $item->title }}</a>
                                </h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author-single.html" class="card-meta-author">
                                            <img src="" alt="">
                                            <span>Đức</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>3 Min To Read
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $item->format_created_at }}
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a href="{{ route('category', $item->category_id) }}">{{ $item->category->name }}</a></li>                                        </ul>
                                    </li>
                                </ul>
                                <p>
                                    {{ $item->content }}
                                </p>
                                <a href="{{ route('post_detail', $item->id) }}" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </article>
                    @endforeach

                    <ul class="pagination justify-content-center">
                        <li class="page-item page-item active ">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
