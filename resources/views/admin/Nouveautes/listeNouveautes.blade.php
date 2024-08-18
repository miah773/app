@extends('admin.theme')

@section('contenu')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Liste des nouveautés</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les nouveautés</h4>
                        <br />
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Lien de l'image</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->titre}}</td>
                                    
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->image_url}}</td>
                                    
                                    <td>
                                        <button class="btn btn-warning btn-sm" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editModal" 
                                                data-id="{{ $item->id }}">
                                            Modifier
                                        </button>

                                        <form action="{{ route('nouveautes.destroy', ['id' => $item->id]) }}" method="POST" style="display:inline;">
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
                    <h5 class="modal-title" id="editModalLabel">Modifier la nouveauté</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="d-flex align-items-center mb-3">
                            <label for="titre" class="form-label" style="width: 30%;">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                        </div>
                        
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Description</label>
                            <div class="col-lg-10">
                                <input id="description" name="description" type="text" class="form-control" placeholder="Entrez la description">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image_url" class="col-form-label col-lg-2">Lien de l'image à ajouter</label>
                            <div class="col-lg-10">
                                <input id="image_url" name="image_url" type="text" class="form-control" placeholder="Entrez le Lien de l'image">
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
            var NouId = button.getAttribute('data-id');
            var form = document.getElementById('editForm');
            form.setAttribute('action', '/nouveautes/' + NouId);

            fetch('/nouveautes/' + NouId)
                .then(response => response.json())
                .then(data => {
                    var sp = data.nouveautes;
                    document.getElementById('titre').value = sp.titre;
                    document.getElementById('description').value = sp.description;
                    document.getElementById('image_url').value = sp.image_url;
                  
                })
                .catch(error => {
                    console.error('Erreur lors du chargement des détails à modifier.', error);
                });
        });
    });
</script>

@endsection
