@extends('admin.theme')
@section('contenu')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">AJOUTER UN NOUVEAU CONTACT</h4>
                </div>
            </div>
        </div>
   
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Créer un nouveau contact</h4>
                        <form id="formDropzone" method="POST" action="{{route ('contact.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row mb-4">
                                <label for="nom" class="col-form-label col-lg-2">Nom</label>
                                <div class="col-lg-10">
                                    <input id="nom" name="nom" type="text" class="form-control" placeholder="Entrez le nom...">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="sujet" class="col-form-label col-lg-2">Sujet</label>
                                <div class="col-lg-10">
                                    <input id="sujet" name="sujet" type="text" class="form-control" placeholder="Entrez le sujet...">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="message" class="col-form-label col-lg-2">Message</label>
                                <div class="col-lg-10">
                                    <input id="message" name="message" type="text" class="form-control" placeholder="Entrez le message ...">
                                </div>
                            </div>
                            
                            <button class="btn btn-primary fw-medium py-3 px-4 mt-3" id="formSubmit" type="submit" style="width:100%">
                        <span class="spinner-border spinner-border-sm d-none me-2" aria-hidden="true"></span>
                        Créer un contact
                    </button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
