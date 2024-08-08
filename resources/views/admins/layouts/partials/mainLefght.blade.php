<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Hoàng Linh</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item ">
          <a href="#" class="nav-link active">

            <p>
              Danh Mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('admins.listCate')}}" class="nav-link ">
                <p>Danh Sách Danh Mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admins.createCate')}}" class="nav-link">
                <p>Thêm Danh Mục</p>
              </a>
            </li>
          </ul>
        </li>
          <li class="nav-item ">
              <a href="#" class="nav-link active">

                  <p>
                      Sản Phẩm
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('admins.listPro')}}" class="nav-link ">
                          <p>Danh Sách Sản Phẩm</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('admins.createPro')}}" class="nav-link">
                          <p>Thêm Sản Phẩm</p>
                      </a>
                  </li>
              </ul>
          </li>
          <li class="nav-item ">
              <a href="#" class="nav-link active">

                  <p>
                      Banner
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('admins.listBanner')}}" class="nav-link ">
                          <p>Danh Sách Banner</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('admins.createBanner')}}" class="nav-link">
                          <p>Thêm Banner</p>
                      </a>
                  </li>
              </ul>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
