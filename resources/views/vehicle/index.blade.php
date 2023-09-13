@extends('layouts.master')

@section('isi_kandungan')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="truck"></i></div>
                            Vehicles List
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('vehicle.create') }}" >
                            <i class="me-1" data-feather="plus"></i>
                            Create vehicle
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="card">
            <div class="card-body">
                @if(Session::get('success', false))
                    <div class="alert alert-success alert-notification">
                        <i class="fa fa-check"></i>
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Year</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Year</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($vehicles as $row)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $row->brand }}</td>
                            <td>{{ $row->model }}</td>
                            <td>{{ $row->type }}</td>
                            <td>{{ $row->year }}</td>
                            <td><span class="@if($row->status == 1) badge bg-green-soft text-green @else badge bg-red-soft text-red @endif">@if($row->status == 1) Active @else Not Active @endif</span></td>
                            <td>
                                @if($row->status == 0)
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" disabled><i data-feather="edit"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark" disabled><i data-feather="trash-2"></i></button>
                                @else
                                    <a href="{{ route('vehicle.edit', Crypt::encrypt($row->id)) }}" class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i data-feather="edit"></i></a>
                                    <a href="{{ route('vehicle.delete', Crypt::encrypt($row->id)) }}" class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></a>
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

@push('namaPage')
Vehicles List
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js') }}/datatables/datatables-simple-demo.js"></script>
@endpush

