<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="src/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="src/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="src/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="src/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:src/partials/_navbar.html -->

    {{-- header --}}
    @include('template.header')
    {{-- /header --}}

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:src/partials/_sidebar.html -->
      
      {{-- menu --}}
      @include('template.menu')
      {{-- /menu --}}

      <!-- partial -->
      <div class="main-panel">        
        
        {{-- content --}}
        @yield('content')
        {{-- /content --}}

        <!-- content-wrapper ends -->
        <!-- partial:src/partials/_footer.html -->
        

        {{-- footer --}}
        @include('template.footer')
        {{-- footer --}}

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="src/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="src/js/off-canvas.js"></script>
  <script src="src/js/hoverable-collapse.js"></script>
  <script src="src/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="src/js/file-upload.js"></script>
  <!-- End custom js for this page-->
  @yield('script')
</body>

</html>
