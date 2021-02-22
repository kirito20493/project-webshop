<!-- home page's container -->
<div class='col l-10 m-12 c-12'>
                        <div class='home-filter hide-on-mobile-tablet'>
                            <span class='home-filter__label'>Sắp xếp theo</span>
                            <button class='home-filter__btn btn'>Phổ biến</button>
                            <button onclick="window.location.href='index.php?controller=home&action=sortByTime'" class='home-filter__btn btn btn--primary'>Mới nhất</button>
                            <button onclick="window.location.href='index.php?controller=home&action=sortTimeOrder'" class='home-filter__btn btn'>Bán chạy</button>

                            <div class='select-input'>
                                <span class='select-input__label'>Giá</span>
                                <i class='select-input__icon fas fa-angle-down'></i>
                                <ul class='select-input__list'>
                                    <li class='select-input__item'>
                                        <a href='#' class='select-input__link'>Giá: thấp đến cao</a>
                                    </li>
                                    <li class='select-input__item'>
                                        <a href='#' class='select-input__link'>Giá: cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class='home-filter__page'>
                                <span class='home-filter__page-num'>
                                    <span class='home-filter__page-current'>1</span>/14
                                </span>

                                <div class='home-filter__page-control'>
                                    <a href='' class='home-filter__page-btn home-filter__page-btn--disabled'>
                                        <i class='home-filter__page-icon fas fa-angle-left'></i>
                                    </a>
                                    <a href='' class='home-filter__page-btn'>
                                        <i class='home-filter__page-icon fas fa-angle-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <nav class='mobile-category'>
                            <ul class='mobile-category__list'>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng mới nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng nổi bật nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng có lượt mua nhiều nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng mới nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng nổi bật nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng có lượt mua nhiều nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng mới nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng nổi bật nhất trong tháng</a>
                                </li>
                                <li class='mobile-category__item'>
                                    <a href='' class='mobile-category__link'>Hàng có lượt mua nhiều nhất trong tháng</a>
                                </li>
                            </ul>
                        </nav>

                        <div class='home-product'>
                            <div class='row sm-gutter'>
                                <!-- Product item -->
                                <?php
                                    while ($data = $result->fetch_assoc()){
                                        echo 
                                "<div class='col l-2-4 m-4 c-6'>
                                    <a class='home-product-item' href='index.php?controller=home&action=inforProduct&id=".$data['id']."'>
                                        <div class='home-product-item__img'
                                            style='background-image: url(public/images/".$data['image_link'].");'>
                                            <h4 class='home-product-item__name'>".$data['name']."</h4>
                                            <div class='home-product-item__price'>
                                                
                                                <span class='home-product-item__price-current'>".$data['price']."$</span>
                                            </div>
                                            <div class='home-product-item__action'>
                                                <!-- home-product-item__like--liked (thêm bớt class vào thẻ span để hiện like or nolike)  -->
                                                <span class='home-product-item__like home-product-item__like--liked'>
                                                    <i class='home-product-item__like-icon-empty far fa-heart'></i>
                                                    <i class='home-product-item__like-icon-fill fas fa-heart'></i>
                                                </span>
                                                <div class='home-product-item__rating'>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                </div>
                                                <span class='home-product-item__sold'>20 đã bán</span>
                                            </div>
                                            <div class='home-product-item__origin'>
                                                <span class='home-product-item__brand'>Apple</span>
                                                <span class='home-product-item__origin-name'>Japan</span>
                                            </div>
                                            <div class='home-product-item__favourite'>
                                                <span class='home-product-item__favourite-label'>
                                                    <i class='fas fa-check'></i>
                                                    Yêu thích!
                                                </span>
                                            </div>
                                            <div class='home-product-item__sale-off'>
                                                <span class='home-product-item__sale-off-percent'>20%</span>
                                                <span class='home-product-item__sale-off-label'>SALE</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>