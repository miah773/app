@extends('admin.theme')
@section('contenu')
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste des département</h4>

                                 
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les départemetn</h4>
                                       <br />
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>acronym </th>
                                                <th>description</th>
                                                <th>chef_departement</th>
                                                <th>code</th>
                                                <th>tel</th>
                                                <th>Nom</th>
                                                <th>enseignants</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
                                          
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td style="vertical-align: middle; width:75%; ">{{$item->nom}}</td>
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
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                      

                    </div> <!-- container-fluid -->

                <!-- End Page-content -->


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
                                <label for="editAcronyme" class="col-form-label col-lg-2">acronyme</label>
                                <div class="col-lg-10">
                                    <input id="acronyme" name=acronyme" type="text" class="form-control" placeholder="Entrez le prénom...">
                                </div>
                     </div>
                            <div class="row mb-4">
                                <label for="editDescription" class="col-form-label col-lg-2">description</label>
                                <div class="col-lg-10">
                                    <input id="description" name="description" type="text" class="form-control" placeholder="Entrez la description">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="editchef_departement" class="col-form-label col-lg-2">chef_departement</label>
                                <div class="col-lg-10">
                                    <input id="chef_departement" name="chef_departement" type="text" class="form-control" placeholder="Entrez le nom du chef_departement">
                                </div>

                            </div>
                            <div class="row mb-4">
                                <label for="editcode" class="col-form-label col-lg-2">code</label>
                                <div class="col-lg-10">
                                    <input id="code" name="code" type="text" class="form-control" placeholder="Entrez le code">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="editTel" class="col-form-label col-lg-2">tel</label>
                                <div class="col-lg-10">
                                    <input id="tel" name="tel" type="text" class="form-control" placeholder="Entrez le numero du telephone">
                                </div>
                            </div>

                          
                    <!-- Ajoutez les autres champs ici -->
                    <button type="submit" class="btn btn-primary" style="width:100%;">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var clientId = button.getAttribute('data-id');
        var form = document.getElementById('editForm');
        form.setAttribute('action', '/specialite/' + clientId);

        fetch('/departement/' + clientId)
            .then(response => response.json())
            .then(data => {
                var sp = data.departement;
                       

                document.getElementById('editNom').value = sp.nom;
                document.getElementById('editAcronyme').value = sp.acronyme;
                document.getElementById('editDescription').value = sp.description;
                document.getElementById('editChef_departement').value = sp.chef_departement;
                document.getElementById('editCode').value = sp.code;
                document.getElementById('editTel').value = sp.tel;
                enseignant.forEach(enseignant => { var option = document.createElement('option'); option.value = enseignant.id; option.textContent = enseignant.nom; if (enseignant.id === departement.id_enseignant); });




                
             
            })
            .catch(error => {
                console.error('Erreur lors du chargement des détails à modifier.', error);
            });
    });
});


</script>

                @endsection
                           