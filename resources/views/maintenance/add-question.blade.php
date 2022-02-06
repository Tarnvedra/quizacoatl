@extends('layouts.app')

@section('content')
    <div class="container-scroller">
    @include('partials.nav')
        <div class="container-fluid page-body-wrapper">

            <div class="main-panel">
                <div class="content-wrapper">
                    @include('partials.messages')
                    <div class="row">
                            <form id="add-question" method="POST" action="{{ route('save-question', ['user' => $user]) }}">
                                @csrf
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">Add Question</div>
                                            <div class="form-group">
                                                <label for="question">Question :</label>
                                                <textarea class="form-control" name="question" cols="100" rows="5"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="answer">Answer :</label>
                                                <textarea class="form-control" name="answer" cols="100" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control" for="topic">Topic: </label>
                                            <select class="form-control" name="topic">
                                                <option selected>Choose A Topic For this Question</option>
                                                @foreach($topics as $topic)
                                                <option value="{{ $topic->id }}">{{ ucfirst($topic->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control" for="topic">Difficulty: </label>
                                            <select  class="form-control" name="difficulty" aria-label="Default select example">
                                                <option selected>Choose A Difficulty For this Question</option>
                                                @foreach($difficulty as $difficult)
                                                    <option value="{{ $difficult->id }}">{{ ucfirst($difficult->name) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit Question</button>
                                        <a href="{{ route('dashboard') }}" type="submit" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                @include('partials.footer')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush
