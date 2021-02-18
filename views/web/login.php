<!-- Login form -->
<div class="auth-form">
    <form action="index.php?controller=login" method="POST">
            <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập</h3>
                    <span class="auth-form__switch-btn"><a href="index.php?controller=register">Đăng ký</a></span>
                </div>

                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" name="email" class="auth-form__input" placeholder="Email của bạn">
                    </div>
                    <div class="auth-form__group">
                        <input type="text" name="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
                    </div>
                </div>

                <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                        <span class="auth-form__help-separate"></span>
                        <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                    </div>
                </div>

                <div class="auth-form__controls">
                    <button class="btn auth-form__controls-back btn--normal"><a href="index.php?controller=home">TRỞ LẠI</a></button>
                    <button type="submit" name="login" class="btn btn--primary">ĐĂNG NHẬP</button>
                </div>
            </div>

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
    </form>
</div>
</div>
