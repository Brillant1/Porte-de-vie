@extends('admin.layouts.template')
@section('content')

<div class="content-body">

    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Liste des messages</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Messages</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste des messages</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        @include('admin.alertMessage')
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Nom </th>
                                                <th>Message</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (sizeof($messages)>0)
                                                @foreach ($messages as $message)
                                                    <tr>
                                                        <td>{{ $message->created_at }}</td>
                                                        <td>{{ $message->nom.' '.$message->prenom }}</td>
                                                        <td class="text-justify">{!! $message->message !!}</td>
                                                        <th>{{ $message->telephone }}</th>
                                                        <th>{{ $message->email }}</th>
                                                        <td class="d-flex align-items-center justify-content-center">









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
                                            {{-- end show resultat confirm modal --}}

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
    </div>
</div>
@endsection
