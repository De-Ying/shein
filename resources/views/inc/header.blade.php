<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="{{ route('home_page') }}"><img src="{{ asset('public/frontend/images/logo.png') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{ route('home_page') }}" class="menu-link">Trang chủ</a></li>
                        <li><a href="{{ route('product.category_slug', ['category_slug' => 'thoi-trang-nu']) }}" class="menu-link">Thời trang nữ</a></li>
                        <li><a href="{{ route('product.category_slug', ['category_slug' => 'thoi-trang-nam']) }}" class="menu-link">Thời trang nam</a></li>
                        <li>
                            <a href="{{ route('product.all') }}" class="menu-link">Sản phẩm</a>
                            <div class="dropdown">
                               <ul>
                                    <li>
                                        <a href="{{ route('product.category_featured', ['category_featured' => 'san-pham-moi']) }}">Mới Sản phẩm mới</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product.category_featured', ['category_featured' => 'san-pham-noi-bat']) }}">Mới Sản phẩm nổi bật</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product.category_featured', ['category_featured' => 'san-pham-khuyen-mai']) }}">Mới Sản phẩm khuyến mại</a>
                                    </li>
                               </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('blog.all') }}" class="menu-link">Bài viết</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__right">
                    <div class="header__right__auth">
                        <a href="{{ route('buyer.login') }}">Đăng nhập</a>
                        <a href="{{ route('buyer.signup') }}">Đăng ký</a>
                    </div>
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>
                        <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        <li class="m-cart">
                            <a href="{{ route('cart.view_cart') }}"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a>
                            <div class="dropdown">
                                <div class="mini-cart__list">
                                    <div class="mini-cart__item">
                                        <div class="slot">
                                            <input type="checkbox" name="" id="">
                                        </div>
                                        <div class="bag-left">
                                            <div class="bag-img">
                                                <img src="{{ asset('public/frontend/images/defaults/cart/90x90.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="bag-right">
                                            <div class="right-top">
                                                <a href="#">
                                                    <span>Thiếu niên cô gái Eo dây rút Đườ...</span>
                                                </a>
                                            </div>
                                            <div class="bags-size-num">
                                                <div class="bags-size">
                                                    {{-- <img src="" alt=""> --}}
                                                    <span>  Màu be / 8-9Y</span>
                                                </div>
                                                <div class="bags-num">
                                                    <ul>
                                                        <li>
                                                            <span>-</span>
                                                        </li>
                                                        <li>
                                                            <input type="text" class="qty-num" value="1">
                                                        </li>
                                                        <li>
                                                            <span>+</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bags-price">
                                                <strong>147.000 đ</strong>
                                                <div class="bags-delete">
                                                    <span>U</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mini-cart__item">
                                        <div class="slot">
                                            <input type="checkbox" name="" id="">
                                        </div>
                                        <div class="bag-left">
                                            <div class="bag-img">
                                                <img src="{{ asset('public/frontend/images/defaults/cart/90x90.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="bag-right">
                                            <div class="right-top">
                                                <a href="#">
                                                    <span>Thiếu niên cô gái Eo dây rút Đườ...</span>
                                                </a>
                                            </div>
                                            <div class="bags-size-num">
                                                <div class="bags-size">
                                                    {{-- <img src="" alt=""> --}}
                                                    <span>  Màu be / 8-9Y</span>
                                                </div>
                                                <div class="bags-num">
                                                    <ul>
                                                        <li>
                                                            <span>-</span>
                                                        </li>
                                                        <li>
                                                            <input type="text" class="qty-num" value="1">
                                                        </li>
                                                        <li>
                                                            <span>+</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="bags-price">
                                                <strong>147.000 đ</strong>
                                                <div class="bags-delete">
                                                    <span>U</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="free-ship-tip">
                                    <strong>giao hàng tiêu chuẩn: Miễn phí</strong>
                                </p>
                                <div class="bag-total">
                                    <div class="bag-total__slot">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="bag-total__price">
                                        <span>Giá bán lẻ: 298.000 đ</span>
                                        <span>Tiết kiệm: 59.500 đ</span>
                                        <p class="total-price">
                                            <span>Tổng cộng:</span>
                                            <span>238.500 đ</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bag-btn">
                                    <button>Xem Giỏ Hàng (2)</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
