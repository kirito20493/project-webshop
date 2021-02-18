<!-- View -> Hiện thị danh sách Đơn hàng -->
<!-- page content -->

<div class="right_col" role="main" style="height: 460px">
    <h5>Danh sách Đơn hàng</h5>
    <div class="x_content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Đơn hàng</th>
                    <th>Email khách hàng</th>
                    <th>Tên sản phẩm mua</th>
                    <th>Giá ($)</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Thời gian thao tác</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $result->fetch_assoc()) {
                        if ($data['status'] == 1){
                            $status = "Đã thanh toán";
                        } else {
                            $status = "Chưa thanh toán";
                        }
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td>".$data['email']."</td>
                                <td>".$data['name']."</td>
                                <td>".$data['price']."</td>
                                <td>".$data['qty']."</td>
                                <td>".$data['amount']."</td>
                                <td>".$status."</td>
                                <td>".$data['created']."</td>
                                <td><a href='admin.php?controller=home&action=editOrder&id=".$data['id']."'>Edit </a>  <a href='admin.php?controller=home&action=deleteOrder&id=".$data['id']."'> Delete</a></td>
                            </tr> ";
                    }
                ?>
                          
            </tbody>
        </table>
        <!-- <button type="button" class="btn btn-round btn-success" name="addProduct" onclick="window.location.href='admin.php?controller=home&action=addProduct'">Thêm sản phẩm</button> -->
    </div>
</div>