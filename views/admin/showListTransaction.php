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
                    <th>Giá trị đơn hàng ($)</th>
                    <th>Trạng thái thanh toán</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $result->fetch_assoc()) {
                        if($data['status'] == 0) {
                            $status = 'Chưa thanh toán';
                        } else {
                            $status = 'Đã thanh toán';
                        }
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td>".$data['user_email']."</td>
                                <td>".$data['amount']."</td>
                                <td>".$status."</td>
                                <td><a style='margin-right:20px;' href='admin.php?controller=home&action=detailTransaction&id=".$data['id']."'>Detail </a>
                                    <a href='admin.php?controller=home&action=deleteTransaction&id=".$data['id']."'> Delete</a></td>
                            </tr> ";
                    }
                ?>
                          
            </tbody>
        </table>
        <!-- <button type="button" class="btn btn-round btn-success" name="addProduct" onclick="window.location.href='admin.php?controller=home&action=addProduct'">Thêm sản phẩm</button> -->
    </div>
</div>