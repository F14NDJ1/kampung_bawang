 <!-- =========================================================
 * Argon Dashboard PRO v1.1.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
 * Copyright 2019 Creative Tim (https://www.creative-tim.com)

 * Coded by Creative Tim

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
  -->
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
     <meta name="author" content="Creative Tim">
     <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
     <!-- Favicon -->
     <link rel="icon" href="./assets/img/brand/favicon.png" type="image/png">
     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
     <!-- Icons -->
     <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
     <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
     <!-- Page plugins -->
     <!-- Argon CSS -->
     <link rel="stylesheet" href="./assets/css/argon.css?v=1.1.0" type="text/css">

     <style>
         @keyframes morph {

             0%,
             100% {
                 border-radius: 42% 56% 72% 28% / 42% 42% 56% 48%;
             }

             33% {
                 border-radius: 72% 28% 48% 48% / 28% 28% 72% 72%;
             }

             66% {
                 border-radius: 100% 56% 56% 100% / 100% 100% 56% 56%;
             }
         }

         .blob {
             overflow: hidden;
             width: 16rem;
             height: 16rem;
             border-radius: 42% 56% 72% 28% / 42% 42% 56% 48%;
             background: #8f44fd url(https://images.unsplash.com/photo-1652488635133-3f186ad5e66e?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=60&raw_url=true&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500);
             background-size: cover;
             background-position: center;

             animation: morph 3.7s linear infinite;
         }

     </style>
 </head>

 <body class="bg-default">
     <!-- Navabr -->
     <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
         <div class="container">
             <a class="navbar-brand" href="{{ url('/dashboard') }}">
                 <img src="./assets/img/brand/white.png">
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                 aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                 <div class="navbar-collapse-header">
                     <div class="row">
                         <div class="col-6 collapse-brand">
                             <a href="{{ url('/dashboard') }}">
                                 <img src="./assets/img/brand/blue.png">
                             </a>
                         </div>
                         <div class="col-6 collapse-close">
                             <button type="button" class="navbar-toggler" data-toggle="collapse"
                                 data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                 aria-label="Toggle navigation">
                                 <span></span>
                                 <span></span>
                             </button>
                         </div>
                     </div>
                 </div>
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                         <a href="{{ url('/dashboard') }}" class="nav-link">
                             <span class="nav-link-inner--text">Dashboard</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('register') }}" class="nav-link">
                             <span class="nav-link-inner--text">Register</span>
                         </a>
                     </li>
                 </ul>
                 <hr class="d-lg-none" />
                 <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                     <li class="nav-item">
                         <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank"
                             data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                             <i class="fab fa-facebook-square"></i>
                             <span class="nav-link-inner--text d-lg-none">Facebook</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial"
                             target="_blank" data-toggle="tooltip" title=""
                             data-original-title="Follow us on Instagram">
                             <i class="fab fa-instagram"></i>
                             <span class="nav-link-inner--text d-lg-none">Instagram</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank"
                             data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                             <i class="fab fa-twitter-square"></i>
                             <span class="nav-link-inner--text d-lg-none">Twitter</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank"
                             data-toggle="tooltip" title="" data-original-title="Star us on Github">
                             <i class="fab fa-github"></i>
                             <span class="nav-link-inner--text d-lg-none">Github</span>
                         </a>
                     </li>

                     @if (Route::has('login'))
                         <li class="nav-item">
                             @auth
                                 <a href="{{ url('/dashboard') }}"
                                     class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                             @else
                                 <a href="{{ route('login') }}" target="_blank" class="btn btn-neutral btn-icon">
                                     <span class="nav-link-inner--text">Login</span>
                                 </a>
                             @endauth
                         </li>
                     @endif
                 </ul>
             </div>
         </div>
     </nav>
     <!-- Main content -->
     <div class="main-content">
         <!-- Header -->
         <div class="header bg-primary pt-5 pb-7">
             <div class="blob"></div>
         </div>

     </div>
     <!-- Footer -->
     <footer class="py-5" id="footer-main">
         <div class="container">
             <div class="row align-items-center justify-content-xl-between">
                 <div class="col-xl-6">
                     <div class="copyright text-center text-xl-left text-muted">
                         &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                             target="_blank">Creative Tim</a>
                     </div>
                 </div>
                 <div class="col-xl-6">
                     <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                         <li class="nav-item">
                             <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative
                                 Tim</a>
                         </li>
                         <li class="nav-item">
                             <a href="https://www.creative-tim.com/presentation" class="nav-link"
                                 target="_blank">About Us</a>
                         </li>
                         <li class="nav-item">
                             <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                         </li>
                         <li class="nav-item">
                             <a href="https://www.creative-tim.com/license" class="nav-link"
                                 target="_blank">License</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>
     <!-- Argon Scripts -->
     <!-- Core -->
     <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
     <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
     <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
     <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
     <!-- Optional JS -->
     <script src="./assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
     <!-- Argon JS -->
     <script src="./assets/js/argon.js?v=1.1.0"></script>
     <!-- Demo JS - remove this in your project -->
     <script src="./assets/js/demo.min.js"></script>
 </body>

 </html>
