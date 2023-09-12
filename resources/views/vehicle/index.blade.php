@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle') }}</div>

                <div class="card-body">
                    @if(Session::get('success', false))
                        <div class="alert alert-success alert-notification">
                            <i class="fa fa-check"></i>
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered" style="border: 1px solid black; text-align: center;">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $row)
                            <tr>
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $row->brand }}</td>
                                <td>{{ $row->model }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->year }}</td>
                                <td>
                                    @if($row->status == 0)
                                        <button class="btn btn-warning" disabled>Edit</button>
                                        <button class="btn btn-danger" disabled>Delete</button>
                                    @else
                                        <a href="{{ route('vehicle.edit', Crypt::encrypt($row->id)) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('vehicle.delete.soft', Crypt::encrypt($row->id)) }}" class="btn btn-danger">Delete</a>
                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('vehicle.create') }}" ><i class="fa fa-plus" aria-hidden="true"></i> Add Vehicle</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
