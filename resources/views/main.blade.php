<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('partials._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('partials._settings-panel')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('partials._sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('partials._footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('partials._script')
</body>

</html>

