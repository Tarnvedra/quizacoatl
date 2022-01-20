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
                        <form id="topic-selector" method="#" action="#">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-title">Topics</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @foreach($topics as $topic)
                                                <button type="submit" id="{{ $topic->name }}"
                                                        class="{{ $topic->class }}">{{ ucfirst($topic->name) }}</button>
                                            @endforeach
                                            <button type="submit" id="random" class="btn-primary btn-lg">Random</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-title">Questions / Answers</div>
                                <div class="card-body">
                                    <div class="row">
                                        <question-component></question-component>
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
        </div>
    </div>
@endsection

