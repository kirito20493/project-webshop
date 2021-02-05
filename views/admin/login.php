<?php
include_once 'header.php';
?>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="admin.php?controller=login" method="POST">
              <h1>Login Form</h1>
              <div>
                <?php
                  if(isset($error['username'])){
                ?>
                  <span style="color:red"><?php echo $error['username'];?></span>
                <?php }?>
                <input type="text" class="form-control" name="username" placeholder="Username"/>
              </div>
              <div>
                <?php
                  if(isset($error['password'])){
                ?>
                  <span style="color:red"><?php echo $error['password'];?></span>
                <?php }?>
                <input type="password" class="form-control" name="password" placeholder="Password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="login">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="admin.php?controller=register" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
<?php
?>
