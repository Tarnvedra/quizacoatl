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
                                    <div class="card-title">Topics</div>
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Topic</th>
                                            <th>Class Colour</th>
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
                        </div>
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
