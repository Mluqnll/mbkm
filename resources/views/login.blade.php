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
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('public') }}/assets/css/app-rtl.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="{{ url('public') }}/assets/images/logo-sm.png" height="50"
                                            alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Started
                                        Dastyle</h4>
                                    <p class="text-muted  mb-0">Sign in to continue to Dastyle.</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                        <form action="{{ url('login') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="username"
                                                         placeholder="Enter username">
                                                </div>
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" name="password"
                                                    placeholder="Enter password">
                                                </div>
                                            </div>
                                            <!--end form-group-->


                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    >Log In <i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">Mannatthemes © 2020</span>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->




    <!-- jQuery  -->
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/waves.js"></script>
    <script src="{{ url('public') }}/assets/js/feather.min.js"></script>
    <script src="{{ url('public') }}/assets/js/simplebar.min.js"></script>


</body>

</html>
