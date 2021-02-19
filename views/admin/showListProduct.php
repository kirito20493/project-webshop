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
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a style="width: 30px; text-align: center;" href="admin.php?controller=home&action=showListProduct&page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo "<span style='width: 30px; text-align: center;'>".$i."</span> | ";
                }
                else{
                    echo "<a href='admin.php?controller=home&action=showListProduct&page=".$i."' style='width: 30px;text-align: center;'>".$i."</a> | ";
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a style="width: 30px; text-align: center;" href="admin.php?controller=home&action=showListProduct&page='.($current_page+1).'">Next</a> | ';
            }
           ?>
        </div>
        <button type="button" class="btn btn-round btn-success" name="addProduct" onclick="window.location.href='admin.php?controller=home&action=addProduct'" style='margin-top:20px;'>Thêm sản phẩm</button>
    </div>
</div>