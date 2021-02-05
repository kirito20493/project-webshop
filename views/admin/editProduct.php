<!-- View FORM edit Product -->
<div class="right_col" role="main" style="height: 460px">
    <div class="x_content">
        <h5>Chỉnh sửa thông tin sản phẩm:</h5>
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" 
        action="admin.php?controller=home&action=editProduct&id=<?php echo $data['id']?>" method="POST">

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Tên sản phẩm:
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text"  class="form-control " name="name" value="<?php echo $data['name'];?>">
                    <?php
                        if(isset($error['name'])){
                    ?>
                        <span style="color:red"><?php echo $error['name'];?></span>
                    <?php }?>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Giá sản phẩm:
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" class="form-control" name="price" value="<?php echo $data['price'];?>">
                    <?php
                        if(isset($error['price'])){
                    ?>
                        <span style="color:red"><?php echo $error['price'];?></span>
                    <?php }?>
                </div>
            </div>
            <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mô tả: </label>
                <div class="col-md-6 col-sm-6 ">
                    <input class="form-control" type="text" name="content" value="<?php echo $data['content'];?>">
                    <?php
                        if(isset($error['content'])){
                    ?>
                        <span style="color:red"><?php echo $error['content'];?></span>
                    <?php }?>
                </div>
            </div>
            <div class="item form-group">
                <label for="catalog_name" class="col-form-label col-md-3 col-sm-3 label-align">Chọn danh mục: </label>
                <div class="col-md-2 col-sm-2 btn-group" role="group">
                    <select name="catalog_name" id="catalog">
                        <?php
                            while ($cataData = $cataResult->fetch_assoc()){
                        ?>
                        <option value="<?php echo $cataData['name'];?>"><?php echo $cataData['name'];?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image_link">Chọn ảnh sản phẩm:
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="file" id="image_link" class="form-control" name="image_link" >
                    <?php
                        if(isset($error['image_link'])){
                    ?>
                        <span style="color:red"><?php echo $error['image_link'];?></span>
                    <?php }?>
                </div>
            </div>
            
            <div class="ln_solid"></div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    
                    <button type="submit" class="btn btn-success" name="editProduct">SAVE</button>
                </div>
            </div>

        </form>
    </div>
</div>