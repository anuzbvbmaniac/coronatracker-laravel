<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <!-- Overview -->
            <li class="dropdown @if($title == 'Overview') ? active : '' @endif">
                <a href="/" class="nav-link" data-toggle="tooltip" data-original-title="Overview" data-placement="right"><i data-feather="monitor"></i><span>Overview</span></a>
            </li>

            <!-- Countries -->
            <li class="dropdown @if($title == 'Countries') ? active : '' @endif">
                <a href="{{ route('countries') }}" class="nav-link" data-toggle="tooltip" data-original-title="Countries" data-placement="right"><i data-feather="globe"></i><span>Countries</span></a>
            </li>

            <!-- Symptoms -->
            <li class="dropdown @if($title == 'Symptoms') ? active : '' @endif">
                <a href="{{ route('symptoms') }}" class="nav-link" data-toggle="tooltip" data-original-title="Symptoms" data-placement="right"><i data-feather="sun"></i><span>Symptoms</span></a>
            </li>

            <!-- Preventions -->
            <li class="dropdown @if($title == 'Preventions') ? active : '' @endif">
                <a href="index.html" class="nav-link" data-toggle="tooltip" data-original-title="Preventions" data-placement="right"><i data-feather="shield"></i><span>Preventions</span></a>
            </li>

            <!-- FAQs -->
            <li class="dropdown @if($title == 'FAQs') ? active : '' @endif">
                <a href="index.html" class="nav-link" data-toggle="tooltip" data-original-title="FAQs" data-placement="right"><i data-feather="help-circle"></i><span>FAQs</span></a>
            </li>
        </ul>
    </aside>
</div>
