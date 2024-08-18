@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UNe NOUVEllE NOUVEAUTE</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer une nouvelle nouveauté</h4>
                        <form id="formDropzone" method="POST" action="{{route ('nouveautes.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-4">
                                <label for="titre" class="col-form-label col-lg-2">Titre</label>
                                <div class="col-lg-10">
                                    <input id="titre" name="titre" type="text" class="form-control" placeholder="Entrez le titre...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-form-label col-lg-2">description</label>
                                <div class="col-lg-10">
                                    <input id="description" name="description" type="text" class="form-control" placeholder="Entrez la description...">
                                </div>
                            </div>
                            <div class="row mb-4">
    <label for="dateheure" class="col-form-label col-lg-2">Date & Heure</label>
    <div class="col-lg-10">
        <input id="dateheure" name="dateheure" type="text" class="form-control" placeholder="La date et l'heure actuelles seront enregistrées automatiquement" readonly>
    </div>
</div>

                            <div class="row mb-4">
                                <label for="image_url" class="col-form-label col-lg-2">Lien de l'image à ajouter</label>
                                <div class="col-lg-10">
                                    <input id="image_url" name="image_url" type="text" class="form-control" placeholder="Entrez le Lien de l'image">
                                </div>

                            </div>
                           
                            

                           


                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer une nouveauté
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
