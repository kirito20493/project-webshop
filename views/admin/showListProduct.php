<!-- View -> Hiện thị danh sách Product -->
<!-- page content -->

<div class="right_col" role="main" style="height: 460px">
    <h5>Danh sách Sản Phẩm</h5>
    <div class="x_content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID SP</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá ($)</th>
                    <th>Mô tả</th>
                    <th>Ngày tạo</th>
                    <th>Danh mục sản phẩm</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td><a href='admin.php?controller=home&action=detailProduct&id=".$data['id']."'>".$data['name']."</a></td>
                                <td>".$data['price']."</td>
                                <td>".$data['content']."</td>
                                <td>".$data['created']."</td>
                                <td>".$data['cate_name']."</td>
                                <td><a href='admin.php?controller=home&action=editProduct&id=".$data['id']."'>Edit </a>  <a href='admin.php?controller=home&action=deleteProduct&id=".$data['id']."'> Delete</a></td>
                            </tr> ";
                    }
                ?>
                          
            </tbody>
        </table>
        <button type="button" class="btn btn-round btn-success" name="addProduct" onclick="window.location.href='admin.php?controller=home&action=addProduct'">Thêm sản phẩm</button>
    </div>
</div>