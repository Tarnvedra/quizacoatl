<?php /** @var $user \App\User */ ?>
<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <ul class="navbar-nav navbar-nav-left">
                    <li>
                        <div class="text-center navbar-brand-wrapper d-flex justify-content-center">
                            <a class="navbar-brand brand-logo" href=""><img src="{{ asset('/img/logo.jpg') }}" width="60" height="60" alt="logo">Quizacoatl</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            <span class="nav-profile-name"> <b><i>{{ 'Current User: '.ucfirst($user->name) }}</i></b></span>
                        </a>
                    </li>
                <li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('quiz') }}" class="nav-link">
                        <i class="mdi mdi-chart-areaspline menu-icon"></i>
                        <span class="menu-title">Quizboard WIP</span>

                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('scores') }}" class="nav-link">
                        <i class="mdi mdi-finance menu-icon"></i>
                        <span class="menu-title">Scores NYI</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Maintenance</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="{{ route('add-topic') }}">Add Topic</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('view-topics') }}">View All Topics</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('add-question') }}">Add Question</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('view-your-questions') }}">View Your Questions</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('all-questions') }}">View All Questions</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('import-questions') }}">Import Questions NYI</a></li>
                    </ul>
                </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-cube-outline menu-icon"></i>
                        <span class="menu-title">User</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item">  <a class="nav-link" href=""  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-finance menu-icon"></i>
                                    <span class="menu-title">Logout</span>
                                    <i class="menu-arrow"></i></a>
                                <form id="logout-form" action="{{ route('logout.app') }}" method="POST" style="display: none;">
                                    @csrf
                                </form></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('user-settings') }}">Update User Settings</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
