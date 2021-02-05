<!-- View -> Hiện thị danh sách User -->
<!-- page content -->

<div class="right_col" role="main" style="height: 460px">
    <h5>Danh sách User</h5>
    <div class="x_content">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>".$data['id']."</th>
                                <td>".$data['email']."</td>
                                <td>".$data['phone']."</td>
                                <td>".$data['address']."</td>
                                <td><a href='admin.php?controller=home&action=editUser&id=".$data['id']."'>Edit </a>  <a href='admin.php?controller=home&action=deleteUser&id=".$data['id']."'> Delete</a></td>
                            </tr> ";
                    }
                ?>
                          
            </tbody>
        </table>
    </div>
</div>