@extends('admin.layouts.template')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Ajout actualité</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="add-professor.html">Actualité</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajout actualité</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajout actualité  </h4>
                            <a href="{{ route('actualites.index') }}" class="btn btn-primary">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                Liste Actualités</a>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success">
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('actualites.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="titre">Titre de l'actualité <span class="text-danger fw-bold">*</span> </label>
                                            <input type="text" class="form-control" name="titre" id="titre" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="date_debut">Date de début <span class="text-danger fw-bold">*</span> </label>
                                            <input type="date" class="form-control" name="date_debut" id="date_debut" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-16 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="date_fin">Date de fin <span class="text-danger fw-bold">*</span> </label>
                                            <input type="date" class="form-control" name="date_fin" id="date_fin" required>
                                        </div>
                                    </div>




                                    <div class="col-lg-16 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label" for="photo">Charger une photo illustrative <span class="text-danger fw-bold">*</span> </label>
                                            <input type="file" class="form-control" accept="png, jpeg, jpg" name="photo" id="photo" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-sm-12 mx-2">
                                        <div class="form-group">
                                            <label class="form-label" for="zone_intervention">Zone d'intervention <span class="text-danger fw-bold">*</span> </label>
                                            <input type="text" class="form-control" name="zone_intervention" id="zone_intervention" required>
                                        </div>
                                    </div>

                                    <div class="col col-lg-12">
                                        <div class="form-group" >
                                            <label for="editor" class="form-label" >Description <span class="text-danger fw-bold">*</span></label>
                                            <textarea class="form-control" cols="30" rows="20"  id="editor" name="description" required> </textarea>
                                        </div>
                                        <p><span class="text-danger fw-bold">* </span>Champ obligatoire</p>
                                    </div>



                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Envoyer</button> &nbsp;
                                        <button type="reset" class="btn btn-light">Annuler</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('document').ready(function() {

            ClassicEditor
                .create(document.querySelector('#editor'))

                .catch(error => {
                    console.error(error);
                });
        })
    </script>
@endsection
