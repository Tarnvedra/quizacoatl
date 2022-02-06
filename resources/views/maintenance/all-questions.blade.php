@extends('layouts.app')

@section('content')
    <div class="container-scroller">
    @include('partials.nav')
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @include('partials.messages')
                    <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">Viewing all questions added by you (anytime) and others > 40 days Old</div>
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
                                                        <td><a href="{{ route('view-question', ['question' => $question]) }}">{{ $question->id }}</a></td>
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
            </div>
        </div>
    </div>
    @include('partials.footer')
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
