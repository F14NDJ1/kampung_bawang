<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
    <link rel="shortcut icon" href="../../../asset_dashboards/img/favicon.png">
    <link rel="stylesheet" href="../../../asset_dashboards/css/plugins.css">
    <link rel="stylesheet" href="../../../asset_dashboards/css/style.css">
    <style>
        .artikel {
            max-inline-size: 100%;
            block-size: auto;
            aspect-ratio: 2/1;
            object-fit: cover;
            object-position: top center;
        }

    </style>
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand">
                        <a href="/">
                            <h1 class="" style="color: #000;">Kampung Bawang</h1>
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="./1-home.html"><img src="../../../asset_dashboards/img/logo-light.png"
                                    srcset="../../../asset_dashboards/img/logo-light@2x.png 2x" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/about" data-bs-toggle="">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/artikel" data-bs-toggle="">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/galeri" data-bs-toggle="">Galeri</a>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                                <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!-- /offcanvas-nav-other -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                        <h1 class="display-1 mb-3">Business News</h1>
                        <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest
                            company
                            news and business articles.</p>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        @if ($data->count())
            <section class="wrapper bg-light">
                <div class="container pb-14 pb-md-16">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="blog classic-view mt-n17">
                                <article class="post">
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale"><a
                                                class="link-dark" href="./blog-post.html"><img
                                                    src="\images\{{ $data[0]->thumbnail }}" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <!-- /.post-category -->
                                                <h2 class="post-title mt-1 mb-0"><a class="link-dark"
                                                        href="./blog-post.html">{{ $data[0]->name_content }}</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                {!! Str::limit($data[0]->content, 500) !!}
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i
                                                        class="uil uil-calendar-alt"></i><span>{{ $data[0]->created_at->isoFormat('dddd, DD/MM/YYYY') }}</span>
                                                </li>

                                                <li class="post-likes ms-auto"><a
                                                        href="#"><i></i>{{ $data[0]->created_at->diffForHumans() }}</a>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
            </section>
        @endif
        <section class="wrapper bg-light">
            <div class="pb-14 pb-md-16">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- /.blog -->
                        <div class="blog grid grid-view">
                            <div class="row isotope gx-md-8 gy-8 mb-8">

                                @foreach ($data->skip(1) as $artikel)
                                    <article class="item post col-md-6">
                                        <div class="card">
                                            <figure class="card-img-top overlay overlay-1 hover-scale artikel"><a
                                                    href="#">
                                                    <img src="\images\{{ $artikel->thumbnail }}" alt="" /></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Read More</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body">
                                                <div class="post-header">
                                                    <div class="post-category text-line">
                                                        <a href="#" class="hover"
                                                            rel="category">{{ $artikel->name_content }}</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content">
                                                    {!! Str::limit($artikel->content, 180) !!}
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer">
                                                <ul class="post-meta d-flex mb-0">
                                                    <li class="post-date"><i
                                                            class="uil uil-calendar-alt"></i><span>{{ $artikel->created_at->isoFormat('dddd, DD/MM/YYYY') }}</span>
                                                    </li>

                                                    <li class="post-likes ms-auto"><a
                                                            href="#"><i></i>{{ $artikel->created_at->diffForHumans() }}</a>
                                                    </li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->
                                    </article>
                                @endforeach
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse mt-5 mt-md-16">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="../../../asset_dashboards/img/logo-light.png"
                            srcset="../../../asset_dashboards/img/logo-light@2x.png 2x" alt="" />
                        <p class="mb-4">© 2022 Kampung Bawang. <br class="d-none d-lg-block" />All rights
                            reserved.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                </div>
                <div class="col-md-4 col-lg-3">
                </div>
            </div>
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="../../../asset_dashboards/js/plugins.js"></script>
    <script src="../../../asset_dashboards/js/theme.js"></script>
</body>

</html>
