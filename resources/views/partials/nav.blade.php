<?php /** @var $user \App\User */ ?>
<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item nav-search d-none d-lg-block ms-3">
                    <!--    <div class="input-group">
                            <div class="input-group-prepend">
                                       <span class="input-group-text" id="search">
                                          <i class="mdi mdi-magnify"></i>
                                       </span>
                            </div>
                            <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                        </div>  -->
                    </li>
                </ul>
                <div class="text-center navbar-brand-wrapper d-flex justify-content-center">
                    <a class="navbar-brand brand-logo" href=""><img src="{{ asset('/img/logo.jpg') }}" width="60" height="60" alt="logo"> Quizacoatl</a>
                </div>

                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
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
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-cube-outline menu-icon"></i>
                        <span class="menu-title">Maintenance</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="#">Add Topic</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Add Question</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('quiz') }}" class="nav-link">
                        <i class="mdi mdi-chart-areaspline menu-icon"></i>
                        <span class="menu-title">Quizboard</span>

                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-finance menu-icon"></i>
                        <span class="menu-title">Scores</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-finance menu-icon"></i>
                        <span class="menu-title">Logout</span>
                        <i class="menu-arrow"></i>
                    <form id="logout-form" action="{{ route('logout.app') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</div>
