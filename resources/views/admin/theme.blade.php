<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 09:50:55 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
      
      function changeDropzoneUrl(newUrl) {
        myDropzone1.options.url = newUrl;
    }

    $(function(){
     $(".open-AddBookDialog").click(function(event){
    var button = $(event.relatedTarget); // Bouton qui a déclenché le modal
    var categoryId = $(this).data('id');
    $.ajax({
    url: '/category/' + categoryId,
    type: 'GET',
    success: function (response) {
        var data = response.data;
        $('#categoryname1').val(data.nom);
        $('#categorydesc1').val(data.description);
        $('#imageToUpdate').attr('src', data.photo);
        $('#formDropzone1').attr('action', '/updatecategory/' + categoryId); // Mettre à jour l'URL de l'action du formulaire

    },
    error: function () {
        $('#categoryDetails').text('Erreur lors de la récupération des informations.');
    }
});


        
  });




  });
    </script>




<script>
      
      function changeDropzoneUrl(newUrl) {
        myDropzone8.options.url = newUrl;
    }

    $(function(){
     $(".open-AddBookDialog1").click(function(event){
    var button = $(event.relatedTarget); // Bouton qui a déclenché le modal
    var societeId = $(this).data('id');
    $.ajax({
    url: '/societe/' + societeId,
    type: 'GET',
    success: function (response) {
        var data = response.data;
        $('#nom').val(data.nom);
        $('#adresse').val(data.adresse);
        $('#tel').val(data.tel);
        $('#email').val(data.email);
        $('#imageToUpdate').attr('src', data.photo);
        $('#formDropzone8').attr('action', '/societeupdate/' + societeId); // Mettre à jour l'URL de l'action du formulaire

    },
    error: function () {
        $('#categoryDetails').text('Erreur lors de la récupération des informations.');
    }
});


        
  });




  });
    </script>


    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{route('admin.index')}}" class="logo logo-dark">
                              
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="42">
                                </span>
                            </a>

                            <a href="{{route('admin.dash')}}" class="logo logo-light">
                               
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                           
                           <div class="dropdown-menu dropdown-megamenu">
                               <div class="row">
                                   <div class="col-sm-8">
                                   </div>
                               </div>

                           </div>
                       </div>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div align="right" width="20%">
                    
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/logo.png') }} "
                                    alt="administrateur">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <a class="dropdown-item text-danger" href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span key="t-logout"></span></a>
                                    </a>

                                    <form id="logout-form" action="" method="POST" class="d-none">
   
</form>
                                    
                                                    </div>

                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{route('admin.dash')}}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                               
                            </li>

                           


                            <li class="menu-title" key="t-apps">Interfaces</li>

                            <!--enseignant-->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                    <span key="t-tasks">Enseignant</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('listeenseignant')}}" key="t-p-list">Liste des Enseignant</a></li>
                                <li><a href="{{route('enseignant.create')}}" key="t-create-new">Créer un nouveau enseignant</a></li>

                                </ul>
                            </li>
                            <!--étudiant-->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-user-graduate"></i>
                                <span key="t-tasks"> &Eacute;tudiant </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href=""key="t-p-list">Liste des &Eacute;tudiant </a></li>
                                <li><a href="" key="t-create-new">Créer un nouveau étudiant</a></li>

                                </ul>
                            </li>
                            <!--classe-->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-book"></i>
                                <span key="t-projects">Classe</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('classe.liste')}}" key="t-p-list">Liste des classes</a></li>
                                    <li><a href="{{route('classe.create')}}" key="t-create-new">Créer un nouveau</a></li>
                                </ul>
                            </li>
                            <!--specialite-->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-clipboard-check"></i>
                                    <span key="t-crypto">Spécialité</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('listespecialite')}}" key="t-p-list">Liste des spécialité</a></li>
                                    <li><a href="{{route('specialite.create')}}" key="t-create-new">Créer un nouveau</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-solid fa-book-open"></i>
                                    <span key="t-crypto">Formation</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('listeFormation')}}" key="t-p-list">Liste des Formations</a></li>
                                    <li><a href="{{route('formation.create')}}" key="t-create-new">créer une nouvelle formation</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-regular fa-building"></i>
                                    <span key="t-crypto">Département</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('listedepartement')}}" key="t-p-list">Liste des départements</a></li>
                                    <li><a href="{{route('departement.create')}}" key="t-create-new">Créer un nouveau</a></li>
                                </ul>
                            </li>
                            <!--nouveaute-->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa-regular fa-newspaper"></i>
                                    <span key="t-crypto">Nouveauté</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="" key="t-p-list">Liste des nouveautés</a></li>
                                    <li><a href="" key="t-create-new">Créer une nouvelle nouveauté</a></li>
                                </ul>
                            </li>
                            <!--contact-->
                            <li>
                                <a href="javascript: void(0);"" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-crypto">Contact</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('listecontact')}}" key="t-p-list">Liste des contact</a></li>
                                    <li><a href="{{route('contact.create')}}" key="t-create-new">Créer un nouveau</a></li>
                                </ul>
                            </li>
                        

                           

                        

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->


















            <!-- ============================================================== -->
            <div class="main-content">

            @yield('contenu')
                </div>
                <!-- End Page-content -->

              
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-thumbnail" alt="layout images">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-4.jpg') }}" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- dashboard init -->
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 09:51:50 GMT -->
</html>