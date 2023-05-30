@if(session('login') == null)
<script>
  window.location = '/';
</script>
@endif
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    #sidenav-collapse-main a:hover{
      background-color: hsla(0, 0%, 98%, 0.2);
    }
  </style>
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
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js')}}" crossorigin="anonymous"></script>
  <script src="sweetalert2.all.min.js"></script>
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/corporate-ui-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start" id="sidenav-main">
    <div class="sidenav-header">
      <!-- <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 end-0 top-0 d-none d-xl-none"></i> -->
      <a class="navbar-brand d-flex align-items-center pe-5" href="/dashboard" target="_blank">
        <span class="font-weight-bold text-lg">
          Welcome, {{ session()->get('username') }}
          <br>
          Academic Application
        </span>
      </a>
    </div>
    <div class="collapse navbar-collapse px-4  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center hover-zoom">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-command" viewBox="0 0 16 16">
              <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  " href="/user">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="/profile">
            <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile Management</span>
          </a>
        </li>

      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-dark">Academic Application 2023</a></li>
          </ol>
        </nav>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-3 d-flex align-items-center">

                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Logout">
                  Log Out
                </a>

                  <!-- <p class="p-2">User : {{ session()->get('username') }}</p> -->
            </li>
            <li class="">
              <a href="/profile">
              <img style="width:65px; border-radius:10px;" src="https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2021/08/24074830/joko-widodo-1024x682-1-810x539.jpg">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
      <hr class="my-0">
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-12">
          <div class="card shadow-xs border">
            <div class="card-header pb-0">
              <div class="d-sm-flex align-items-center mb-3">
                <div>
                  <h6 class="font-weight-bold text-lg mb-0">Welcome To Academic Application, {{ session()->get('username') }}!</h6>
                  <p class="text-sm mb-sm-0 mb-2">Academic Application Exam Project</p>
                </div> -->
              </div>
    
                 @yield('content')
      
          </div>
<footer class="text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div>
     <div class="text-center p-3 text-light bg-dark bg-slate-900">
    Copyright © 2023 Academic Application By
    <a class="text-light" href="#"><u>Muhammad Fariz Al-Haq</U></a>
  </div>
  </div>
  <!-- Copyright -->
</footer>
        </div>
      </div>
    </div>
</main>

         <div class="modal fade" id="Logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log Out From <u>{{session()->get('username')}}</u>?</h5>
                        <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <span>Are You Sure Want To Log Out?</span> <br>
                        <span>This Action Will Deleted Your Session</span>
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-danger" data-bs-dismiss="modal" href="#">Cancel</a>
                        <a type="button" class="btn btn-primary" href="/logout">Log Out</a>
                      </div>
                    </div>
                  </div>
                </div>

  @include('sweetalert::alert')
</body>

</html>