<!-- Dashboard -->

@extends('kerangka.master')

@section('title', 'Dashboard')

@section('js')

<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}

@endsection

@section('content')

<div class="page-content">
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Perbandingan Pria dan Wanita</h4>
                        </div>
                        <div class="card-body">
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset('saya.jpg')}}" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">Users</h5>
                            <h6 class="text-muted mb-0">@aliffianbr</h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4>Diagram Lingkaran</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>
@yield('js')
@endsection