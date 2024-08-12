@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UNe NOUVEllE DEPARTEMENT</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer une nouvelle département</h4>
                        <form id="formDropzone" method="POST" action="{{route ('departement.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-4">
                                <label for="nom_dep" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="nom_dep" name="nom_dep" type="text" class="form-control" placeholder="Entrez le nom...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="acronyme" class="col-form-label col-lg-2">acronyme</label>
                                <div class="col-lg-10">
                                    <input id="acronyme" name="acronyme" type="text" class="form-control" placeholder="Entrez l'acronyme...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-form-label col-lg-2">description</label>
                                <div class="col-lg-10">
                                    <input id="description" name="description" type="text" class="form-control" placeholder="Entrez la description">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="chef_dep" class="col-form-label col-lg-2">chef_departement</label>
                                <div class="col-lg-10">
                                    <input id="chef_dep" name="chef_dep" type="text" class="form-control" placeholder="Entrez le nom du chef_departement">
                                </div>

                            </div>
                            <div class="row mb-4">
                                <label for="code_tel" class="col-form-label col-lg-2">code_tel</label>
                                <div class="col-lg-10">
                                    <input id="code_tel" name="code_tel" type="text" class="form-control" placeholder="Entrez le code tel ">
                                </div>
                            </div>

                            

                           


                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer un département 
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
