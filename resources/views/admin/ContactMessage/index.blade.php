
@extends('admin.layouts.template')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Tous les messages</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Messages</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les messages</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4 class="card-title">Liste des messages</h4>
                        <a href="add-departments.html" class="btn btn-primary"> </a>
                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>

                                        <th>Noms</th>
                                        <th>Message</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!is_null($messages))
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $message->nom.''.$message->prenom }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>{{ $message->telephone }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>

                                                <a href="" title="Supprimer le message"
                                                            class="btn btn-sm text-danger"
                                                            data-toggle="modal"
                                                            data-target="{{ '#deleteModalmessage' . $message->id }}">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-x" viewBox="0 0 16 16">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </a>


                                                             <!-- Modal Confirm suppresion -->
                                                        <div class="modal fade" id="{{ 'deleteModalmessage' . $message->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title fw-bold">Confirmer la suppresion</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Voulez-vous supprimer le message de :
                                                                        <span class="text-danger"> {{ $message->nom. ''.$message->prenom }}

                                                                            ?</span>
                                                                    </div>

                                                                    <div class="modal-footer text-center">
                                                                        <form method="POST"
                                                                            action="{{ route('messages.destroy', ['message' => $message->id]) }}" class=" float-left">
                                                                            <input type="hidden" name="_method" value="DELETE">
                                                                            <input type="hidden" name="_token"
                                                                                value="{{ csrf_token() }}">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Annuler</button>
                                                                            <input type="submit" class="btn btn-danger"
                                                                                value="Confirmer">
                                                                        </form>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
