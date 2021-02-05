<!-- View -> Hiện thị danh sách Catalog -->
<!-- page content -->

<div class="right_col" role="main" style="height: 460px">
    <h5>Danh mục hàng hoá:</h5>
    <div class="x_content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td><a href='admin.php?controller=home&action=detailCatalog&id=".$data['id']."'>".$data['name']."</a></td>
                                <td><a href='admin.php?controller=home&action=editCatalog&id=".$data['id']."' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i> Edit </a> 
                                <a href='admin.php?controller=home&action=deleteCatalog&id=".$data['id']."' class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete </a></td>
                            </tr> ";
                    }
                ?>      
            </tbody>
        </table>
        <button type="button" class="btn btn-round btn-success" name="addCatalog" onclick="window.location.href='admin.php?controller=home&action=addCatalog'">Thêm danh mục</button>
    </div>
</div>