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
                        @if($user->id === $question->user_id)
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Question # {{ $question->id }} -
                                        Topic: {{ ucwords($question->topic->name) }}</div>
                                    <div class="col-sm-8">
                                        <div class="card text-black bg-light mb-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Question</h5>
                                                <p class="card-text" id="question">{{ $question->question }}</p>
                                            </div>
                                            <div class="card-footer text-muted">
                                                <p>
                                                    <button class="btn btn-outline-danger" type="button"
                                                            data-toggle="collapse" data-target="#answerCollapse"
                                                            aria-expanded="false" aria-controls="answerCollapse">
                                                        Reveal Answer
                                                    </button>
                                                </p>
                                                <div class="collapse" id="answerCollapse">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <b>{{ decrypt($question->answer) }}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('view-your-questions') }}" class="btn btn-success">Return To Questions</a>
                            <a href="{{ route('view-your-questions') }}" class="btn btn-warning disabled">View Next Question NYI</a>
                        </div>
                    </div>
                    @else
                        <div class="card">
                        <div class="card-body">
                            <div class="card-title">Action Unauthorised</div>
                            <div class="col-sm-8">
                                <div class="card text-black bg-light mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Question</h5>
                                        <p class="card-text" id="question">You do not have permission to access this question!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="col-sm-8">
                                <p>
                                    <button class="btn btn-outline-danger" type="button"
                                            data-toggle="collapse" data-target="#answerCollapse"
                                            aria-expanded="false" aria-controls="answerCollapse">
                                        Reveal Answer
                                    </button>
                                </p>
                                <div class="collapse" id="answerCollapse">
                                    <div class="card">
                                        <div class="card-body">
                                            <b>{{ 'No Cheating Allowed ;)' }}</b>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection

@push('scripts')
    <script></script>
@endpush

