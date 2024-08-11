<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>IPEIGB - Institut Préparatoire aux Etudes d'Ingénieurs de Gabés</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets/libs/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/libs/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap2.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style2.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">

                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Espace Extranet</small></a>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    
                     <img src="{{ asset('assets/img/logo3.png')}}"  alt="Logo"> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('index2') }}" class="nav-item nav-link">Nouveautés</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Institut</a>
                            <div class="dropdown-menu m-0">
                            <a href="{{ route('about') }}" class="dropdown-item">Présentation de l'institut</a>
                                <a href="{{ route('motdedirecteur') }}" class="dropdown-item">Mot de directeur</a>
                                <a href="{{ route('reglementation') }}" class="dropdown-item ">Réglementation</a>
                                <a href="{{ route('organigramme') }}" class="dropdown-item">Organigramme</a>
                                <a href="{{ route('infrastructure') }}" class="dropdown-item">Infrastructures</a>
                                <a href="{{ route('statistiques') }}" class="dropdown-item">Statistiques</a>
                                <a href="{{ route('conseils') }}" class="dropdown-item">Conseil scientifique</a>
                                <a href="{{ route('404') }}" class="dropdown-item">Enseignants</a>
                                <a href="{{ route('404') }}" class="dropdown-item">Galerie des photos</a>
                                <a href="{{ route('404') }}" class="dropdown-item">Plan d'accés</a>
                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Formation</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Régime des études</a>
                                <a href="" class="dropdown-item ">Condition de passage</a>
                                <a href="" class="dropdown-item">Diplôme délivré</a>
                                <a href="" class="dropdown-item">Matières enseignés</a>
                                <a href="" class="dropdown-item">Programme</a>
                                <a href="" class="dropdown-item">Lauréats</a>
                           
                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Départements</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Math-Physique</a>
                                <a href="" class="dropdown-item ">Physique-Chimie</a>
                                <a href="" class="dropdown-item">Technologie</a>
                                <a href="" class="dropdown-item">Biologie</a>
           
                           
                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Vie Estudiantine</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Clubs de l'institut</a>
                                <a href="" class="dropdown-item ">Activités sportifs</a>
                                <a href="" class="dropdown-item">Activités culturelles</a>
                            
                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Concours nationaux</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Communiqués</a>
                                <a href="" class="dropdown-item ">Fiche de candidature</a>
                                <a href="" class="dropdown-item">Sujets corrigés</a>
                                <a href="" class="dropdown-item">Our Gallery</a>
                                <a href="" class="dropdown-item">Travel Guides</a>
                                <a href="" class="dropdown-item">Testimonial</a>
                                <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                  
                </div>
            </nav>
        </div>
            

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/img/carousel1.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">IPEIGB - Institut Préaratoire aux Etudes d'Ingénieurs de Gabés</h4>
                                    <p class="mb-5 fs-5">L'excellence au service de l'innovation 
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/carousel2.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">IPEIGB - Institut Préaratoire aux Etudes d'Ingénieurs de Gabés</h4>
                                    <p class="mb-5 fs-5">L'excellence au service de l'innovation 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/carousel3.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">IPEIGB - Institut Préaratoire aux Etudes d'Ingénieurs de Gabés</h4>
                                    <p class="mb-5 fs-5">L'excellence au service de l'innovation 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Que cherchez-vous?">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
         <!-- nouveautés Start -->
        <div class="container-fluid ExploreTour py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Nouveautés</h5>
                   
                </div>
                <div class="tab-class text-center">
                    
                    <div class="tab-content">
                        <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="{{asset('assets/img/news.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                            <div class="national-info"  >
                                            <h6 class="text-white text-uppercase mb-2"   >Actualité     |   02/04/2024</h6>
                                                <h5 class="text-white text-uppercase mb-2"  >Activation de votre compte</h5>
                                                <a href="#" class="btn-hover text-white">Plus <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="{{asset('assets/img/news.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                        <div class="national-info"  >
                                            <h6 class="text-white text-uppercase mb-2"   >Actualité    |   02/04/2024</h6>
                                                <h5 class="text-white text-uppercase mb-2"  >Activation de votre compte</h5>
                                                <a href="#" class="btn-hover text-white">Plus <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="{{asset('assets/img/news.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                        <div class="national-content">
                                        <div class="national-info"  >
                                            <h6 class="text-white text-uppercase mb-2"   >Actualité    |    02/04/2024</h6>
                                                <h5 class="text-white text-uppercase mb-2"  >Activation de votre compte</h5>
                                                <a href="#" class="btn-hover text-white">Plus <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        
                                        <div class="national-plus-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                               
                                   
                                <a href="#"  class="btn-hover ">Toutes les Nouveautés <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- nouveautés end -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{asset('assets/img/about-img.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">A propos de nous</h5>
                       
                        <p class="mb-4">L’institut préparatoire aux études d’ingénieurs de Gabés a  été  crée  en vertu du décret n° du 00/00/00 </p>
                        <p class="mb-4">L'IPEIGB a pour vacation de préparer ces  étudiants pendant un cycle préparatoire aux concours nationaux d’entrée  aux  écoles d’Ingénieurs.
                        Le cycle préparatoire dure deux ans au cours desquels l’étudiant recoit une formation dans l’une des trois filières suivantes ( Maths-physique, physique-chimie, technologie et biologie).</p>
                      
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Lire encore</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Services</h5>
                   
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-icon p-4">
                                        <i class="fa fa-folder-open fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Accés aux documents administratifs</h5>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-icon p-4">
                                        <i class="fa fa-pencil fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Inscription en ligne</h5>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-icon p-4">
                                        <i class="fa fa-book fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Bibliothèque en ligne</h5>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-icon p-4">
                                        <i class="fa fa-flask fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Activités de recherche</h5>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-paper-plane fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Projets</h5>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-handshake fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Consultation/Appels d'offres</h5>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-file fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Support de cours numériques</h5>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Services End -->

       
             <!-- Departements Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Découvrir nos départements</h5>
                    <h1 class="mb-0">Nous avons quatre départements </h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/math.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>100 étudiants</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>8 professeurs</small>
                            </div>
                            
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Département Math-Physique </h5>
                                
                               
                                <p class="mb-4"> Le département MP assure l’enseignement des sciences mathématiques et informatiques pour tous les étudiants de toutes les sections des classes préparatoires au concours d’entrer aux écoles d’ingénieurs, un concours qui permet  encore l’accès à l’école normale supérieure.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Plus</a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/chimie.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>100 étudiants</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>8 professeurs</small>
                            </div>
                           
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Département Physique-Chimie</h5>
                                
                                <p class="mb-4">Le département des études préparatoire aux concours de physique Chimie a pour but de donner une formation de haut niveau en chimie minérale et en chimie organique. Les enseignements sont des cours des TD et des travaux pratiques.
                                </p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/techno.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>100 étudiants</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>8 professeurs</small>
                            </div>
                            
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Département Technologie </h5>
                                
                                <p class="mb-4">Le département des études préparatoires aux concours technologique à l’institut préparatoire aux études d’ingénieur de Gabés offre des formations en science Physique et en science et Technique de l’ingénieur (Systèmes techniques automatisés « STA », conception et fabrication mécanique « CFM »).</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/bg.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>100 étudiants</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>8 professeurs</small>
                            </div>
                            
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Département   Biologie-Géologie </h5>
                               
                                
                                <p class="mb-4">Le département des études préparatoire aux concours Biologie-Géologie (BG) offre une préparation et une formation de base pour les futurs ingénieurs en différents domaines biologiques et géologiques. Après deux ans de préparation, l’étudiant doit passer le concours national d’entrée aux écoles d’ingénieurs.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Departements End -->

        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5 my-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Notre gallerie</h5>
                
               
            </div>
            <div class="tab-class text-center">
                
                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie1.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                       
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie1.jpg')}}" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie2.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie2.jpg')}}" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie3.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie3.jpg')}}" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie4.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie4.jpg')}}" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie5.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                       
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie5.jpg')}}" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie6.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                       
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie6.jpg')}}" data-lightbox="gallery-6" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie7.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie7.jpg')}}" data-lightbox="gallery-7" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie8.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie8.jpg')}}" data-lightbox="gallery-8" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie9.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie9.jpg')}}" data-lightbox="gallery-9" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie10.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie10.jpg')}}" data-lightbox="gallery-10" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie11.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie11.jpg')}}" data-lightbox="gallery-9" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="gallery-item h-100">
                                    <img src="{{asset('assets/img/gallerie12.jpg')}}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                    <div class="gallery-content">
                                        
                                    </div>
                                    <div class="gallery-plus-icon">
                                        <a href="{{asset('assets/img/gallerie12.jpg')}}" data-lightbox="gallery-10" class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        

        <!-- Direction Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Direction de IPEIGB</h5>
                    
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{asset('assets/img/guide-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{asset('assets/img/guide-2.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{asset('assets/img/guide-3.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{asset('assets/img/guide-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction End -->

       
        <!-- statistics Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">IPEIGB en chiffres</h5>
                   
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item text-center rounded pb-4">
                    <div class="service-icon p-4">
                                        <i class="fa fa-book fa-4x text-primary"></i>
                                    </div>
                                    <div style="margin-top: -35px;">
                                    <hr class="separator-line">
                            <h5 class="mb-0">145</h5>
                            <p class="mb-0">Enseignants</p>
                            <p class="text-center mb-5">L'année universitaire 2023/2024
                            </p>
                        </div>
                       
                        
                        
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        
                    <div class="service-icon p-4">
                                        <i class="fa fa-graduation-cap fa-4x text-primary"></i>
                                    </div>
                                    
                        <div style="margin-top: -35px;">
                        <hr class="separator-line">
                            <h5 class="mb-0">1045</h5>
                            <p class="mb-0">Etudiants</p>
                            <p class="text-center mb-5">L'année universitaire 2023/2024
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                    <div class="service-icon p-4">
                                        <i class="fa fa-flask fa-4x text-primary"></i>
                                    </div>
                                    <div style="margin-top: -35px;">
                                    <hr class="separator-line">
                            <h5 class="mb-0">0</h5>
                            <p class="mb-0">Structures de recherche</p>
                            
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        
                        <div class="service-icon p-4">
                                        <i class="fa fa-handshake fa-4x text-primary"></i>
                                    </div>
                                    <div style="margin-top: -35px;">
                                    <hr class="separator-line">
                            <h5 class="mb-0">0</h5>
                            <p class="mb-0">Partenaires</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- statistics End -->

         <!-- maps Start -->
        <div class="col-12">
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.535931854149!2d10.102706875308566!3d33.850076573233686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12556e4037f61087%3A0xf1f62cd467db84da!2sInstitut%20Pr%C3%A9paratoire%20aux%20Etudes%20d&#39;Ing%C3%A9nieurs%20de%20Gab%C3%A9s!5e0!3m2!1sfr!2stn!4v1721938862119!5m2!1sfr!2stn" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- maps End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                        <img src="{{asset('assets/img/logo rogne.png')}}" alt="Institut préparatoire aux études d'ingénieur de Gabès">
                            <a href=""><i class="fas fa-home me-2"></i> Av. Omar Ibn El Khattab, Zrig  - 6072 Gabès  - 6072 Tunisie</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i>  75 399 939</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> 75 399 925</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Institut</h4>
                            <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> Présentation</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Organigramme</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i>En Chiffres</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Conseil scientifique</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Enseignants</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Galerie de photose</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Formation</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Conditions d’admission</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Régime des études</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Condition de passage</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Réglementation interne</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Réglementation des examens</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Programmes</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Lauréats</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Etudiant</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Clubs</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Fiches de candidature</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Manifestations</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Activités Sportives</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Activités culturelles</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Concours Nationaux</a>
                            
                        </div>
                    </div>
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">IPEIGB</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/libs/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/libs/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/libs/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/libs/lightbox/js/lightbox.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>

</html>