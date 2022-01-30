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

                        <div class="col-xl-12 col-lg-9 col-md-3">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="card-title">Questions You Have Added</div>
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
                                                    @if($question->topic->name === 'tv')
                                                        <td>{{ strtoupper($question->topic->name) }}</a></td>
                                                    @else
                                                        <td>{{ ucfirst($question->topic->name) }}</a></td>
                                                    @endif
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
                </div>
                @include('partials.footer')
            </div>
        </div>
    </div>
@endsection
