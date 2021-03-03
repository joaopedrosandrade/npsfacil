<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('pageTitle') - NPS Fácil </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NPS Fácil - Net Promoter Score Software" name="description" />
    <meta content="João Pedro Andrade" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- jquery.vectormap css -->
    <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

       <!-- DataTables -->
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">

                            <div class="dropdown d-inline-block d-lg-none ml-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Pesquise aqui ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                          

                            <div class="dropdown d-none d-lg-inline-block ml-1">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                         

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   
                                    <span class="d-none d-xl-inline-block ml-1">  {{ Auth::user()->name }}</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                           
                                    <a class="dropdown-item text-danger" class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Sair do Sistema</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        

                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="{{route('home')}}" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                                    </span>
                                </a>

                                <a href="{{route('home')}}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="35">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                            <!-- App Search-->
                            <form class="app-search d-none d-lg-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Pesquise aqui...">
                                    <span class="bx bx-search-alt"></span>
                                </div>
                            </form>

                           
                        </div>

                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
         

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{ Auth::user()->name }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">{{ Auth::user()->empresa }}</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('home')}}" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashhboard</span>
                    </a>
                </li>
                

            

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-shield-star-outline"></i>
                        <span>Avaliações</span>
                    </a>
                </li>

          

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Clientes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('cliente.cadastro')}}">Cadastrar</a></li>
                        <li><a href="{{route('cliente.index')}}">Listar</a></li>
                      
                    </ul>
                </li>

                <li class="menu-title">SISTEMA</li>


                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span>Cadastrar Usuário</span>
                    </a>
                </li>

          

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<div class="main-content">

    @yield('content')
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © NPS FÁCIL.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                       Desenvolvido por João P. Andrade
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

   

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

     <!-- parsley plugin -->
     <script src="{{asset('assets/libs/parsleyjs/parsley.min.js')}}"></script>


     @yield('js')
       <!-- form mask -->
    <script src="{{asset('assets/libs/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

    <!-- form mask init -->
    <script src="{{asset('assets/js/pages/form-mask.init.js')}}"></script>
     <!-- validation init -->
     <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>

    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>