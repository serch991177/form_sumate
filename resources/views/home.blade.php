@extends('layouts.app', ['activePage' => 'home', 'title' => 'Sistema de Sumate', 'navName' => 'Home', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <img src="{{ asset('light-bootstrap/img/banner-4.png') }}" style="max-width:100%; max-height:100%;" alt="banner sumate">
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            demo.initDashboardPageCharts();
            demo.showNotification();
        });
    </script>
@endpush