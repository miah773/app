@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UN NOUVEAU ENSEIGNANT</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer un nouveau enseignant</h4>
                        <form id="formDropzone" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                            <div class="row mb-4">
                                <label for="nom" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="nom" name="nom" type="text" class="form-control" placeholder="Entrez le nom...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="prenom" class="col-form-label col-lg-2">Prénom</label>
                                <div class="col-lg-10">
                                    <input id="prenom" name="prenom" type="text" class="form-control" placeholder="Entrez le prénom...">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="poste" class="col-form-label col-lg-2">Poste</label>
                                <div class="col-lg-10">
                                    <input id="poste" name="poste" type="text" class="form-control" placeholder="Entrez le poste...">
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="adresse" class="col-form-label col-lg-2">Adresse</label>
                                <div class="col-lg-10">
                                    <input id="adresse" name="adresse" type="text" class="form-control" placeholder="Entrez l'adresse...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="tel" class="col-form-label col-lg-2">Téléphone</label>
                                <div class="col-lg-10">
                                    <input id="tel" name="tel" type="text" class="form-control" placeholder="Entrez le numéro de téléphone...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-form-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Entrez l'email...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="facebook" class="col-form-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input id="facebook" name="facebook" type="text" class="form-control" placeholder="Entrez le profil Facebook...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="instagram" class="col-form-label col-lg-2">Instagram</label>
                                <div class="col-lg-10">
                                    <input id="instagram" name="instagram" type="text" class="form-control" placeholder="Entrez le profil Instagram...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="linkedin" class="col-form-label col-lg-2">LinkedIn</label>
                                <div class="col-lg-10">
                                    <input id="linkedin" name="linkedin" type="text" class="form-control" placeholder="Entrez le profil LinkedIn...">
                                </div>
                            </div>
                           
                           
                          
                            <div class="row mb-4">
                                <label class="col-form-label col-lg-2" for="formImage" style="width:17.5%">Photo</label>
                                <div class="dropzone-drag-area form-control" id="previews">
                                    <div class="dz-message text-muted opacity-50" data-dz-message>
                                        <span>Glissez le fichier ici pour le télécharger</span>
                                    </div>    
                                    <div class="d-none" id="dzPreviewContainer">
                                        <div class="dz-preview dz-file-preview">
                                            <div class="dz-photo">
                                                <img class="dz-thumbnail" data-dz-thumbnail>
                                            </div>
                                            <button class="dz-delete border-0 p-0" type="button" data-dz-remove>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="times"><path fill="#FFFFFF" d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
                                            </button>
                                            <input type="hidden" name="photoField" id="photoField">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer un client
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
