<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>ورود به پنل مدیریت  </title>

    <!-- Bootstrap core CSS -->

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    @yield('script')
</head>

<body>

    <section id="container" class="">
        <!--header start-->
        <!--header end-->
        <!--sidebar start-->
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <section class="content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="card card-primary col-md-4">
                                <div class="card-header">
                                    <h3 class="card-title">  ورود به پنل مدیریت  </h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('login.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"> ایمیل </label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
                                          </div>
                  
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">رمز عبور</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                        </div>
                
                                        <button type="submit" class="btn btn-primary">ورود</button>
                
                                    </form>                
                                </div>
                            </div>    
                        </div>
                    </div>
                
                </section>
                
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/admin/js/jquery.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/admin/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="/admin/js/common-scripts.js"></script>


</body>
</html>
