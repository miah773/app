@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UN NOUVEAU ETUDIANT</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer un nouveau étudiant</h4>
                        <form id="formDropzone" method="POST" action="{{route ('etudiant.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-4">
                                <label for="Num_inscription	" class="col-form-label col-lg-2">Numéro d'inscription</label>
                                <div class="col-lg-10">
                                    <input id="Num_inscription	" name="Num_inscription	" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="Nom_etud" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="Nom_etud	" name="Nom_etud	" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="Prenom_etud" class="col-form-label col-lg-2">Prénom </label>
                                <div class="col-lg-10">
                                    <input id="Prenom_etud	" name="Prenom_etud	" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="Age_etud" class="col-form-label col-lg-2">Age </label>
                                <div class="col-lg-10">
                                    <input id="Age_etud	" name="Age_etud	" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="Email" class="col-form-label col-lg-2">Email </label>
                                <div class="col-lg-10">
                                    <input id="Email	" name="Email	" type="text" class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="Num_tel	" class="col-form-label col-lg-2">Numéro de téléphone </label>
                                <div class="col-lg-10">
                                    <input id="Num_tel		" name="Num_tel		" type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="id_classe" class="col-form-label col-lg-2">Choisir la classe</label>
                                <div class="col-lg-10">
                                    <select id="id_classe" name="id_classe" class="form-control">
                                        <option value="0">Sélectionnez une classe</option>
                                        @foreach($data as $classe)
                                            <option value="{{ $classe->id }}">{{$classe->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                  <div class="row mb-4">
    <label for="redoublant" class="col-form-label col-lg-2">Redoublant ou non</label>
    <div class="col-lg-10">
        <select id="redoublant" name="redoublant" class="form-control">
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select>
    </div>
</div>


                  
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer un étudiant
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
