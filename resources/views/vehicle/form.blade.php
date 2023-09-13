@extends('layouts.master')

@section('isi_kandungan')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                            @if($edit)
                            Edit Vehicle
                            @else
                            Create Vehicle
                            @endif
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('vehicle.index') }}">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Back to Vehicles List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Car Information Form</div>
                    <div class="card-body">
                        <form action="@if($edit){{ route('vehicle.update', Crypt::encrypt($vehicle->id)) }}
                                  @else {{ route('vehicle.submit') }}
                                  @endif" method="post">
                        @csrf
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (Brand)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="brand">Brand:</label>
                                    <input type="text" class="form-control" id="brand" name="brand"  placeholder="Enter Brand" value="@if($edit){{ $vehicle->brand }}@endif" />
                                </div>
                                <!-- Form Group (Model)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="model">Model:</label>
                                    <input type="text" class="form-control" id="model" name="model"  placeholder="Enter Model" value="@if($edit){{ $vehicle->model }}@endif" />
                                </div>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (Type)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="type">Type:</label>
                                    <input type="text" class="form-control" id="type" name="type"  placeholder="Enter Type" value="@if($edit){{ $vehicle->type }}@endif" />
                                </div>
                                <!-- Form Group (Year)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="year">Year:</label>
                                    <input type="number" class="form-control" id="year" name="year"  placeholder="Enter Year" value="@if($edit){{ $vehicle->year }}@endif" />

                                    @if($edit)
                                    <input type="hidden" id="vehicleId" value="{{ Crypt::encrypt($vehicle->id) }}">
                                    @endif
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <!-- <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="" />
                            </div> -->
                            <br>
                            <!-- Submit button-->
                            <button type="submit" class="btn btn-success btn-sm">@if($edit) Update Vehicle @else Add Vehicle @endif</button>

                            @if($edit)
                            <button class="btn btn-warning btn-sm" id="ajaxDelete">AJAX Delete</button>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('namaPage')
Car Information Form
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    $("#ajaxDelete").on("click", function (e) {
        var vehicleId = $("#vehicleId").val();
        // alert(_token);
        $.ajax({
            headers:{
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            type: 'get',
            url: "/vehicle/delete/ajax/" + vehicleId ,
            success: function(data) {
                // alert('DAH BERJAYA DELETE');
                window.location.href = '/vehicle';
            },
            error: function() {

            }
        });
    });
</script>
@endpush
