@extends('layouts.app', ['activePage' => 'home', 'title' => 'Sistema de Sumate', 'navName' => 'Home', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            
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