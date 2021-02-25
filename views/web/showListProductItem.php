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
                                                <div class='home-product-item__rating'>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                    <i class='fas fa-star'></i>
                                                </div>
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

                        
                    </div>
                </div>
            </div>
        </div>