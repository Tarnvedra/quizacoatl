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
                        <form id="add-topic" method="POST" action="{{ route('save-topic') }}">
                            @csrf
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">Add Topic</div>
                                        <div class="form-group">
                                            <label for="topic">Topic :</label>
                                            <input class="form-control" type="text" name="topic">
                                        </div>
                                        <div class="form-group">
                                            <label for="class">Topic Colour:</label>
                                            <select  class="form-control" name="class">
                                                <option>Pick a colour for the Topic</option>
                                                <option value="btn-dark">Black</option>
                                                <option value="btn-light">Light</option>
                                                <option value="btn-success">Green</option>
                                                <option value="btn-info">Cyan</option>
                                                <option value="btn-warning">Orange</option>
                                                <option value="btn-danger">Red</option>
                                                <option value="btn-secondary">Grey</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <h4>Existing Topics</h4>
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Topic</th>
                                                    <th>Colour CLass</th>
                                                </tr>
                                                @foreach($topics as $topic)
                                                    <tr>
                                                        <td>{{ $topic->id }}</td>
                                                        @if($topic->name === 'tv')
                                                            <td>{{ strtoupper($topic->name) }}</a></td>
                                                        @else
                                                        <td>{{ ucfirst($topic->name) }}</td>
                                                        @endif
                                                            <td><button disabled="disabled" class="{{ $topic->class }}">{{ $topic->class }}</button></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit Topic</button>
                                    <a href="{{ route('dashboard') }}" type="submit" class="btn btn-danger">Cancel</a>
                                </div>
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

