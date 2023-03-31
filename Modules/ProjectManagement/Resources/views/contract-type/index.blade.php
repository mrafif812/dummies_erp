@extends('layouts.master')


@section('inner-styles')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('breadcrumbs')
    @include('includes.breadcrumbs', [
        'heading' => 'Contract Type',
        'main' => 'Contract Type',
        'child' => 'List',
    ])
@endsection

@section('content')
    <div class="row project-wrapper">
        <div class="col-xxl-8">
            <!-- end row -->
            <div class="row">
                <div class="d-flex justify-content-end pb-4">
                    <a type="button" class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"
                        data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="fa-solid fa-plus"></i>
                    </a>
                </div>
                <div class="col-xl-12">
                    <table id="fixed-header"
                        class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed"
                        style="width: 100%;" aria-describedby="fixed-header_info">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VLZ-452</td>
                                <td>Symox v1.0.0</td>
                                <td><a href="#!">Add Dynamic Contact List</a></td>
                                <td>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>VLZ-452</td>
                                <td>Symox v1.0.0</td>
                                <td><a href="#!">Add Dynamic Contact List</a></td>
                                <td>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>VLZ-452</td>
                                <td>Symox v1.0.0</td>
                                <td><a href="#!">Add Dynamic Contact List</a></td>
                                <td>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>VLZ-452</td>
                                <td>Symox v1.0.0</td>
                                <td><a href="#!">Add Dynamic Contact List</a></td>
                                <td>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" type="button"
                                        class="btn btn-sm btn-outline-success waves-effect waves-light shadow-lg"><i
                                            class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    {{-- create modal --}}
                    <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Create Contract Type</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(['method' => 'Post']) !!}
                                    <div class="row g-3">
                                        <div class="col-xxl-12">
                                            @include('projectmanagement::contract-type.includes.form')
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
@endsection


@section('inner-scripts')
    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection
