<div class="sidebar" data-color="black" data-image="{{ asset('light-bootstrap/img/sidebar-4.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                {{ __("Sistema de Sumate") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'home') active @endif">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __("Incio") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'formulario') active @endif">
                <a class="nav-link" href="{{route('formulario')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __("Formulario") }}</p>
                </a>
            </li>

            <li class="nav-item @if($activePage == 'dashboard') active @endif"> 
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard")}}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
