<!-- page content -->
<div class="right_col" role="main" >
    <div class="x_content" style="display: block;">
		<br>
		<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="admin.php?controller=home&action=changePAD" method="POST" style="height: 470px">

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Mật khẩu hiện tại: <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 ">
                    <input type="password" required="required" class="form-control " name="passwordOld" >
                    <?php
                        if(isset($error['passwordOld'])){
                    ?>
                    <span class="form-message" style="color:red"><?php echo $error['passwordOld']; ?></span>
                    <?php }?>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name" >Mật khẩu mới: <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 ">
                    <input type="password" required="required" class="form-control" name="password">
                    <?php
                        if(isset($error['password'])){
                    ?>
                    <span class="form-message" style="color:red"><?php echo $error['password']; ?></span>
                    <?php }?>
				</div>
			</div>
			<div class="item form-group">
				<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nhập lại mật khẩu mới: <span class="required">*</span></label>
				<div class="col-md-6 col-sm-6 ">
                    <input  class="form-control" type="password" name="password_confirmation">
                    <?php
                        if(isset($error['password_confirmation'])){
                    ?>
                    <span class="form-message" style="color:red"><?php echo $error['password_confirmation']; ?></span>
                    <?php }?>
				</div>
			</div>

			<div class="ln_solid"></div>
			<div class="item form-group">
			<div class="col-md-6 col-sm-6 offset-md-3">
				<button type="submit" class="btn btn-success" name="changePAD">Save</button>
			</div>
			
		</form>
	</div>
</div>