<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <!-- <h2><?php //echo $_SESSION['name']?></h2> -->
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
            <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home </a>
                  </li>
                  
                  <li><a><i class="fa fa-bar-chart-o"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=home&action=showListUser">Quản lý User</a></li>
                      <li><a href="admin.php?controller=home&action=showListProduct">Quản lý hàng hoá</a></li>
                      <li><a href="admin.php?controller=home&action=showListCatalog">Quản lý Catalog</a></li>
                      <li><a href="#">Quản lý đơn đặt hàng</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i>Tài khoản<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php?controller=home&action=changePAD">Đổi mật khẩu</a></li>
                      <li><a href="admin.php?controller=home&action=logout">Đăng xuất</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

       