@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
    @include('partials.nav')
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @include('partials.messages')
                    <div class="row">
                        <form id="import-questions" method="POST" action="#">
                            @csrf
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-title">Import Questions NYI</div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    </div>
@endsection
