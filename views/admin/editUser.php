<!-- View (chỉnh sửa thông tin user khách hàng!) -->
<div class="right_col" role="main" style="height: 460px">
    <div class="x_content">
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" 
        action="admin.php?controller=home&action=editUser&id=<?php echo $data['id']; ?>" method="POST">

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email:
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text"  class="form-control " name="email" value="<?php echo $data['email']; ?>" disabled>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="phoneNumber">Số điện thoại:
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>">
                    <?php
                        if(isset($error['phone'])){
                    ?>
                        <span style="color:red"><?php echo $error['phone'];?></span>
                    <?php }?>
                </div>
            </div>
            <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ: </label>
                <div class="col-md-6 col-sm-6 ">
                    <input class="form-control" type="text" name="address" value="<?php echo $data['address']; ?>">
                    <?php
                        if(isset($error['address'])){
                    ?>
                        <span style="color:red"><?php echo $error['address'];?></span>
                    <?php }?>
                </div>
            </div>
            
            
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    
                    <button type="submit" class="btn btn-success" name="editUser">SAVE</button>
                </div>
            </div>

        </form>
    </div>
</div>