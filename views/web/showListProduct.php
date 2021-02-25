<!-- home page's container -->
                    <div class='col l-10 m-12 c-12'>
                        <?php
                            include_once 'container-header.php';
                        ?>

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
                                                <div class='home-product-item__rating'>";
                                                $starGold = $data['star'];
                                                $starBlack = 5 - $starGold;
                                                for ( $i=0; $i<$starGold; $i++ ) {
                                                    echo "<i class='home-product-item__star--gold fas fa-star'></i>";
                                                }
                                                for ( $i=0; $i<$starBlack; $i++ ) {
                                                    echo "<i class='fas fa-star'></i>";
                                                }   
                                                echo "</div>
                                                <span class='home-product-item__sold'></span>
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

                        <ul class='pagination home-product__pagination'>
                            <?php 
                                if ($current_page > 1 && $total_page > 1){
                                    echo "<li class='pagination-item'>
                                            <a href='index.php?controller=home&action=page&page=".($current_page-1)."' class='pagination-item__link'>
                                                <i class='pagination-item__icon fas fa-angle-left'></i>
                                            </a>
                                        </li>";
                                }
                                    // Lặp khoảng giữa
                                    for ($i = 1; $i <= $total_page; $i++){
                                        // Nếu là trang hiện tại thì hiển thị thẻ span
                                        // ngược lại hiển thị thẻ a
                                        if ($i == $current_page){
                                            echo "<li class='pagination-item'>
                                                    <span class='pagination-item__link' disbled>".$i."</span>
                                                </li>";
                                        }
                                        else{
                                            echo "<li class='pagination-item'>
                                                <a href='index.php?controller=home&action=page&page=".$i."' class='pagination-item__link'>".$i."</a>
                                            </li>";
                                        }
                                    }

                                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                    if ($current_page < $total_page && $total_page > 1){
                                        echo "<li class='pagination-item'>
                                                <a href='index.php?controller=home&action=page&page=".($current_page+1)."' class='pagination-item__link'>
                                                    <i class='pagination-item__icon fas fa-angle-right'></i>
                                                </a>
                                            </li>";
                                    }
                                
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        