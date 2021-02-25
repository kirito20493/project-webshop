<!-- home page's container -->
<div class='col l-10 m-12 c-12'>
                    
                        <div class='home-product'>
                            <div class='row sm-gutter'>
                                <!-- Product item -->
                                <?php
                                    $data = $result->fetch_assoc();
                                    echo   "<div>
                                            <div style='display: flex;'>
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
                                                    <button class='btn btn--primary'><a style='color:white; text-decoration:none' 
                                                            href='index.php?controller=home&action=addOrder&id=".$data['id']."'>Thêm vào giỏ</a></button>
                                                </div>
                                            </div>";
                                            echo "<div class='product-infor__rating'>
                                                    <h3 class='comment-title'>Đánh giá sản phẩm</h3>
                                                    <div style='display: flex;'>
                                                        <div class='product-infor__rating-ratingresult'>
                                                            <div class='product-infor__rating-ratingresult-point'>
                                                                <span>".$data['star']."/5</span>
                                                            </div>
                                                            <div class='product-infor__rating-ratingresult-star'>";
                                                            $starGold = $data['star'];
                                                            $starBlack = 5 - $starGold;
                                                            $rating = $data['rating'];
                                                            for ( $i=0; $i<$starGold; $i++ ) {
                                                                echo "<i class='home-product-item__star--gold fas fa-star'></i>";
                                                            }
                                                            for ( $i=0; $i<$starBlack; $i++ ) {
                                                                echo "<i class='fas fa-star'></i>";
                                                            }       
                                                    echo   "</div>
                                                            <div class='product-infor__rating-timerating'>
                                                                <p>".$data['timerating']." đánh giá</p>
                                                            </div>
                                                        </div>
                                                        <div class='product-infor__rating-update'>
                                                            <ul class='product-infor__rating-update-list>
                                                                <li class='product-infor__rating-update-item'>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i> 
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i> 
                                                                    <a class='product-infor__rating-update-item-select' href='index.php?controller=home&action=rating&productID=".$data['id']."&rating=".($data['rating']+5)."&timerating=".$data['timerating']."'>VOTE</a>
                                                                </li>

                                                                <li class='product-infor__rating-update-item'>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <a class='product-infor__rating-update-item-select' href='index.php?controller=home&action=rating&productID=".$data['id']."&rating=".($data['rating']+4)."&timerating=".$data['timerating']."'>VOTE</a>
                                                                </li>
                                                                <li class='product-infor__rating-update-item'>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <a class='product-infor__rating-update-item-select' href='index.php?controller=home&action=rating&productID=".$data['id']."&rating=".($data['rating']+3)."&timerating=".$data['timerating']."'>VOTE</a>
                                                                </li>
                                                                <li class='product-infor__rating-update-item'>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <a class='product-infor__rating-update-item-select' href='index.php?controller=home&action=rating&productID=".$data['id']."&rating=".($data['rating']+2)."&timerating=".$data['timerating']."'>VOTE</a>
                                                                </li>
                                                                <li class='product-infor__rating-update-item'>
                                                                    <i class='home-product-item__star--gold fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <i class='fas fa-star'></i>
                                                                    <a class='product-infor__rating-update-item-select' href='index.php?controller=home&action=rating&productID=".$data['id']."&rating=".($data['rating']+1)."&timerating=".$data['timerating']."'>VOTE</a>
                                                                </li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>";
                                            echo "<h3 class='comment-title'>Nhận xét về sản phẩm</h3>";
                                            echo "<form method='POST' action='index.php?controller=home&action=addcomment&productID=".$data['id']."'>
                                                    <input style='width:420px;height:50px;' name='content' placeholder='viết nhận xét của bạn...'></input>
                                                    <button class='btn btn--primary' type='submit' name='sendComment'>GỬI</button>
                                                </form>";
                                            while ($dataComment = $commentResult->fetch_assoc()){
                                                echo "<div class='product-infor__comment'>
                                                    <div class='product-infor__comment-user-email'>
                                                        <span>".$dataComment['email']."</span>
                                                    </div>
                                                    <div class='product-infor__comment-content'>
                                                        <span>Comment: </span><p>".$dataComment['content']."</p>
                                                    </div>
                                                </div>";
                                            }                                            
                                            echo "</div>";
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        