<!-- home page's container -->
<div class='col l-10 m-12 c-12'>
                    
                        <div class='home-product'>
                            <div class='row sm-gutter'>
                                <!-- Product item -->
                                <?php
                                $amount = 0;
                                    while ($data = $result->fetch_assoc()){
                                    echo   "<div class='detail_transaction' style='display: flex;'>
                                                <div style='margin-right: 50px';>
                                                    <img class='detail_transaction-image' src='public/images/".$data['image_link']."' alt=''>
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
                                                            href='index.php?controller=home&action=deleteOrder&orderID=".$data['id']."&transactionID=".$data['transaction_id']."'>Xoá</a></button>
                                                </div>
                                            </div>";
                                            $amount += $data['price'];
                                    }
                                    echo    "<div class='detail_transaction-footer'>
                                                <div class='detail_transaction-footer-price'>
                                                    <label class='detail_transaction-footer-price-title'>Tổng giá trị đơn hàng: </label><span style = 'font-size: 15px; font-weight:bold'>".$amount." $</span>
                                                </div>
                                                <div class='detail_transaction-footer-btn'>
                                                    <button class='btn btn--primary'><a style='color:white; text-decoration:none' 
                                                    href='index.php?controller=home&action=payment&transactionID=".$transactionID."'>Thanh toán</a></button>
                                                    <button class='btn btn--primary'><a style='color:white; text-decoration:none' 
                                                            href='index.php?controller=home'>Tiếp tục mua sắm</a></button>
                                                </div>                                                
                                            </div>";
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        