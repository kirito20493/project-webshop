<!-- View -> Hiện thị danh sách product theo CatalogID -->
<!-- page content -->

<div class="right_col" role="main" style="height: 460px">
    <h5>Danh mục hàng hoá :</h5>
    <h5><?php echo $dataCTL['name']; ?></h5>
    <div class="x_content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID SP</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá ($)</th>
                    <th>Mô tả</th>
                    <th>Ngày tạo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td>".$data['name']."</a></td>
                                <td>".$data['price']."</td>
                                <td>".$data['content']."</td>
                                <td>".$data['created']."</td>
                            </tr> ";
                    }
                ?>    
            </tbody>
        </table>
    </div>
</div>