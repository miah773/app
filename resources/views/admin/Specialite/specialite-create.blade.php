@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UN NOUVEAU SPECIALITE</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer une nouvelle spécialité</h4>
                        <form id="formDropzone" method="POST" action="{{route ('specialite.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-4">
                                <label for="nom" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="nom" name="nom" type="text" class="form-control" placeholder="Entrez le nom...">
                                </div>
                            </div>
                            
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer une spécialité
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
