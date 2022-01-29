@extends('layouts/app')

@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
             <div class="col-md-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card o-hidden border-0 shadow-lg my-8">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-md-4 d-none d-md-block"
                                     style="background-image: url('{{asset('img/logo.jpg')}}')"></div>
                                <div class="col-md-4">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Quizacoatl</h1>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror

                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary btn-lg">
                                            {{ __('Login') }}
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
@endsection

