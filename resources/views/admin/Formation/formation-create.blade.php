@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UN NOUVElle FORMATION</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer une nouvelle formation</h4>
                        <form id="formDropzone" method="POST" action="{{route ('formation.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-4">
                                <label for="nom" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="nom" name="nom" type="text" class="form-control" placeholder="Entrez le nom...">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="acronyme" class="col-form-label col-lg-2">acronyme</label>
                                <div class="col-lg-10">
                                    <input id="acronyme" name="acronyme" type="text" class="form-control" placeholder="Entrez l'acronyme'...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="description" class="col-form-label col-lg-2">description</label>
                                <div class="col-lg-10">
                                    <input id="description" name="description" type="text" class="form-control" placeholder="Entrez la description...">
                                </div>
                            </div>


                           
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer une formation
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
