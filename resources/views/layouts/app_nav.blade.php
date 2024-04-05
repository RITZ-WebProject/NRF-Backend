<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo me-5" href=""><img src="{{ asset('storage/logo/nrf_logo.png') }}" class="me-2" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href=""><img src="{{ asset('storage/logo/nrf_logo.png') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              <span class="input-group-text" id="search">
                <i class="ti-search"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul>
	  <?php  
 		    $currentTime=date('Y-m-d H:i:s',strtotime(now()));
        $fiveMinutesAgo = date('Y-m-d H:i:s',strtotime(now()->subMinutes(5)));
        $active_users=DB::table('customers')->whereBetween('active_time', [$fiveMinutesAgo, $currentTime])->count();
      ?>
        
        <span class="badge badge-pill badge-success">
          Current Active Users : {{$active_users}}
        </span>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown me-1">
        </li>
        
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <img src="{{asset('admin/images/faces/admin.png')}}" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item text-light" href="{{url("profile")}}">
              <i class="ti-settings text-primary"></i>
              Profile
            </a>
            <a class="dropdown-item text-light" href="{{url("signout")}}">
              <i class="ti-power-off text-primary"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="ti-layout-grid2"></span>
      </button>
    </div>
  </nav>
