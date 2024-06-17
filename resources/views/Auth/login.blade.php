
    

    <!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
  data-preloader="disable"
  data-bs-theme="dark"
>
  <!-- Mirrored from themesbrand.com/invoika/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 11:40:53 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Invoika - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

    <!-- plugin css -->
    <link
      href="{{asset('assets/libs/jsvectormap/css/jsvectormap.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link
      href="{{asset('assets/css/bootstrap.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
  </head>

  <body>
  <div id="layout-wrapper">
    <!-- header -->
   

     <!-- sidebar -->

    


    <!-- main content -->
   

   <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <center>
            <div class="card text-start">
              
                <div class="card-body">
                       
                 <div class="row">
                            <div class="col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Login</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                      
                                    
                                        <form action="{{route('postlogin')}}" method="post">
    @csrf 
                                                 <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="emailidInput" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" placeholder="example@gamil.com" id="emailidInput"  name="email">
                                                    </div>
                                                </div> 
                                                <!--end col-->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="compnayNameinput" class="form-label">Password</label>
                                                        <input type="text" class="form-control" placeholder="Enter your password" id="compnayNameinput"  name="password">
                                                    </div>
                                                </div>
                                               
                                               
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary"> Submit</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                   
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div> <!-- end col -->


                        </div>
                </div>
            </div>
            
        </center>
    </div>
    <div class="col-md-3"></div>
   </div>

    

     







  </div>

  <!-- preloader -->

  <div id="preloader">
      <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>


    <!--start back-to-top-->
    <button
      onclick="topFunction()"
      class="btn btn-danger btn-icon"
      id="back-to-top"
    >
      <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->







    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
  </body>

  <!-- Mirrored from themesbrand.com/invoika/layouts/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 11:41:27 GMT -->
</html>


















