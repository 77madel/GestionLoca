<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset ("css/app.min.css") }}">
  <link rel="stylesheet" href="{{asset ("bundles/bootstrap-social/bootstrap-social.css") }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset ("css/style.css") }}">
  <link rel="stylesheet" href="{{asset ("css/components.css") }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset ("css/custom.css") }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset ("img/favicon.ico") }}' />

  <link rel="stylesheet" href="{{ ("bundles/jquery-selectric/selectric.css") }}">
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              @yield("login")
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
   <!-- General JS Scripts -->
   <script src="{{asset ("js/app.min.js") }}"></script>
    <!-- Template JS File -->
      <script src="{{asset ("js/scripts.js") }}"></script>
      <!-- Custom JS File -->
      <script src="{{asset ("js/custom.js") }}"></script>
      <!-- JS Libraies -->
      <script src="{{asset ("bundles/jquery-pwstrength/jquery.pwstrength.min.js") }}"></script>
      <script src="{{asset ("bundles/jquery-selectric/jquery.selectric.min.js") }}"></script>
      <!-- Page Specific JS File -->
      <script src="{{asset ("js/page/auth-register.js") }}"></script>
      <!-- Template JS File -->
</body>
<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>
