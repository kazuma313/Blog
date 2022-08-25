@extends('Layout.Admin.Admin')


@section('isi')

    <body class="bg-primary">

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                    </div>
                                    <div class="card-body">

                                        @if (session()->has('LoginGagal'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>{{ session('LoginGagal') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif




                                        <form class="row g-3 needs-validation" novalidate action="/Login" method="post">
                                            @csrf

                                            <div class="form-floating ">
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" id="email" type="email"
                                                    name="email" placeholder="name@example.com" autofocus required />
                                                <label for="inputEmail">Email address</label>
                                            </div>

                                            @error('email')
                                                <small>
                                                    <div class="text-danger">{{ $message }}</div>
                                                </small>
                                            @enderror



                                            <div class="form-floating  ">
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    id="password" type="password" name="password" placeholder="Password"
                                                    required />
                                                <label for="inputPassword">Password</label>
                                            </div>

                                            @error('password')
                                                <small>
                                                    <div class="text-danger">{{ $message }}</div>
                                                </small>
                                            @enderror

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="/Register">Need an account? Sign up!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <div id="layoutAuthentication_footer">

                @include('Partial.Footer')

            </div>


        </div>
    </body>
@endsection
