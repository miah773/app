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
                                    <h4 class="mb-sm-0 font-size-18">Liste des étudiants</h4>

                                 
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les étudiants</h4>
                                       <br />
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Numéro d'inscription</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Age</th>
<<<<<<< HEAD
                                                <th>Classe</th>
                                                <th>Email</th>
                                                <th>Numéro de téléphone</th>
                                                
=======
                                                <th>Email</th>
                                                <th>Numéro de téléphone</th>
                                                <th>Classe</th>
>>>>>>> main/main
                                                <th>Redoublant</th>

                                                <th>Action</th>



                   
                                            </tr>
                                            </thead>
        
                                          
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td style="vertical-align: middle; width:40%; ">{{$item->num_inscrip	}}</td>
                                                <td style="vertical-align: middle; width:40%; ">{{$item->etudiant_nom}}</td>
                                                <td style="vertical-align: middle; width:40%; ">{{$item->etudiant_prenom}}</td>
                                                <td style="vertical-align: middle; width:40%; ">{{$item->etudiant_age}}</td>
<<<<<<< HEAD
                                                <td style="vertical-align: middle; width:40%; ">{{$item->classe_nom}}</td>
                                                
=======
>>>>>>> main/main
                                                <td style="vertical-align: middle; width:40%; ">{{$item->Redoublant}}</td>
                                                <td style="vertical-align: middle; width:40%; ">{{$item->Email}}</td>
                                                <td style="vertical-align: middle; width:40%; ">{{$item->Num_tel}}</td>

<<<<<<< HEAD
=======

                                              

                                                <td style="vertical-align: middle; width:40%; ">{{$item->classe_nom}}</td>
>>>>>>> main/main
                                                <td style="vertical-align: middle; width:20%; ">
                                                <button class="btn btn-warning btn-sm" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editModal" 
                                                        data-id="{{ $item->id }}">
                                                    Modifier
                                                </button>
<<<<<<< HEAD
                                              

                                                
=======
>>>>>>> main/main


                                                <form action="{{ route('etudiant.destroy', ['id' => $item->id]) }}" method="POST" style="display:inline;">
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
                <h5 class="modal-title" id="editModalLabel">Modifier l'étudiant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="editForm" method="POST" action="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         
            <div class="d-flex align-items-center mb-3">
                    <label for="editNum" class="form-label" style="width: 30%;">Numéro d'inscription</label>
                        <input type="text" class="form-control" id="editNum" name="num" required>
                    </div>
            
                    <div class="d-flex align-items-center mb-3">
                    <label for="editNom" class="form-label" style="width: 30%;">Nom</label>
                        <input type="text" class="form-control" id="editNom" name="nom" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="editPrenom" class="form-label" style="width: 30%;">Prénom</label>
                        <input type="text" class="form-control" id="editPrenom" name="Prenom" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="editAge" class="form-label" style="width: 30%;">Age</label>
                        <input type="text" class="form-control" id="editAge" name="Age" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="editEmail" class="form-label" style="width: 30%;">Email</label>
                        <input type="text" class="form-control" id="editEmail" name="Email" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="editNumtel" class="form-label" style="width: 30%;">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="editNumtel" name="Numtel" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="editClasse" class="form-label" style="width: 30%;">Classe</label>
                    <select id="editClasse" name="id_classe" class="form-control" required>
                                        <option value="0">Sélectionnez une classe</option>
                                        @foreach($data as $classe)
                                            <option value="{{ $classe->id }}">{{$classe->nom }}</option>
                                        @endforeach
                                    </select>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="editRe" class="form-label" style="width: 30%;">Redoublant</label>
                    <select id="editRe" name="redoublant" class="form-control" required>
            <option value="oui">Oui</option>
            <option value="non">Non</option>
        </select> 
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
        form.setAttribute('action', '/etudiant/' + clientId);

        fetch('/etudiant/' + clientId)
            .then(response => response.json())
            .then(data => {
                var sp = data.etudiant;
                       

                document.getElementById('editNum').value = sp.Num_inscription;             
                 document.getElementById('editNom').value = sp.Nom_etud;
                document.getElementById('editPrenom').value = sp.Prenom_etud;
                document.getElementById('editAge').value = sp.Age_etud;

                document.getElementById('editEmail').value = sp.Email;
                document.getElementById('editNumtel').value = sp.Num_tel;
                document.getElementById('editClasse').value = sp.id_classe;
                document.getElementById('editRe').value = sp.redoublant;             

             
            })
            .catch(error => {
                console.error('Erreur lors du chargement des détails à modifier.', error);
            });
    });
});


</script>

                @endsection
                           