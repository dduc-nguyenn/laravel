@extends('client.layouts.master')

@section('title')
    Search
@endsection

@section('content')
    <div class="py-3"></div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4">Tìm kiếm từ khóa:
                        <mark>{{ $_GET['search'] }}</mark>
                    </h1>
                </div>
                
                @if ($posts->isNotEmpty())
                    <div class="col-lg-10">
                        @foreach ($posts as $item)
                            <article class="card mb-4">
                                <div class="row card-body">
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <div class="post-slider slider-sm">
                                            <img src="{{ $item->thumbnail }}" class="card-img" alt="post-thumb"
                                                style="height:200px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
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
                                                <i class="ti-timer"></i>3 Min To Read
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ti-calendar"></i>{{ $item->format_created_at }}
                                            </li>
                                            <li class="list-inline-item">
                                                <ul class="card-meta-tag list-inline">
                                                    <li class="list-inline-item"><a
                                                            href="{{ route('category', $item->category_id) }}">{{ $item->category->name }}</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p>
                                            {{ $item->content }}
                                        </p>
                                        <a href="{{ route('post_detail', $item->id) }}" class="btn btn-outline-primary">Read
                                            More</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="col-lg-10 text-center">
                        <img class="mb-5" src="images/no-search-found.svg" alt="">
                        <h3>No Search Found</h3>
                    </div>
            </div>
        </div>
    </section>
    @endif
@endsection
