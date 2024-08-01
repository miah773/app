@extends('admin.theme')

@section('contenu')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Liste des départements</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les départements</h4>
                        <br />
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Acronyme</th>
                                    <th>Description</th>
                                    <th>Chef de département</th>
                                    <th>Code Téléphone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->nom}}</td>
                                    <td>{{$item->acronyme}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->chef_departement}}</td>
                                    <td>{{$item->code_tel}}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editModal" 
                                                data-id="{{ $item->id }}">
                                            Modifier
                                        </button>

                                        <form action="{{ route('departement.destroy', ['id' => $item->id]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->

    <!-- Modal Modification -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modifier le département</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="d-flex align-items-center mb-3">
                            <label for="editNom" class="form-label" style="width: 30%;">Nom</label>
                            <input type="text" class="form-control" id="editNom" name="nom" required>
                        </div>
                        <div class="row mb-4">
                            <label for="acronyme" class="col-form-label col-lg-2">Acronyme</label>
                            <div class="col-lg-10">
                                <input id="acronyme" name="acronyme" type="text" class="form-control" placeholder="Entrez l'acronyme..." required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Description</label>
                            <div class="col-lg-10">
                                <input id="description" name="description" type="text" class="form-control" placeholder="Entrez la description">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="chef_departement" class="col-form-label col-lg-2">Chef de département</label>
                            <div class="col-lg-10">
                                <input id="chef_departement" name="chef_departement" type="text" class="form-control" placeholder="Entrez le nom du chef de département">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="code_tel" class="col-form-label col-lg-2">Code Téléphone</label>
                            <div class="col-lg-10">
                                <input id="code_tel" name="code_tel" type="text" class="form-control" placeholder="Entrez le code téléphone">
                            </div>
                        </div>

                        <!-- Ajoutez les autres champs ici -->
                        <button type="submit" class="btn btn-primary" style="width:100%;">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End Page-content -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var depId = button.getAttribute('data-id');
            var form = document.getElementById('editForm');
            form.setAttribute('action', '/departement/' + depId);

            fetch('/departement/' + depId)
                .then(response => response.json())
                .then(data => {
                    var sp = data.departement;
                    document.getElementById('editNom').value = sp.nom;
                    document.getElementById('acronyme').value = sp.acronyme;
                    document.getElementById('description').value = sp.description;
                    document.getElementById('chef_departement').value = sp.chef_departement;
                    document.getElementById('code_tel').value = sp.code_tel;
                })
                .catch(error => {
                    console.error('Erreur lors du chargement des détails à modifier.', error);
                });
        });
    });
</script>

@endsection
