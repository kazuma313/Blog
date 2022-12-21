@extends('Layout.Admin.Admin')

@section('title', 'registration')

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
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                    </div>
                                    <div class="card-body">

                                        <form method="post" action="/Register">
                                            @csrf

                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email" type="email"/>
                                                <label for="email">Email address</label>

                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('password') is-invalid @enderror"
                                                            id="password" name="password" type="password"
                                                            placeholder="Create a password" />
                                                        <label for="password">Password</label>
                                                    </div>

                                                    @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('name') is-invalid @enderror"
                                                            id="name" type="text" placeholder="username"
                                                            name="name" />
                                                        <label for="name">Username</label>

                                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" type="submit">Create
                                                        Account</button>
                                                </div>
                                        </form>

                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="/Login">Have an account? Go to login</a></div>
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
