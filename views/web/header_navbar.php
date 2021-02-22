<body>
    <!-- QCDT Block Element Modifier -->
    <div class='app'>
        <header class='header'>
            <div class='grid wide'>
                <nav class='header__navbar hide-on-mobile-tablet'>
                    <ul class='header__navbar-list'>
                        <li class='header__navbar-item header__navbar-item--has-qr header__navbar-item--separate'>
                            Vào cửa hàng ứng dụng WEB_SHOP
                            <!-- QR CODE -->
                            <div class='header__qr'>
                                <img src='public/assests/img/qr_code.png' alt='QR code' class='header__qr-img'>
                                <div class='header__qr-apps'>
                                    <a href='' class='header__qr-link'>
                                        <img src='public/assests/img/google_play.png' alt='Google Play'
                                            class='header__qr-download-img'>
                                    </a>
                                    <a href='' class='header__qr-link'>
                                        <img src='public/assests/img/apple_store.png' alt='Apple Store'
                                            class='header__qr-download-img'>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class='header__navbar-item'>
                            <span class='header__navbar-title--no-pointer'>Kết nối</span>
                            <a href='' class='header__navbar-icon-link'>
                                <i class='header__navbar-icon fab fa-facebook'></i>
                            </a>
                            <a href='' class='header__navbar-icon-link'>
                                <i class='header__navbar-icon fab fa-instagram'></i>
                            </a>
                        </li>
                    </ul>
                    <ul class='header__navbar-list'>
                        <li class='header__navbar-item header__navbar-item--has-notify'>
                            <a href='' class='header__navbar-item-link'>
                                <i class='header__navbar-icon far fa-bell'></i>
                                Thông báo
                            </a>
                        </li>
                        <li class='header__navbar-item'>
                            <a href='' class='header__navbar-item-link'>
                                <i class='header__navbar-icon far fa-question-circle'></i>
                                Trợ giúp
                            </a>
                        </li>

                        <!-- after login -->
                        <li class='header__navbar-item header__navbar-user'>
                            <?php
                        if (isset($_SESSION['email'])){
                            echo "<span class='header__navbar-user-name'>".$_SESSION['email']."</span>";
                        } else {
                            echo "<span class='header__navbar-user-name'><a href='index.php?controller=login'>Đăng Nhập</a></span>";
                        }
                       
                    ?>
                            <ul class='header__navbar-user-menu'>
                                <li class='header__navbar-user-item'>
                                    <a href=''>Tài khoản của tôi</a>
                                </li>
                                <!-- <li class='header__navbar-user-item'>
                            <a href=''>Địa chỉ của tôi</a>
                        </li> -->
                                <li class='header__navbar-user-item'>
                                    <a href='index.php?controller=home&action=detailTransaction'>Xem giỏ hàng</a>
                                </li>
                                <li class='header__navbar-user-item'>
                                    <a href='index.php?controller=home&action=logout'>Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Header with search -->
                <div class='header-with-search'>
                    <label for='mobile-search-checkbox' class='header__mobile-search hide-on-tablet'>
                        <i class='header__mobile-search-icon fas fa-search'></i>
                    </label>

                    <div class='header__logo hide-on-tablet'>
                        <a href='./index.php' class='header__logo-link'>
                            <img src='public/assests/img/logo1.png' alt='' class='header__logo-img'>
                        </a>
                    </div>

                    <input type='checkbox' hidden class='header__search-checkbox' name='' id='mobile-search-checkbox'>

                    <form class='header__search' method='POST', action='index.php?controller=home&action=search'>
                            <div class='header__search-input-wrap'>
                                <input type='text' name='searchKey' class='header__search-input' placeholder='Nhập để tìm kiếm sản phẩm'>
                            </div>
                            <button type='submit' name='keyword' class='header__search-btn'>
                                <i class='header__search-btn-icon fas fa-search'></i>
                            </button>
                    </form >
                    
                    <!-- Cart layout -->
                    <div class='header__cart'>
                        <div class='header__cart-wrap'>
                            <i class='header__cart-icon fas fa-shopping-cart'></i>
                            <span class='header__cart-notice'>3</span>
                            <!-- No cart:header__cart-list--no-cart -->
                            <div class='header__cart-list'>
                                <img src='public/assests/img/empty-cart.png' alt='' class='header__cart-no-cart-img'>

                                <!-- Have cart -->
                                <h4 class='header__cart-heading'>Sản phẩm đã thêm</h4>
                                <ul class='header__cart-list-item'>
                                    <!-- Cart item -->
                                    <li class='header__cart-item'>
                                        <img src='https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-pro-family-hero?wid=940&amp;hei=1112&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1604021663000'
                                            alt='' class='header__cart-img'>
                                        <div class='header__cart-item-info'>
                                            <div class='header__cart-item-head'>
                                                <h5 class='header__cart-item-name'>Iphone12 ProMax</h5>
                                                <div class='header__cart-item-price-wrap'>
                                                    <span class='header__cart-item-price'>1.200$</span>
                                                    <span class='header__cart-item-multiply'>x</span>
                                                    <span class='header__cart-item-qnt'>1</span>
                                                </div>
                                            </div>
                                            <div class='header__cart-item-body'>
                                                <span class='header__cart-item-description'>Phân loại: Vàng</span>
                                                <span class='header__cart-item-remove'>Xoá</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class='header__cart-item'>
                                        <img src='https://images-na.ssl-images-amazon.com/images/I/715-Tooq32L._SX466_.jpg'
                                            alt='' class='header__cart-img'>
                                        <div class='header__cart-item-info'>
                                            <div class='header__cart-item-head'>
                                                <h5 class='header__cart-item-name'>IPad Gen8 2020</h5>
                                                <div class='header__cart-item-price-wrap'>
                                                    <span class='header__cart-item-price'>380$</span>
                                                    <span class='header__cart-item-multiply'>x</span>
                                                    <span class='header__cart-item-qnt'>2</span>
                                                </div>
                                            </div>
                                            <div class='header__cart-item-body'>
                                                <span class='header__cart-item-description'>Phân loại: Bạc</span>
                                                <span class='header__cart-item-remove'>Xoá</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class='header__cart-item'>
                                        <img src='https://cdn.shopify.com/s/files/1/0428/5523/5739/products/macbook_pro_2020_3.png?v=1597083235'
                                            alt='' class='header__cart-img'>
                                        <div class='header__cart-item-info'>
                                            <div class='header__cart-item-head'>
                                                <h5 class='header__cart-item-name'>MacBook Pro 2020</h5>
                                                <div class='header__cart-item-price-wrap'>
                                                    <span class='header__cart-item-price'>2.100$</span>
                                                    <span class='header__cart-item-multiply'>x</span>
                                                    <span class='header__cart-item-qnt'>1</span>
                                                </div>
                                            </div>
                                            <div class='header__cart-item-body'>
                                                <span class='header__cart-item-description'>Phân loại: Kim cương</span>
                                                <span class='header__cart-item-remove'>Xoá</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <button class='header__cart-view-cart btn btn--primary'>Xem giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class='header__sort-bar'>
                <li class='header__sort-item'>
                    <a href='' class='header__sort-link'>Liên quan</a>
                </li>
                <li class='header__sort-item header__sort-item--active'>
                    <a href='index.php?controller=home&action=sortByTime' class='header__sort-link'>Mới nhất</a>
                </li>
                <li class='header__sort-item'>
                    <a href='' class='header__sort-link'>Bán chạy</a>
                </li>
                <li class='header__sort-item'>
                    <a href='' class='header__sort-link'>Giá</a>
                </li>
            </ul>
        </header>
        <div class='app__container'>
            <div class='grid wide'>
                <div class='row sm-gutter app__content'>
                    <div class='col l-2 m-0 c-0'>
                        <nav class='category'>
                            <h3 class='category__heading'>
                                <i class='category__heading-icon fas fa-list'></i>
                                Danh mục
                            </h3>

                            <ul class='category-list'>
                            <?php
                                while ($data = $result->fetch_assoc()){
                                    echo "<li class='category-item '>
                                            <a href='index.php?controller=home&action=showCatalog&id=".$data['id']."' class='category-item__link'>".$data['name']."</a>
                                         </li>";
                                }
                            ?>
                                <!-- <li class='category-item '>
                                    <a href='#' class='category-item__link'>Macbook Pro</a>
                                </li>
                                <li class='category-item category-item--active'>
                                    <a href='#' class='category-item__link'>Macbook Air</a>
                                </li>
                                <li class='category-item'>
                                    <a href='#' class='category-item__link'>Iphone</a>
                                </li>
                                <li class='category-item'>
                                    <a href='#' class='category-item__link'>Ipad</a>
                                </li>
                                <li class='category-item'>
                                    <a href='#' class='category-item__link'>Apple Watch</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                    