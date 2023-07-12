<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dastyle - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jvectormap -->
    <link href="{{ url('public') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="{{ url('public') }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('public') }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ url('public') }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- App css -->
    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('public') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    <x-layout.admin.sidebar />
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <x-layout.admin.header />
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box float-right">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                        <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                        <span class="" id="Select_date">Jan 11</span>
                                        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i data-feather="download" class="align-self-center icon-xs"></i>
                                    </a>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <!-- end page title end breadcrumb -->
                {{ $slot }}
                <!--end row-->

            </div><!-- container -->
            <x-layout.admin.footer />
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/metismenu.min.js"></script>
    <script src="{{ url('public') }}/assets/js/waves.js"></script>
    <script src="{{ url('public') }}/assets/js/feather.min.js"></script>
    <script src="{{ url('public') }}/assets/js/simplebar.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery-ui.min.js"></script>
    <script src="{{ url('public') }}/assets/js/moment.js"></script>
    <script src="{{ url('public') }}/assets/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="{{ url('public') }}/assets/plugins/apex-charts/apexcharts.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="{{ url('public') }}/assets/pages/jquery.analytics_dashboard.init.js"></script>

    <!-- Required datatable js -->
    <script src="{{url('public')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{url('public')}}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{url('public')}}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/assets/pages/jquery.datatable.init.js"></script>

    <!-- App js -->
    <script src="{{ url('public') }}/assets/js/app.js"></script>

</body>

</html>
