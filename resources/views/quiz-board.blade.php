@extends('layouts.app')

@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
    @include('partials.nav')
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                            <topic-component> :route="{{ route('api-topics') }}"</topic-component>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-title">Questions / Answers</div>
                                <div class="card-body">
                                    <div class="row">
                                        <question-component> </question-component>
                                    </div>
                                    <div class="row">
                                        <answer-component></answer-component>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.footer')
                </div>
    </div>
@endsection

