<div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="/">
            <img class="img-fluid" width="100px" src="/theme/client/images/logo.png"
                alt="Reader | Hugo Personal Blog Template">
        </a>

        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Trang chủ
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Về chúng tôi</i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Liên hệ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/posts">Bài viết</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="shop.html">Shop</a>
                </li>
            </ul>
        </div>

        <div class="order-2 order-lg-3 d-flex align-items-center">

            <form class="search-bar" method="GET" action="{{ route('search_post') }}">
                <input id="search-query" name="search" type="search" placeholder="Bạn tìm gì hôm nay..."
                    value="{{ request('search') }}">
            </form>

            <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                data-target="#navigation">
                <i class="ti-menu"></i>
            </button>
        </div>
    </nav>
</div>
