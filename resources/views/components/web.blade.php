<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <!-- Page Title -->
    <title>Nischinto - Medical landing page HTML template</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ url('public') }}/web/assets/img/favicon.png" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/fontawesome.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/slick.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/lightgallery.min.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/animate.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/jQueryUi.min.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/textRotate.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/select2.min.css" />
    <link rel="stylesheet" href="{{ url('public') }}/web/assets/css/style.css" />
    <!-- DataTables -->
    <link href="{{ url('public') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('public') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ url('public') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body>
    <div class="st-perloader">
        <div class="st-perloader-in">
            <div class="st-wave-first">
                <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08"
                    xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" />
                    </g>
                </svg>
            </div>
            <div class="st-wave-second">
                <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08"
                    xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" />
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <!-- Start Header Section -->
    <x-layout.web.header />
    <!-- End Header Section -->

    <div class="st-content">
        <div class="container">
            <div class="st-hero-text">
                <div class="st-height-b40 st-height-lg-b40"></div>

            </div>
        </div>
        <!-- Start Hero Seciton -->
        {{ $slot }}
    </div>
    <!-- Start Footer -->
    <x-layout.web.footer />
    <!-- End Footer -->

    <!-- Start Video Popup -->
    <div class="st-video-popup">
        <div class="st-video-popup-overlay"></div>
        <div class="st-video-popup-content">
            <div class="st-video-popup-layer"></div>
            <div class="st-video-popup-container">
                <div class="st-video-popup-align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="st-video-popup-close"></div>
            </div>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Scripts -->
    <script src="{{ url('public') }}/web/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/isotope.pkg.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/jquery.slick.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/mailchimp.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/counter.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/lightgallery.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/ripples.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/wow.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/jQueryUi.js"></script>
    <script src="{{ url('public') }}/web/assets/js/textRotate.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/select2.min.js"></script>
    <script src="{{ url('public') }}/web/assets/js/main.js"></script>

    <!-- Required datatable js -->
    <script src="{{ url('public') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ url('public') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ url('public') }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets/pages/jquery.datatable.init.js"></script>
</body>

</html>
