<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>Contactez_nous</title>
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
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
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
                            <a href="{{ route('about') }}" class="dropdown-item ">Présentation de l'institut</a>
                                <a href="{{ route('motdedirecteur') }}" class="dropdown-item ">Mot de directeur</a>
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
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item "><a href="{{ route('index2') }}">Retour à l'acceuil</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Contact </h5>
                    
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address>Adresse</Address></h4>
                                <p class="mb-0"> Av. Omar Ibn El Khattab,  <br> Zrig - 6072 Gabès  - 6072 Tunisie</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Téléphone/Fix</h4>
                                <p class="mb-0"> 75 399 939</p>
                                <p class="mb-0">75 399 925</p>
                            </div>
                           
                            <div class="text-center">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Email</h4>
                                <p class="mb-0">info@example.com</p>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-2">Envoyez un message</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                        <label for="name">Nom & Prénom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Ville</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Pays</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Téléphone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Contact End -->

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