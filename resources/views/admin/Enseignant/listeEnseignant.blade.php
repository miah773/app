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
                                    <h4 class="mb-sm-0 font-size-18">Liste des Enseignants</h4>

                                 
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les Enseignant</h4>
                                       <br />
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>prenom</th>
                                                <th>email</th>
                                                <th>poste</th>
                                                <th>specilite</th>
                                                <th>tel</th>
                                                <th>CIN</th>
                                                <th>date_rec</th>
                                                <th>Action</th>

                   
                                            </tr>
                                            </thead>
        
                                          
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_nom}}</td>

                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_prenom}}</td>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_email}}</td>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_poste}}</td>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->specalite_nom}}</td>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_tel}}</td>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_CIN}}</td>
                                                <td style="vertical-align: middle; width:10%; ">{{$item->enseignant_date_rec}}</td>
                                                
                                                <td style="vertical-align: middle; width:20%; ">
                                                <button class="btn btn-warning btn-sm" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editModal" 
                                                        data-id="{{ $item->id }}">
                                                    Modifier
                                                </button>


                                                <form action="{{ route('Enseignant.destroy', ['id' => $item->id]) }}" method="POST" style="display:inline;">
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
                <h5 class="modal-title" id="editModalLabel">Modifier l'Enseignant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="editForm" method="POST" action="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         

                    <div class="d-flex align-items-center mb-3">
                    <label for="editNom" class="form-label" style="width: 10%;">Nom</label>
                        <input type="text" class="form-control" id="editNom" name="nom" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="prenom" class="form-label" style="width: 10%;">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="email" class="form-label" style="width: 20%;">email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="poste" class="form-label" style="width: 10%;">poste</label>
                        <input type="text" class="form-control" id="poste" name="poste" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="tel" class="form-label" style="width: 10%;">tel</label>
                        <input type="text" class="form-control" id="tel" name="tel" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="CIN" class="form-label" style="width: 20%;">CIN</label>
                        <input type="text" class="form-control" id="CIN" name="CIN" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="date_rec" class="form-label" style="width: 10%;">Date_rec</label>
                        <input type="date" class="form-control" id="date_rec" name="date_rec" required>
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
        form.setAttribute('action', '/enseignant/' + clientId);

        fetch('/enseignant/' + clientId)
            .then(response => response.json())
            .then(data => {
                var sp = data.enseignant;
                       

                document.getElementById('editNom').value = sp.nom;
             
            })
            .catch(error => {
                console.error('Erreur lors du chargement des détails à modifier.', error);
            });
    });
});


</script>

                @endsection
                           