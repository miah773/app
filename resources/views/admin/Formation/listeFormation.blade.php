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
                                    <h4 class="mb-sm-0 font-size-18">Liste des Formations</h4>

                                 
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les Formation</h4>
                                       <br />
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>acronyme</th>
                                                <th>description</th>
                                                <th>action</th>
                   
                                            </tr>
                                            </thead>
        
                                          
                                            <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td style="vertical-align: middle; width:20%; ">{{$item->nom}}</td>
                                                <td style="vertical-align: middle; width:20%; ">{{$item->acronyme}}</td>
                                                <td style="vertical-align: middle; width:20%; ">{{$item->description}}</td>
                                                
                                                
                                                <td style="vertical-align: middle; width:20%; ">
                                                <button class="btn btn-warning btn-sm" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editModal" 
                                                        data-id="{{ $item->id }}">
                                                    Modifier
                                                </button>


                                                <form action="{{ route('formation.destroy', ['id' => $item->id]) }}" method="POST" style="display:inline;">
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
                <h5 class="modal-title" id="editModalLabel">Modifier la formation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="editForm" method="POST" action="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         

                    <div class="d-flex align-items-center mb-3">
                    <label for="editNom" class="form-label" style="width:   30%;">Nom</label>
                        <input type="text" class="form-control" id="editNom" name="nom" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="acronyme" class="form-label" style="width: 30%;">acronyme</label>
                        <input type="text" class="form-control" id="acronyme" name="acronyme" required>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                    <label for="description" class="form-label" style="width: 40%;">description</label>
                        <input type="text" class="form-control" id="description" name="description" required>
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
        form.setAttribute('action', '/formation/' + clientId);

        fetch('/formation/' + clientId)
            .then(response => response.json())
            .then(data => {
                var sp = data.formation;
                       

                document.getElementById('editNom').value = sp.nom;
                document.getElementById('acronyme').value = sp.acronyme;
                document.getElementById('description').value = sp.description;


             
            })
            .catch(error => {
                console.error('Erreur lors du chargement des détails à modifier.', error);
            });
    });
});


</script>

                @endsection
                           