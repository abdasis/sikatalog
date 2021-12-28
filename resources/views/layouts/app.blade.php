<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Sikatalog | Sistem informasi menampilkan produk perusahaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sikatalog adalah sistem informasi untuk menampilkan profil perusahaan dan menampilkan produk dari perusahaan" name="description" />
    <meta content="Abd. Aziz" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('admin/css/config/default/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('admin/css/config/default/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('admin/css/config/default/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{asset('admin/css/config/default/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    @livewireStyles
</head>

<!-- body start -->
<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <x-admin.navbar/>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <x-admin.sidebar/>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <x-admin.breadcrumb/>
                <!-- end page title -->

                {{$slot}}

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <x-admin.footer/>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="{{asset('admin/js/vendor.min.js')}}"></script>

<!-- App js-->
<script src="{{asset('admin/js/app.min.js')}}"></script>


</body>
</html>
