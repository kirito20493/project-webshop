<!-- home page's container -->
<div class='col l-10 m-12 c-12'>
                    
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
                                                    <button class='btn btn--primary'><a style='color:white; text-decoration:none' 
                                                            href='index.php?controller=home&action=addOrder&id=".$data['id']."'>Thêm vào giỏ</a></button>
                                                </div>
                                            </div>";
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        