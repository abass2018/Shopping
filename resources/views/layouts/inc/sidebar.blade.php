<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('admin/assets/image/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shopping</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 128px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{url('dashboard')}}" class="nav-link {{ Request:: is('dashboard') ? 'active': ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
            
          </li>
          
          <li class="nav-item ">
            <a href="#" class="nav-link {{ Request:: is('categories') ? 'active': ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Categories
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{url('categories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Categories </p>
                </a>
              </li>
         
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{url('add-category')}}" class="nav-link {{ Request:: is('categories') ? 'active': ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Categories </p>
                </a>
              </li>
         
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request:: is('products') ? 'active': ''}}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
          
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Order Item
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('order_item')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Order Item</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-order-item')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Order Item</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Suppliers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('supplier')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Suppliers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-supplier')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Suppliers</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('order')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-order')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Orders</p>
                </a>
              </li>
         
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Sales
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('sales')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-sales')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sales</p>
                </a>
              </li>

             
          </li>
         
        </ul>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Purchases
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('purchases')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Purchases</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('add-purchases')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Purchases</p>
                </a>
              </li>
         
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 9.50626%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>