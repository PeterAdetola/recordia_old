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
    <title>Recordia | Financial recording for transparency </title>
    <link rel="apple-touch-icon" href="{{ asset('backend/assets/images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/animate-css/animate.css') }}">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/dashboard-modern.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/intro.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/page-users.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    
    @include('admin.body.header')

    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('backend/assets/images/icon/pdf-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('backend/assets/images/icon/doc-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('backend/assets/images/icon/xls-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('backend/assets/images/icon/jpg-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('backend/assets/images/avatar/avatar-7.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('backend/assets/images/avatar/avatar-8.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('backend/assets/images/avatar/avatar-10.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('backend/assets/images/avatar/avatar-12.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    @include('admin.body.sidebar')

    <!-- BEGIN: Page Main-->
    
    @yield('admin')

   


    
    <!-- BEGIN: Footer-->

   @include('admin.body.footer')

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('backend/assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('backend/assets/vendors/data-tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/assets/js/search.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/custom-script.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/customizer.js') }}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('backend/assets/js/scripts/dashboard-modern.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/page-users.js') }}"></script>
    <!-- <script src="{{ asset('backend/assets/js/scripts/form-elements.js') }}"></script> -->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>