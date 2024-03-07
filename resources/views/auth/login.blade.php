<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydash')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('skydash')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('skydash')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydash')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('skydash')}}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('skydash')}}/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="{{ route('login') }}" class="pt-3">
                @csrf

                {{-- EMAIL --}}
                <div class="form-group">
                  <label for="email" :value="__('Email')"></label>
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"  name="email" :value="old('email')" required autofocus autocomplete="username" >
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- PASSWORD --}}
                <div class="form-group">
                  <label for="password" :value="__('Password')"></label>
                  <input class="form-control form-control-lg" id="password" type="password" name="password" required autocomplete="current-password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- SUBMIT --}}
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                  {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{{ asset('skydash')}}/index.html">SIGN IN</a> --}}
                </div>

                {{-- FORGOT PASSWORD --}}
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input id="remember_me" name="remember" type="checkbox" class="form-check-input">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                  @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}" class="auth-link text-black">{{ __('Forgot your password?') }}</a>
                  @endif
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                </div>
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
  <script src="{{ asset('skydash')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydash')}}/js/off-canvas.js"></script>
  <script src="{{ asset('skydash')}}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('skydash')}}/js/template.js"></script>
  <script src="{{ asset('skydash')}}/js/settings.js"></script>
  <script src="{{ asset('skydash')}}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
