@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle') }}</div>

                <div class="card-body">
                    <h2>Car Information Form</h2>
                    <form action="@if($edit){{ route('vehicle.update', Crypt::encrypt($vehicle->id)) }}
                                  @else {{ route('vehicle.submit') }}
                                  @endif" method="post">
                        <!--csrf - Cross-Site Request Forgery (bertujuan untuk)-->
                        @csrf
                        <div class="form-group">
                            <label for="brand">Brand:</label>
                            <input type="text" class="form-control" id="brand" name="brand"  placeholder="Enter Brand" value="@if($edit){{ $vehicle->brand }}@endif" />
                        </div>
                        <div class="form-group">
                            <label for="model">Model:</label>
                            <input type="text" class="form-control" id="model" name="model"  placeholder="Enter Model" value="@if($edit){{ $vehicle->model }}@endif" />
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <!-- <select class="form-select" id="type" name="type">
                                <option value="">Select Type</option>
                                <option value="Car">Car</option>
                                <option value="Motor">Motor</option>
                            </select> -->
                            <input type="text" class="form-control" id="type" name="type"  placeholder="Enter Type" value="@if($edit){{ $vehicle->type }}@endif" />
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="number" class="form-control" id="year" name="year"  placeholder="Enter Year" value="@if($edit){{ $vehicle->year }}@endif" />
                            @if($edit)
                            <input type="hidden" id="vehicleId" value="{{ Crypt::encrypt($vehicle->id) }}">
                            @endif
                        </div>
                        <br>
                        <a class="@if($edit) btn btn-primary @else btn btn-danger @endif" href="{{ route('vehicle.index') }}">@if($edit) Back @else Cancel @endif</a>
                        <button type="submit" class="btn btn-success">@if($edit) Update @else Submit @endif</button>
                        <button class="btn btn-warning" id="ajaxDelete">AJAX Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
                alert('DAH BERJAYA DELETE');
                window.location.href = '/vehicle';
            },
            error: function() {

            }
        });
    });
</script>
@endsection
