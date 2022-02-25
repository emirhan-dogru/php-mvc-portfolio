<!DOCTYPE html>
<html lang="tr">
  <head>
    <base href="{{ config('BASE_ADMIN_ASSET') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{ admin_url("/login") }}" method="POST">
              <h1>Yönetim Paneli</h1>
              @if (App\Models\Settings::select('firstLogin')->where('id' , 1)->first()->firstLogin == 0)
              <div class="alert alert-primary text-left">
                email : <strong>admin@cvlogin.com</strong> <br>
                password : <strong>12345678</strong>
              </div>
              @endif

              @if (isset($_GET['success']) && $_GET['success'] == 'false')
              <div class="alert alert-danger text-left">
                Email veya şifre hatalı!
              </div>
              @endif

              
              <div>
                <input type="text" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <button class="btn btn-dark btn-block submit" type="submit">Giriş Yap</button>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
