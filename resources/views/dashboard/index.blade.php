@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Karyawan</h5>
                <p>{{ $totalKaryawans }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Departemen</h5>
                <p>{{ $totalDepartemens }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Posisi</h5>
                <p>{{ $totalPosisis }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
