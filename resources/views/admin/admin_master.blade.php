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
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/data-tables/css/dataTables.checkboxes.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/dashboard-modern.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/app-invoice.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/pages/page-users.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom/custom.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom/toast.css') }}" > -->
    <!-- END: Custom CSS-->
<style type="text/css">
  form:invalid button {
   pointer-events: none;
   /*opacity: .2;*/
}
</style>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    
    @include('admin.body.header')



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
    <script src="{{ asset('backend/assets/vendors/data-tables/js/datatables.checkboxes.min.js') }}"></script>
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
    <script src="{{ asset('backend/assets/js/scripts/app-invoice.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
    
<script>



    
 @if(Session::has('message'))

  setTimeout(function () {
    var toastHTML = "{{ Session::get('message') }}";
    M.toast({html: toastHTML})
  }, 2000);

 @endif 
 
</script>
  </body>
</html>

