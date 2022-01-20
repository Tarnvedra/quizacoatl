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
                        <div class="row">
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-success font-weight-bold">{{ $totalTopics }}</h2>
                                        <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="topics" width="289" height="144" style="display: block; width: 289px; height: 144px;" class="chartjs-render-monitor"></canvas>
                                <div class="line-chart-row-title">Topics</div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="text-danger font-weight-bold">{{ $totalQuestions }}</h2>
                                        <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                                    </div>
                                </div>
                                <canvas id="questions" width="289" height="144" style="display: block; width: 289px; height: 144px;" class="chartjs-render-monitor"></canvas>
                                <div class="line-chart-row-title">Questions</div>
                            </div>
                        </div>

                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="text-success font-weight-bold">{{ $newTopics }}</h2>
                                            <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                                        </div>
                                    </div>
                                    <canvas id="new-topics" width="289" height="144" style="display: block; width: 289px; height: 144px;" class="chartjs-render-monitor"></canvas>
                                    <div class="line-chart-row-title">Newly Added Topics</div>
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h2 class="text-danger font-weight-bold">{{ $newQuestions }}</h2>
                                            <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                                        </div>
                                    </div>
                                    <canvas id="new-questions" width="289" height="144" style="display: block; width: 289px; height: 144px;" class="chartjs-render-monitor"></canvas>
                                    <div class="line-chart-row-title">Newly Added Questions (Last 7 Days)</div>
                                </div>
                            </div>

                        </div>
                    </div>

                        <div class="col-xl-12 col-lg-9 col-md-3">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                            <div class="card-title">Latest Questions Added</div>
                            <div class="row">
                                <table class="table table-bordered table-hover">
                                    <tr style="background-color: whitesmoke;">
                                        <th>#</th>
                                        <th>Topic</th>
                                        <th>Question</th>
                                        <th>Added</th>

                                    <tr>
                                    @foreach($questions as $question)
                                        <tr>
                                            <td>{{ $question->id }}</td>
                                            <td>{{ ucfirst($question->topic->name) }}</a></td>
                                            <td>{{ $question->question }}</td>
                                            <td>{{ $question->created_at->diffForHumans()}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                            </div>
                        </div>

                </div>


                @include('partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@endsection
