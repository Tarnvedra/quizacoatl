@extends('layouts.app')

@section('content')
    <div class="container-scroller">
    @include('partials.nav')
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    @include('partials.messages')
                    <div class="row">
                        <form id="update-user" method="POST" action="{{ route('update-password', ['user' => $user]) }}">
                            @csrf
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">Update Password</div>
                                        <div class="form-group">
                                            <label for="password">Password :</label>
                                            <input class="form-control" type="password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password">Confirm Password :</label>
                                            <input class="form-control" type="password" name="confirm-password">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
