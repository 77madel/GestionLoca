@include("partials.header")

    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      @include("partials.navbar")

      <div class="main-sidebar sidebar-style-2">
       @include("partials.sidebar")
      </div>
      <!-- Main Content -->
      <div class="main-content">

        @yield("content")

        @include("partials.setingsid")
      </div>
      @include("partials.footer")
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset ("js/app.min.js") }}"></script>
  <!-- JS Libraies -->
  <script src="{{asset ("bundles/apexcharts/apexcharts.min.js") }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset ("js/page/index.js") }}"></script>
  <!-- Template JS File -->
  <script src="{{asset ("js/scripts.js") }}"></script>
  <!-- Custom JS File -->
  <script src="{{asset ("js/custom.js") }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 

  @livewireScripts
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
