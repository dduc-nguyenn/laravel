@extends('client.layouts.master')

@section('title')
    Posts
@endsection

@section('content')
    <div class="py-4"></div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 mb-5 mb-lg-0">
                    <article>
                        @foreach ($posts as $item)
                            <div class="post-slider mb-4">
                                <img src="{{ $item->thumbnail }}" class="card-img" alt="post-thumb">
                            </div>
                            <h2><a class="post-title" href="{{ route('post_detail', $item->id) }}">{{ $item->title }}</a>
                            </h2>
                            <ul class="card-meta my-3 list-inline">
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
                            <div class="py-2"></div>
                        @endforeach
                    </article>
                    <div class="mt-5">
                        <div class="mb-5 border-top mt-4 pt-5">
                            <h3 class="mb-4">Comments</h3>
                            <div class="media d-block d-sm-flex mb-4 pb-4">
                                <a class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                    <img src="images/post/user-01.jpg" class="mr-3 rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#!" class="h4 d-inline-block mb-3">Alexender Grahambel</a>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.</p>
                                    <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                                    <a class="text-primary font-weight-600" href="#!">Reply</a>
                                </div>
                            </div>
                            <div class="media d-block d-sm-flex">
                                <div class="d-inline-block mr-2 mb-3 mb-md-0" href="#">
                                    <img class="mr-3" src="images/post/arrow.png" alt="">
                                    <a href="#!"><img src="images/post/user-02.jpg" class="mr-3 rounded-circle"
                                            alt=""></a>
                                </div>
                                <div class="media-body">
                                    <a href="#!" class="h4 d-inline-block mb-3">Nadia Sultana Tisa</a>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.</p>
                                    <span class="text-black-800 mr-3 font-weight-600">April 18, 2020 at 6.25 pm</span>
                                    <a class="text-primary font-weight-600" href="#!">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="mb-4">Leave a Reply</h3>
                            <form method="POST">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control shadow-none" name="comment" rows="7" required></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control shadow-none" type="text" placeholder="Name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control shadow-none" type="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input class="form-control shadow-none" type="url" placeholder="Website">
                                        <p class="font-weight-bold valid-feedback">OK! You can skip this field.</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Comment Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
