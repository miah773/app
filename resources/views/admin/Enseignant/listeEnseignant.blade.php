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

                        <h4 class="card-title">Vous pouvez supprimer ou modifier des informations concernant les Enseignants</h4>
                        <br />
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Poste</th>
                                    <th>Spécialité</th>
                                    <th>Téléphone</th>
                                    <th>CIN</th>
                                    <th>Date de recrutement</th>
                                    <th>Département</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td style="vertical-align: middle;">{{ $item->enseignant_nom }}</td>
                                    <td style="vertical-align: middle;">{{ $item->enseignant_prenom }}</td>
                                    <td style="vertical-align: middle;">{{ $item->enseignant_email }}</td>
                                    <td style="vertical-align: middle;">{{ $item->enseignant_poste }}</td>
                                    <td style="vertical-align: middle;">{{ $item->specialite_nom }}</td> <!-- Utilisation de specialite_nom pour accéder à la spécialité -->
                                    <td style="vertical-align: middle;">{{ $item->enseignant_tel }}</td>
                                    <td style="vertical-align: middle;">{{ $item->enseignant_CIN }}</td>
                                    <td style="vertical-align: middle;">{{ $item->enseignant_date_rec }}</td>
<<<<<<< HEAD
                                    <td style="vertical-align: middle;">{{ $item->departement_nom }}</td>

                                    <td>
    <div class="d-flex justify-content-start align-items-center">
        <button class="btn btn-warning btn-sm me-2" 
                data-bs-toggle="modal" 
                data-bs-target="#editModal" 
                data-id="{{ $item->id }}">
            Modifier
        </button>

        <form action="{{ route('Enseignant.destroy', ['id' => $item->id]) }}" method="POST" style="margin: 0;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Supprimer
            </button>
        </form>
    </div>
</td>
=======
                                    <td style="vertical-align: middle;">{{ $item->departement_nom }}</td> <!-- Utilisation de departement_nom pour accéder au département -->
                                    
                                    <td style="vertical-align: middle;">
                                        <button class="btn btn-warning btn-sm" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editModal" 
                                                data-id="{{ $item->id }}">
                                            Modifier
                                        </button>
>>>>>>> main/main

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

                        <div class="mb-3">
                            <label for="editNom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="editNom" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="poste" class="form-label">Poste</label>
                            <input type="text" class="form-control" id="poste" name="poste" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_specialite" class="form-label">Spécialité</label>
                            <select id="id_specialite" name="id_specialite" class="form-control" required>
                                        <option value="">Sélectionnez une spécialité</option>
                                        @foreach($specialites as $specialite)
                                    <option value="{{ $specialite->id }}">{{ $specialite->nom }}</option>
                                @endforeach
                                    </select>
                        </div>

                        <div class="mb-3">
                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="text" class="form-control" id="tel" name="tel" required>
                        </div>
                        <div class="mb-3">
                            <label for="CIN" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="CIN" name="CIN" required>
                        </div>
                        <div class="mb-3">
                            <label for="date_rec" class="form-label">Date de recrutement</label>
                            <input type="date" class="form-control" id="date_rec" name="date_rec" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_departement" class="form-label">Département</label>
                            <select id="id_departement" name="id_departement" class="form-control" required>
                                        <option value="">Sélectionnez un département</option>
                                        @foreach($departements as $departement)
                                    <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                                @endforeach
                                    </select>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width:100%;">Enregistrer les modifications</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var enseignantId = button.getAttribute('data-id');
        var form = document.getElementById('editForm');
        form.setAttribute('action', '/enseignant/' + enseignantId); // Assurez-vous que l'URL correspond à votre route Laravel

        fetch('/enseignant/' + enseignantId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('editNom').value = data.enseignant_nom;
                document.getElementById('prenom').value = data.enseignant_prenom;
                document.getElementById('email').value = data.enseignant_email;
                document.getElementById('poste').value = data.enseignant_poste;

                // Sélection de la spécialité
                var specialites = document.getElementById('id_specialite');
                for (var i = 0; i < specialites.options.length; i++) {
                    var option = specialites.options[i];
                    if (option.value == data.id_specialite) {
                        option.selected = true;
                        break;
                    }
                }
                document.getElementById('tel').value = data.enseignant_tel;
                document.getElementById('CIN').value = data.enseignant_CIN;
                document.getElementById('date_rec').value = data.enseignant_date_rec;

                

                // Sélection du département
                var departements = document.getElementById('id_departement');
                for (var i = 0; i < departements.options.length; i++) {
                    var option = departements.options[i];
                    if (option.value == data.id_departement) {
                        option.selected = true;
                        break;
                    }
                }


            })
            .catch(error => {
                console.error('Erreur lors du chargement des détails à modifier.', error);
            });
    });
});
</script>

@endsection
