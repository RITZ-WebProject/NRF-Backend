<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.bootstrapdash.com/demo/justdo/template/demo/vertical-default-dark/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 17:35:03 GMT -->
<head>
<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NRF Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/css/vertical-layout-dark/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('storage/logo/nrf_logo_black.png')}}" />
</head>

<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('storage/logo/2.png') }}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
                @if (session('fail'))
                    <div class="alert alert-dark">
                        {{ session('fail') }}
                    </div>
                @endif
              <form class="pt-3" action="{{ route('custom.login') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="name" placeholder="Username" style="color: #000">
                  @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password" style="color: #000">
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                <div class="mt-4">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>

                {{-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> --}}
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/template.js"></script>
  <script src="admin/js/settings.js"></script>
  <script src="admin/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/justdo/template/demo/vertical-default-dark/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 17:35:03 GMT -->
</html>
