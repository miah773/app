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
                        <h4 class="card-title mb-4">Créer un nouvel enseignant</h4>
                        <form id="formEnseignant" method="POST" action="{{ route('enseignant.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="nom" class="col-lg-2 col-form-label">Nom</label>
                                <div class="col-lg-10">
                                    <input id="nom" name="nom" type="text" class="form-control" placeholder="Entrez le nom..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="prenom" class="col-lg-2 col-form-label">Prénom</label>
                                <div class="col-lg-10">
                                    <input id="prenom" name="prenom" type="text" class="form-control" placeholder="Entrez le prénom..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-lg-2 col-form-label">Email</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Entrez un email..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="poste" class="col-lg-2 col-form-label">Poste</label>
                                <div class="col-lg-10">
                                    <input id="poste" name="poste" type="text" class="form-control" placeholder="Entrez le poste..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_specialite" class="col-lg-2 col-form-label">Spécialité</label>
                                <div class="col-lg-10">
                                    <select id="id_specialite" name="id_specialite" class="form-control" required>
                                        <option value="">Sélectionnez une spécialité</option>
                                        @foreach($specialites as $specialite)
                                    <option value="{{ $specialite->id }}">{{ $specialite->nom }}</option>
                                @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tel" class="col-lg-2 col-form-label">Téléphone</label>
                                <div class="col-lg-10">
                                    <input id="tel" name="tel" type="text" class="form-control" placeholder="Entrez le numéro de téléphone..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="CIN" class="col-lg-2 col-form-label">CIN</label>
                                <div class="col-lg-10">
                                    <input id="CIN" name="CIN" type="text" class="form-control" placeholder="Entrez le numéro de CIN..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="date_rec" class="col-lg-2 col-form-label">Date de recrutement</label>
                                <div class="col-lg-10">
                                    <input id="date_rec" name="date_rec" type="date" class="form-control" placeholder="Entrez la date de recrutement..." required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="id_departement" class="col-lg-2 col-form-label">Département</label>
                                <div class="col-lg-10">
                                    <select id="id_departement" name="id_departement" class="form-control" required>
                                        <option value="">Sélectionnez un département</option>
                                        @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                @endforeach
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" type="submit" style="width:100%">
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