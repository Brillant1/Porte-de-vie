
@extends('admin.layouts.template')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Tous les rendez-vous</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Rendez-vous</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les rendez-vous</a></li>
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
                                        <th>Date & Heure</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!is_null($appointments))
                                    @foreach ($appointments as $appointment)
                                        @php
                                            $date = date('d-m-Y', strtotime($appointment->appointment_date));
                                        @endphp
                                        <tr>
                                            <td>{{ $appointment->nom.''.$appointment->prenom }}</td>
                                            <td>{{ $appointment->message }}</td>
                                            <td>{{ $appointment->telephone }}</td>
                                            <td>{{ $appointment->email }}</td>
                                            <td>{{ $date.' à '.$appointment->appointment_time}}</td>
                                            <td>{{ $appointment->code }}</td>
                                            <td>

                                                <a href="" title="Supprimer"
                                                            class="btn btn-sm text-danger"
                                                            data-toggle="modal"
                                                            data-target="{{ '#deleteModalappointment' . $appointment->id }}">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-x" viewBox="0 0 16 16">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </a>
                                                        <a href="" title="Répondre"
                                                            class="btn btn-sm text-primary"
                                                            data-toggle="modal"
                                                            data-target="{{ '#repondreModalappointment'.$appointment->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                                                                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                                                            </svg>
                                                        </a>


                                                        <!-- Modal Confirm suppresion -->
                                                        <div class="modal fade" id="{{ 'deleteModalappointment' . $appointment->id }}"
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
                                                                        Voulez-vous supprimer le rendez-vous de :
                                                                        <span class="text-danger"> {{ $appointment->nom. ''.$appointment->prenom }}

                                                                            ?</span>
                                                                    </div>

                                                                    <div class="modal-footer text-center">
                                                                        <form method="POST"
                                                                            action="{{ route('appointments.destroy', ['appointment' => $appointment->id]) }}" class=" float-left">
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
                                                        {{-- Modal to answer appointment --}}
                                                        <div class="modal fade" id="{{ 'repondreModalappointment' . $appointment->id }}"
                                                            tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title fw-bold">Répondre à <span class="text-danger">{{ $appointment->nom.''.$appointment->prenom }}</span></h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form action="#" method="post">
                                                                            <div class="row">
                                                                                <div class="col-lg-12 col-md-6 col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Réponse</label>
                                                                                        <textarea name="reponse" class="form-control" id="" cols="30" rows="5" placeholder="Tapez votre message ..."></textarea>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                    </div>

                                                                    <div class="modal-footer text-center">
                                                                            <input type="hidden" name="_method" value="DELETE">
                                                                            <input type="hidden" name="_token"
                                                                                value="{{ csrf_token() }}">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Annuler</button>
                                                                            <input type="submit" class="btn btn-danger"
                                                                            value="Enrégistrer">
                                                                    </div>
                                                                </form>
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
