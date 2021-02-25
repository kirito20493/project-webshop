<!-- Register form -->
    <div class="auth-form">
        <form action="index.php?controller=register" method="POST">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng ký</h3>
                    <span class="auth-form__switch-btn"><a href="index.php?controller=login">Đăng nhập</a></span>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name="email" placeholder="Email của bạn">
                        <?php
                            if(isset($error['email'])){
                        ?>
                        <span style="color:red"><?php echo $error['email'];?></span>
                        <?php }?>
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu của bạn">
                        <?php
                            if(isset($error['password'])){
                        ?>
                        <span style="color:red"><?php echo $error['password'];?></span>
                        <?php }?>
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                        <?php
                            if(isset($error['password_confirmation'])){
                        ?>
                        <span style="color:red"><?php echo $error['password_confirmation'];?></span>
                        <?php }?>
                    </div>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" name="phonenumber" placeholder="số điện thoại của bạn">
                        <?php
                            if(isset($error['phonenumber'])){
                        ?>
                        <span style="color:red"><?php echo $error['phonenumber'];?></span>
                        <?php }?>
                    </div>
                    <div class="auth-form__group">
                        <input type="address" class="auth-form__input" name="address" placeholder="Địa chỉ của bạn">
                        <?php
                            if(isset($error['address'])){
                        ?>
                        <span style="color:red"><?php echo $error['address'];?></span>
                        <?php }?>
                    </div>
                </div>

                <div class="auth-form__aside">
                    <p class="auth-form__policy-text">
                        Bằng việc đăng ký, bạn đã đồng ý với chúng tôi về
                        <a href="" class="auth-form__text-link"> Điều khoản dịch vụ</a> &
                        <a href="" class="auth-form__text-link"> Chính sách bảo mật!</a>
                    </p>
                </div>

                <div class="auth-form__controls">
                    <button class="btn auth-form__controls-back btn--normal"><a href="index.php?controller=home">TRỞ LẠI</a></button>
                    <button type="submit" name="register" class="btn btn--primary">ĐĂNG KÝ</button>
                </div>
            </div>
        </form>

        <div class="auth-form__socials">
            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                <span class="auth-form__socials-title">
                    kết nối với Facebook
                </span>
            </a>
            <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                <i class="auth-form__socials-icon fab fa-google"></i>
                <span class="auth-form__socials-title">
                    Kết nối với Google
                </span>
            </a>
        </div>
    </div>