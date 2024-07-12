<!doctype html>
<html lang="en" dir="ltr">


<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mengelola Data Barang Masuk &amp; Barang Keluar">
    <meta name="author" content="Inventory-TI">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="wvxJfyiA4PrbgR5KATB9MlptDr7Sg4febJO6LDin" />

    <!-- FAVICON -->
            <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/assets/default/web/default.png" />
    
    <!-- TITLE -->
    <title>Dashboard | Inventory-TI</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="http://127.0.0.1:8000/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="http://127.0.0.1:8000/assets/css/style.css" rel="stylesheet" />
    <link href="http://127.0.0.1:8000/assets/css/dark-style.css" rel="stylesheet" />
    <link href="http://127.0.0.1:8000/assets/css/transparent-style.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="http://127.0.0.1:8000/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="http://127.0.0.1:8000/assets/colors/color1.css" />
    <style>
        modal.fade {
            z-index: 1050 !important;
        }

        .datepicker {
            z-index: 20000000 !important
        }

        button.cancel {
            background-color: gray !important;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        ::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
        }

        .dataTables_scrollBody::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5;
            height: 10px !important;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #777;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #777;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #777 !important;
        }
    </style>
</head>


    <body
        class="app ltr sidebar-mini light-mode light-menu header-light default-menu">
    
<!-- GLOBAL-LOADER -->
    <div id="global-loader" class="">
    <img src="http://127.0.0.1:8000/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>

<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- APP HEADER -->
        <!-- app-Header -->
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <!-- <a class="logo-horizontal d-flex justify-center" href="index.html">
                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a> -->
            <a class="logo-horizontal" href="http://127.0.0.1:8000">
                <div class="header-brand-img desktop-logo">
                    <div class="d-flex justify-content-center align-items-center">
                                                <img src="http://127.0.0.1:8000/assets/default/web/default.png" height="40px" class="me-1" alt="logo">
                                                <h4 class="fw-bold mt-4 text-white text-uppercase text-truncate">Inventory-TI</h4>
                    </div>
                </div>
                <div class="header-brand-img light-logo1">
                    <div class="d-flex justify-content-center align-items-center">
                                                <img src="http://127.0.0.1:8000/assets/default/web/default.png" height="40px" class="me-1" alt="logo">
                                                <h4 class="fw-bold mt-4 text-black text-uppercase text-truncate">Inventory-TI</h4>
                    </div>
                </div>
            </a>
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex justify-content-between order-lg-2">
                            <!-- Theme-Layout -->
                            <div class="dropdown d-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-minimize fullscreen-button"></i>
                                </a>
                            </div>
                            <!-- FULL-SCREEN -->
                            <div class="dropdown d-none notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="notifications-menu">
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                <i class="fe fe-mail"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">New Application received
                                                </h5>
                                                <span class="notification-subtext">3 days ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                <i class="fe fe-check-circle"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Project has been
                                                    approved</h5>
                                                <span class="notification-subtext">2 hours ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                <i class="fe fe-shopping-cart"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Your Product Delivered
                                                </h5>
                                                <span class="notification-subtext">30 min ago</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="notify-list.html">
                                            <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                <i class="fe fe-user-plus"></i>
                                            </div>
                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Friend Requests</h5>
                                                <span class="notification-subtext">1 day ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="notify-list.html" class="dropdown-item text-center p-3 text-muted">View all
                                        Notification</a>
                                </div>
                            </div>

                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                    <div class="text-end">
                                        <h5 class="text-dark mb-0 me-4 fs-14 fw-semibold">Super Administrator</h5>
                                        <small class="text-muted me-4">Super Admin</small>
                                    </div>
                                                                        <img src="http://127.0.0.1:8000/assets/default/users/undraw_profile.svg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                                                    </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <!-- <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Super Administrator</h5>
                                            <small class="text-muted">Super Admin</small>
                                        </div>
                                    </div> -->
                                    <!-- <div class="dropdown-divider m-0"></div> -->
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/profile/1">
                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/appreance">
                                        <i class="dropdown-icon fe fe-layout"></i> Tampilan / Tema
                                    </a>
                                    <a class="dropdown-item" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modalLogout">
                                        <i class="dropdown-icon fe fe-log-out"></i> Log out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->        <!-- END APP HEADER -->

        <!-- SIDEBAR -->
        <!--APP-SIDEBAR-->
 <div class="sticky">
     <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
     <div class="app-sidebar">
         <div class="side-header">
             <a class="header-brand1" href="http://127.0.0.1:8000/admin">
                                  <img src="http://127.0.0.1:8000/assets/default/web/default.png" height="40px" class="header-brand-img toggle-logo" alt="logo">
                 <div class="header-brand-img desktop-logo">
                     <div class="d-flex align-items-center">
                         <img src="http://127.0.0.1:8000/assets/default/web/default.png" height="40px" class="me-1" alt="logo">
                         <h4 class="fw-bold mt-4 text-white text-uppercase text-truncate">Inventory-TI</h4>
                     </div>
                 </div>
                 <img src="http://127.0.0.1:8000/assets/default/web/default.png" height="40px" class="header-brand-img light-logo" alt="logo">
                 <div class="header-brand-img light-logo1">
                     <div class="d-flex align-items-center">
                         <img src="http://127.0.0.1:8000/assets/default/web/default.png" height="40px" class="me-1" alt="logo">
                         <h4 class="fw-bold mt-4 text-black text-uppercase text-truncate">Inventory-TI</h4>
                     </div>
                 </div>
                              </a>
             <!-- LOGO -->
         </div>
         <div class="main-sidemenu">
             <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                     <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                 </svg></div>
             <ul class="side-menu">
                                  <li class="sub-category">
                     <h3>Menu</h3>
                 </li>
                                                                                                      <li class="slide">
                     <a class="side-menu__item active" data-bs-toggle="slide" href="http://127.0.0.1:8000/admin/dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                 </li>
                                                                                                                                        <li class="slide ">
                     <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)">
                         <i class="side-menu__icon fe fe-package"></i>
                         <span class="side-menu__label">Master Barang</span><i class="angle fe fe-chevron-right"></i></a>
                     <ul class="slide-menu">
                                                                                                    <li><a href="http://127.0.0.1:8000/admin/jenisbarang" class="slide-item ">Jenis</a></li>
                                                                                                                             <li><a href="http://127.0.0.1:8000/admin/satuan" class="slide-item ">Satuan</a></li>
                                                                                                                             <li><a href="http://127.0.0.1:8000/admin/merk" class="slide-item ">Lokasi</a></li>
                                                                                                                             <li><a href="http://127.0.0.1:8000/admin/barang" class="slide-item ">Barang</a></li>
                                                                       </ul>
                 </li>
                                                                                                                       <li class="slide">
                     <a class="side-menu__item " data-bs-toggle="slide" href="http://127.0.0.1:8000/admin/customer"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Customer</span></a>
                 </li>
                                                                                                                                        <li class="slide ">
                     <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)">
                         <i class="side-menu__icon fe fe-repeat"></i>
                         <span class="side-menu__label">Transaksi</span><i class="angle fe fe-chevron-right"></i></a>
                     <ul class="slide-menu">
                                                                                                    <li><a href="http://127.0.0.1:8000/admin/barang-masuk" class="slide-item ">Barang Masuk</a></li>
                                                                                                                             <li><a href="http://127.0.0.1:8000/admin/barang-keluar" class="slide-item ">Barang Keluar</a></li>
                                                                       </ul>
                 </li>
                                                                                                                                        <li class="slide ">
                     <a class="side-menu__item " data-bs-toggle="slide" href="javascript:void(0)">
                         <i class="side-menu__icon fe fe-printer"></i>
                         <span class="side-menu__label">Berita Acara</span><i class="angle fe fe-chevron-right"></i></a>
                     <ul class="slide-menu">
                                                                                                    <li><a href="http://127.0.0.1:8000/admin/lap-barang-masuk" class="slide-item ">Lap Barang Masuk</a></li>
                                                                                                                             <li><a href="http://127.0.0.1:8000/admin/lap-barang-keluar" class="slide-item ">Request Berita Acara</a></li>
                                                                                                                             <li><a href="http://127.0.0.1:8000/admin/lap-stok-barang" class="slide-item ">Lap Stok Barang</a></li>
                                                                       </ul>
                 </li>
                                                   
                 <li class="sub-category">
                     <h3>Other</h3>
                 </li>

                                                                                                      
                                  <li class="slide ">
                     <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                         <i class="side-menu__icon fe fe-settings"></i>
                         <span class="side-menu__label">Settings</span><i class="angle fe fe-chevron-right"></i></a>
                     <ul class="slide-menu">
                                                  <li><a href="http://127.0.0.1:8000/admin/menu" class="slide-item ">Menu</a></li>
                                                  <li class="sub-slide ">
                             <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">User</span><i class="sub-angle fe fe-chevron-right"></i></a>
                             <ul class="sub-slide-menu">
                                                                  <li><a class="sub-slide-item " href="http://127.0.0.1:8000/admin/role">Role</a></li>
                                                                                                   <li><a class="sub-slide-item " href="http://127.0.0.1:8000/admin/user">List</a></li>
                                                                                                   <li><a class="sub-slide-item " href="http://127.0.0.1:8000/admin/akses/role">Akses</a></li>
                                                              </ul>
                         </li>
                                                  <li><a href="http://127.0.0.1:8000/admin/web" class="slide-item ">Web</a></li>
                                              </ul>
                 </li>
                 

                 <li class="slide">
                     <a class="side-menu__item" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modalLogout"><i class="side-menu__icon fe fe-log-out"></i><span class="side-menu__label">Log Out</span></a>
                 </li>


             </ul>
             <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                     <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                 </svg></div>
         </div>
     </div>
     <!--/APP-SIDEBAR-->
 </div>        <!-- END SIDEBAR -->

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-gray">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW 1 OPEN -->
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-primary img-card box-primary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">3</h2>
                        <p class="text-white mb-0">Jenis Barang </p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-package text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-secondary img-card box-secondary-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">3</h2>
                        <p class="text-white mb-0">Satuan Barang</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-package text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">3</h2>
                        <p class="text-white mb-0">Lokasi Barang</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-package text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-info img-card box-info-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">2</h2>
                        <p class="text-white mb-0">Barang</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-package text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-success img-card box-success-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">0</h2>
                        <p class="text-white mb-0">Barang Masuk</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-repeat text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-danger img-card box-danger-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">0</h2>
                        <p class="text-white mb-0">Barang Keluar</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-repeat text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-purple img-card box-purple-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">1</h2>
                        <p class="text-white mb-0">Customer</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-user text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-warning img-card box-warning-shadow">
            <div class="card-body">
                <div class="d-flex">
                    <div class="text-white">
                        <h2 class="mb-0 number-font">4</h2>
                        <p class="text-white mb-0">User</p>
                    </div>
                    <div class="ms-auto"> <i class="fe fe-user text-white fs-40 me-2 mt-2"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL END -->
</div>
<!-- ROW 1 CLOSED -->


                </div>
                <!-- CONTAINER END -->
            </div>
        </div>
        <!--app-content close-->

    </div>

    <!-- SIDEBAR RIGHT -->
    <!-- (-) -->
    <!-- END SIDEBAR RIGHT -->

    <!-- FOOTER -->
    <footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright PTPN IV REGIONAL III© 2024
            </div>
        </div>
    </div>
</footer>    <!-- FOOTER END -->

</div>

<!-- MODAL LOGOUT -->
<div class="modal fade" data-bs-backdrop="static" id="modalLogout">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <form method="GET" action="http://127.0.0.1:8000/admin/logout" name="myFormH" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="wvxJfyiA4PrbgR5KATB9MlptDr7Sg4febJO6LDin">                <div class="modal-body text-center p-4 pb-5">
                    <button type="reset" aria-label="Close" class="btn-close position-absolute"
                        data-bs-dismiss="modal"><span aria-hidden="true">×</span></button>
                    <br>
                    <i class="icon icon-exclamation fs-70 text-warning lh-1 my-5 d-inline-block"></i>
                    <h3 class="mb-5">Yakin logout ?</h3>
                    <button type="submit" class="btn btn-danger-light pd-x-25">Iya</button>
                    <button type="reset" data-bs-dismiss="modal" class="btn btn-default pd-x-25">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="http://127.0.0.1:8000/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="http://127.0.0.1:8000/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Sticky js -->
<script src="http://127.0.0.1:8000/assets/js/sticky.js"></script>

<!-- INPUT MASK JS-->
<script src="http://127.0.0.1:8000/assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS-->
<script src="http://127.0.0.1:8000/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- SIDEBAR JS -->
<script src="http://127.0.0.1:8000/assets/plugins/sidebar/sidebar.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="http://127.0.0.1:8000/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/p-scroll/pscroll.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/p-scroll/pscroll-1.js"></script>

<!-- FILE UPLOADES JS -->
<script src="http://127.0.0.1:8000/assets/plugins/fileuploads/js/fileupload.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/fileuploads/js/file-upload.js"></script>

<!-- INTERNAL Bootstrap-Datepicker js-->
<script src="http://127.0.0.1:8000/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- SELECT2 JS -->
<script src="http://127.0.0.1:8000/assets/plugins/select2/select2.full.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/select2.js"></script>

<!-- BOOTSTRAP-DATERANGEPICKER JS -->
<script src="http://127.0.0.1:8000/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- INTERNAL Bootstrap-Datepicker js-->
<script src="http://127.0.0.1:8000/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<!-- INTERNAL Sumoselect js-->
<script src="http://127.0.0.1:8000/assets/plugins/sumoselect/jquery.sumoselect.js"></script>

<!-- TIMEPICKER JS -->
<script src="http://127.0.0.1:8000/assets/plugins/time-picker/jquery.timepicker.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/time-picker/toggles.min.js"></script>

<!-- INTERNAL intlTelInput js-->
<script src="http://127.0.0.1:8000/assets/plugins/intl-tel-input-master/intlTelInput.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/intl-tel-input-master/country-select.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/intl-tel-input-master/utils.js"></script>

<!-- INTERNAL jquery transfer js-->
<script src="http://127.0.0.1:8000/assets/plugins/jQuerytransfer/jquery.transfer.js"></script>

<!-- INTERNAL multi js-->
<script src="http://127.0.0.1:8000/assets/plugins/multi/multi.min.js"></script>

<!-- DATEPICKER JS -->
<script src="http://127.0.0.1:8000/assets/plugins/date-picker/date-picker.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/date-picker/jquery-ui.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/input-mask/jquery.maskedinput.js"></script>

<!-- COLOR PICKER JS -->
<script src="http://127.0.0.1:8000/assets/plugins/pickr-master/pickr.es5.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/picker.js"></script>

<!-- MULTI SELECT JS-->
<script src="http://127.0.0.1:8000/assets/plugins/multipleselect/multiple-select.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/multipleselect/multi-select.js"></script>

<!-- SWEET-ALERT JS -->
<script src="http://127.0.0.1:8000/assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/sweet-alert.js"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="http://127.0.0.1:8000/assets/plugins/chart/Chart.bundle.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/chart/rounded-barchart.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/chart/utils.js"></script>

<!-- DATA TABLE JS-->
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="http://127.0.0.1:8000/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="http://127.0.0.1:8000/assets/js/table-data.js"></script>
