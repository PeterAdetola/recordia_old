    <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Login | Recordia Admin</title>
    <link rel="apple-touch-icon" href="{{ asset('backend/assets/images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/login.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
<style type="text/css">
  form:invalid button {
   pointer-events: none;
   /*opacity: .8;*/
}
</style>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column    blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container">
          
          <div id="login-page" class="row">
  <div class="col s12 m6 l4" style="margin: auto;">
            <div class="flex justify-center" style="width:5em; margin: auto;">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 101.5 101.5" style="enable-background:new 0 0 101.5 101.5;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#E94581;}
                .st1{fill:#FFFFFF;}
              </style>
              <path class="st0" d="M69.8,101.5H31.7C14.2,101.5,0,87.3,0,69.8V31.7C0,14.2,14.2,0,31.7,0h38.2c17.5,0,31.7,14.2,31.7,31.7v38.2
                C101.5,87.3,87.3,101.5,69.8,101.5z"/>
              <g>
                <path class="st1" d="M51.5,77V19.7v-2h-2h-31h-2v2v4.2v2h2h8.2v57.3v2h2h31.9h2v-2V79v-2h-2H51.5z M43.4,25.8v51.3h-8.7V25.8H43.4z
                  "/>
                <path class="st1" d="M71.1,17.4c-9.8,0-17.9,8-17.9,17.9c0,9.8,8,17.9,17.9,17.9S89,45.1,89,35.3C89,25.4,81,17.4,71.1,17.4z
                   M80.9,35.3c0,5.4-4.4,9.8-9.8,9.8c-5.4,0-9.8-4.4-9.8-9.8c0-5.4,4.4-9.8,9.8-9.8C76.5,25.5,80.9,29.9,80.9,35.3z"/>
              </g>
        </svg>
            </div>
    <!-- Session Status -->
    <div class=" card-panel border-radius-6 login-card bg-opacity-8">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="row margin pt-7">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="username" name="username" required autofocus autocomplete="username" type="text" :value="old('username')">
          <label for="username" class="center-align">Username</label>
              @error('username')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror  
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password" required autocomplete="current-password">
          <label for="password">Password</label>
              @error('password')
              <small class="errorTxt3  red-text">{{ $message }}*</small>
              @enderror 
        </div>
      </div>
      <div class="row">
        <div class="col s12 m12 l12 ml-2 mt-1">
          <p>
            <label>
              <input  name="remember" type="checkbox" />
              <span>Remember Me</span>
            </label>
          </p>
        </div>
      </div>
      <div class="row pl-5 pr-5">
        <div class="input-field right">
          <button class="btn-large waves-effect waves-light"  onclick="ShowPreloader()">{{ __('Log in') }}</button>
        </div>
      </div>

              <div class="progress collection">
                <div id="preloader" class="indeterminate"  style="display:none; 
                border:2px #ebebeb solid"></div>
              </div>
      <div class="row">
        <div class="input-field col s6 m6">
            @if (Route::has('password.request'))
          <p class="margin left-align medium-small"><a href="user-forgot-password.html">Forgot password ?</a></p>
            @endif
        </div>
        <div class="input-field col s6 m6">
          <p class="margin right-align medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
      </div>
    </form>
  </div>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('backend/assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/assets/js/search.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/custom-script.js') }}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    
    <script type='text/javascript'>
      function ShowPreloader() {
        document.getElementById('preloader').style.display = "block";
      }
    </script>
  </body>
</html>