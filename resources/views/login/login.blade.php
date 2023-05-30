<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Academic Application
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-black text-dark display-6">Welcome To</h3>
                  <h3 class="font-weight-black text-dark display-7">Academic Application</h3>
                  <p class="mb-0">Welcome! Please enter your username and password first.</p>
                </div>
                <div class="card-body">
                  <form role="form" action="/loginproses" method="post">
                    @csrf
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="username" class="form-control" placeholder="Enter Username" name="username"  value="{{ old('username') }}"  autofocus>
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Enter Password" name="password">
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Log In" class="btn btn-primary form-control">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8" style="background-image:url('https://cdn0-production-images-kly.akamaized.net/HmLMbf1JlQatOSIPqXVerc0Eomo=/1200x900/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/744938/original/006765000_1412142745-cast-of-spongebob-squarepants-sbsp-nickelodeon-nick-nicktoons-nicktoon-sbsp-mr-krabs-squidward-tentacles-gary-the-snail-patrick-star-sandy-cheeks-plankton.jpg')">
                  <div class="blur mt-12 p-4 text-center border border-white border-radius-md position-absolute fixed-bottom m-4">
                    <h2 class="mt-3 text-dark font-weight-bold">Academic Application By Fariz</h2>
                    <h6 class="text-dark text-sm mt-5">Copyright © 2023 Academic Application.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include('sweetalert::alert')
</body>

</html>