<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('backend/img/logo/logo.png')}}" rel="icon">
    <title>Easy Learning Invertory - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="app">
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                    <div class="sidebar-brand-icon">
                        <img src="{{asset('backend/img/logo/logo2.png')}}">
                    </div>
                    <div class="sidebar-brand-text mx-3">InventoryApp</div>
                </a>
                <hr class="sidebar-divider my-0">
                <li class="nav-item ">
                    <router-link class="nav-link" to="/home">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></router-link>
                </li>
                <li class="nav-item ">
                    <router-link class="nav-link" to="/pos">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>POS</span></router-link>
                </li>
                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Features
                </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee"
                        aria-expanded="true" aria-controls="collapseEmployee">
                        <i class="fas fa-user-alt"></i>
                        <span>Employee</span>
                    </a>
                    <div id="collapseEmployee" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Employee</h6>
                            <router-link class="collapse-item" to="/employee/create">Add one</router-link>
                            <router-link class="collapse-item" to="/employees">See All</router-link>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSupplier"
                        aria-expanded="true" aria-controls="collapseSupplier">
                        <i class="fas fa-truck"></i>
                        <span>Supplier</span>
                    </a>
                    <div id="collapseSupplier" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supplier</h6>
                            <router-link class="collapse-item" to="/store-supplier">Add one</router-link>
                            <router-link class="collapse-item" to="/supplier">See All</router-link>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                        aria-expanded="true" aria-controls="collapseCategory">
                        <i class="fas fa-align-left"></i>
                        <span>Category</span>
                    </a>
                    <div id="collapseCategory" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Category</h6>
                            <router-link class="collapse-item" to="/store-category">Add one</router-link>
                            <router-link class="collapse-item" to="/category">See All</router-link>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                        aria-expanded="true" aria-controls="collapseProduct">
                        <i class="fas fa-tag"></i>
                        <span>Product</span>
                    </a>
                    <div id="collapseProduct" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Product</h6>
                            <router-link class="collapse-item" to="/store-product">Add one</router-link>
                            <router-link class="collapse-item" to="/product">See All</router-link>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExpense"
                        aria-expanded="true" aria-controls="collapseExpense">
                        <i class="far fa-money-bill-alt"></i>
                        <span>Expense</span>
                    </a>
                    <div id="collapseExpense" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Expense</h6>
                            <router-link class="collapse-item" to="/store-expense">Add one</router-link>
                            <router-link class="collapse-item" to="/expense">See All</router-link>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer"
                        aria-expanded="true" aria-controls="collapseCustomer">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Customer</span>
                    </a>
                    <div id="collapseCustomer" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Customer</h6>
                            <router-link class="collapse-item" to="/store-customer">Add one</router-link>
                            <router-link class="collapse-item" to="/customer">See All</router-link>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSalary"
                        aria-expanded="true" aria-controls="collapseSalary">
                        <i class="fas fa-cash-register"></i>
                        <span>Salary</span>
                    </a>
                    <div id="collapseSalary" class="collapse" aria-labelledby="headingBootstrap"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Salary</h6>
                            <router-link class="collapse-item" to="/given-salary">Pay an employee</router-link>
                            <router-link class="collapse-item" to="/salary">All Salaries</router-link>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed">
                        <i class="fas fa-store"></i>
                        <router-link class="collapse-item" to="/stock"> <span>Stock</span></router-link>
                    </a>

                </li>




                <hr class="sidebar-divider">
                <div class="version" id="version-ruangadmin"></div>
            </ul>
            <!-- Sidebar -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- TopBar -->
                    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-1 small"
                                                placeholder="What do you want to look for?" aria-label="Search"
                                                aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle" src="{{asset('backend/img/boy.png')}}"
                                        style="max-width: 60px">
                                    <router-link to="/logout" class="ml-2 d-none d-lg-inline text-white small">Logout
                                    </router-link>
                                </a>

                            </li>
                        </ul>
                    </nav>
                    <!-- Topbar -->

                    <!-- Container Fluid-->
                    <div class="container-fluid relative" id="container-wrapper">
                        <transition name="custom-classes-transition" enter-active-class="animated fadeInDown">
                            <router-view></router-view>
                        </transition>

                    </div>
                    <!---Container Fluid-->
                </div>
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> - developed by
                                <b><a href="https://lyounsi.vercel.app" target="_blank">Abdellah Lyounsi</a></b>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer -->
            </div>
        </div>
    </div>
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script type="text/javascript">
        let token = localStorage.getItem('token');
     if (token) {
      $("#sidebar").css("display","");
      $("#topbar").css("display","");

     }
    </script>




    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('backend/js/ruang-admin.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('backend/js/demo/chart-area-demo.js')}}"></script>
</body>

</html>
