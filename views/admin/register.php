<?php
include_once 'header.php';
?>

  <body class="login">
    <div>
      <div class="login_wrapper">

        <div id="register" >
          <section class="login_content">
            <form action="admin.php?controller=register" method="POST">
              <h1>Create Account</h1>
              <div>
                <?php
                  if(isset($error['username'])){
                ?>
                  <span style="color:red"><?php echo $error['username'];?></span>
                <?php }?>
                <input type="text" class="form-control" name="username" placeholder="Username" />
              </div>
              <div>
                <?php
                  if(isset($error['password'])){
                ?>
                  <span style="color:red"><?php echo $error['password'];?></span>
                <?php }?>
                <input type="password" class="form-control" name="password" placeholder="Password" />
              </div>
              <div>
                <?php
                  if(isset($error['password_confirmation'])){
                ?>
                  <span style="color:red"><?php echo $error['password_confirmation'];?></span>
                <?php }?>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password-confirmation" />
              </div>
              <div>
                <?php
                  if(isset($error['name'])){
                ?>
                  <span style="color:red"><?php echo $error['name'];?></span>
                <?php }?>
                <input type="name" class="form-control" name="name" placeholder="Your name" />
              </div>
              <div>
                <button type="submit" name="register" class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="admin.php?controller=login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
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
