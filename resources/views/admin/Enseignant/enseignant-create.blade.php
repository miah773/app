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
                        <form id="formDropzone" method="POST" action="{{route('enseignant.store')}}" enctype="multipart/form-data" >
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
                                <label for="email" class="col-form-label col-lg-2">email</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Entrez un email...">
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="poste" class="col-form-label col-lg-2">Poste</label>
                                <div class="col-lg-10">
                                    <input id="poste" name="poste" type="text" class="form-control" placeholder="Entrez le poste...">
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="id_specialite" class="col-form-label col-lg-2">spécialité</label>
                                <div class="col-lg-10">
                                    <select id="id_specialite" name="id_specialite" class="form-control">
                                        <option value="0">Sélectionnez une spécialité</option>
                                        @foreach($data as $specialite)
                                            <option value="{{ $specialite->id }}">{{$specialite->nom }}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="tel" class="col-form-label col-lg-2">Téléphone</label>
                                <div class="col-lg-10">
                                    <input id="tel" name="tel" type="text" class="form-control" placeholder="Entrez le numéro de téléphone...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="CIN" class="col-form-label col-lg-2">CIN</label>
                                <div class="col-lg-10">
                                    <input id="CIN" name="CIN" type="text" class="form-control" placeholder="Entrez le numero de cin ...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="date_rec" class="col-form-label col-lg-2">date_rec</label>
                                <div class="col-lg-10">
                                    <input id="date_rec" name="date_rec" type="date" class="form-control" placeholder="Entrez le date d recrutement ...">
                                </div>
                            </div>
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer un enseignant
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
