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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form method="POST" action="{{ route('register') }}" class="pt-3">
                @csrf

                {{-- NAME --}}
                <div class="form-group">
                    <label  for="name" :value="__('Name')"></label>
                  <input class="form-control form-control-lg" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                {{-- EMAIL --}}
                <div class="form-group">
                    <label for="email" :value="__('Email')" ></label>
                  <input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" >
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- PASSWORD --}}
                <div class="form-group">
                    <label for="password" :value="__('Password')" ></label>
                  <input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- PASSWORD CONFIRM --}}
                <div class="form-group">
                    <label for="password_confirmation" :value="__('Confirm Password')" ></label>
                  <input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password">
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                  {{-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN UP</a> --}}
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
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

