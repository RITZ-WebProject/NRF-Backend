<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="{{ url('dashboard/') }}">
      <i class="ti-home menu-icon"></i>
      <span class="menu-title">Dashboard</span>
    </a>
  </li>
@if(Session()->get('user_roles') === 'admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/staffs') }}">
      <i class="ti-user menu-icon"></i>
      <span class="menu-title">Staffs</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/customers') }}">
      <i class="ti-user menu-icon"></i>
      <span class="menu-title">Customers</span>
    </a>
  </li>
  <li class="nav-item" id="mySidebar">
      <a class="nav-link" href="{{ url('categories/') }}">
        <i class="ti-layout-grid2 menu-icon"></i>
        <span class="menu-title">Categories</span>
      </a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{ url('products/') }}">
        <i class="fas fa-p menu-icon"></i>
        <span class="menu-title">Products</span>
      </a>
  </li>
  @endif
  <li class="nav-item">
      <a class="nav-link" href="{{ url('orders/') }}">
        <i class="ti-shopping-cart-full menu-icon"></i>
        <span class="menu-title">Orders</span>
      </a>
  </li>

<li class="nav-item">
      <a class="nav-link" href="{{ url('product_reports/') }}">
          <i class="ti-stats-up menu-icon"></i>
        <span class="menu-title">Product Report</span>
      </a>
  </li>
  
  <li class="nav-item" hidden>
    <a class="nav-link" href="{{ url('/discounts') }}">
      <i class="ti-user menu-icon"></i>
      <span class="menu-title">Discounts</span>
    </a>
  </li>
  <li class="nav-item" hidden>
      <a class="nav-link" href="{{ url('/colors') }}">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Colors</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/size_charts') }}">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">Size Charts</span>
      </a>
    </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/profile') }}">
      <i class="ti-face-smile menu-icon"></i>
      <span class="menu-title">Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/countries') }}">
      <i class="ti-face-smile menu-icon"></i>
      <span class="menu-title">Country</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/careers') }}">
      <i class="ti-face-smile menu-icon"></i>
      <span class="menu-title">Job</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/galleries') }}">
      <i class="ti-face-smile menu-icon"></i>
      <span class="menu-title">Gallery</span>
    </a>
  </li>
</ul>
