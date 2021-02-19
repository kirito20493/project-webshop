<!-- View -> Hiện thị danh sách product theo CatalogID -->
<!-- page content -->

<div class="right_col" role="main" style="height: 460px">
    <h5>Chi tiết thông tin đơn hàng</h5>
    <div class="x_content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên mặt hàng</th>
                    <th>Số lượng</th>
                    <th>Giá tiền ($)</th>
                    <th>Ngày đặt</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $totalAmount = 0;
                    while ($data = $orderResult->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td>".$data['name']."</td>
                                <td>".$data['qty']."</td>
                                <td>".$data['amount']."</td>
                                <td>".$data['created']."</td>
                            </tr> ";
                            $totalAmount += $data['amount'];
                    }
                
                ?>
                
                        
            </tbody>
        </table>
                <?php
                    echo "<lable style='font-weight: bold; color:red; font-size:15px; margin-right:20px'>Tổng giá trị đơn hàng: </lable>
                          <span style='font-weight: bold;color:black; font-size:15px'>".$totalAmount." $</span></br></br>
                          <button type='button' class='btn btn-secondary btn-sm'><a href='admin.php?controller=home&amp;action=showListTransaction' style='color:white';>Trở lại danh sách</a></button>";
                ?>
    </div>
</div>