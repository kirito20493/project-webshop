<!-- home page's container -->
<div class='col l-10 m-12 c-12'>
                        <!-- <div class='home-filter hide-on-mobile-tablet'>
                            <span class='home-filter__label'>Sắp xếp theo</span>
                            <button class='home-filter__btn btn'>Phổ biến</button>
                            <button class='home-filter__btn btn btn--primary'>Mới nhất</button>
                            <button class='home-filter__btn btn'>Bán chạy</button>

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
                        </div> -->

                        <!-- <nav class='mobile-category'>
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
                        </nav> -->

                        <div class='home-product'>
                            <div class='row sm-gutter'>
                                <!-- Product item -->
                                <?php
                                    $data = $result->fetch_assoc();
                                    echo   "<div style='display: flex;'>
                                                <div style='margin-right: 50px';>
                                                    <img src='public/images/".$data['image_link']."' alt=''>
                                                </div>
                                                <div>
                                                    <h1>Thông tin sản phẩm</h1>
                                                    <ul style='font-size: 15px';>
                                                        <li>
                                                            <span style='font-weight: bold';>Tên sản phẩm</span>
                                                            <p>".$data['name']."</p>
                                                        </li>
                                                        <li>
                                                            <span style='font-weight: bold';>Giá sản phẩm</span>
                                                            <p>".$data['price']."$</p>
                                                        </li>
                                                        <li>
                                                            <span style='font-weight: bold';>Mô tả sản phẩm</span>
                                                            <p>".$data['content']."</p>
                                                        </li>
                                                    </ul>
                                                    <button class='btn btn--primary'>Thêm vào giỏ</button>
                                                </div>
                                            </div>";
                                ?>
                                
                            </div>
                        </div>

                        <ul class='pagination home-product__pagination'>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>
                                    <i class='pagination-item__icon fas fa-angle-left'></i>
                                </a>
                            </li>
                            <li class='pagination-item pagination-item--active'>
                                <a href='#' class='pagination-item__link'>1</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>2</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>3</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>4</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>5</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>...</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>14</a>
                            </li>
                            <li class='pagination-item'>
                                <a href='#' class='pagination-item__link'>
                                    <i class='pagination-item__icon fas fa-angle-right'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        