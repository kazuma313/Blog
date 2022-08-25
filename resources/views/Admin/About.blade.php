@extends('Layout.Admin.Admin')


@section('isi')

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Blog Pribadi</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">

            @include('Partial.Sidebar')


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
            
                        <form class="row g-4">
                            <div class="col-auto">
                              <label for="staticEmail2" class="visually-hidden">Judul</label>
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Judul">
                            </div>
                            <div class="col-auto">
                              <label for="inputPassword2" class="visually-hidden">Judul</label>
                              <input type="password" class="form-control" id="inputPassword2" placeholder="Judul">
                            </div>
                            <div class="col-auto">
                              <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>

                            <div class="col-auto">
                              <label for="staticEmail2" class="visually-hidden">Isi</label>
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Isi">
                            </div>
                            <div class="col-auto">
                              <label for="inputPassword2" class="visually-hidden">Isi</label>
                              <input type="password" class="form-control" id="inputPassword2" placeholder="Isi">
                            </div>
                            <div class="col-auto">
                              <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>

                            <div class="col-auto">
                              <label for="staticEmail2" class="visually-hidden">Foto</label>
                              <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Foto">
                            </div>
                            <div class="col-auto">
                              <label for="inputPassword2" class="visually-hidden">Foto</label>
                              <input type="password" class="form-control" id="inputPassword2" placeholder="Foto">
                            </div>
                            <div class="col-auto">
                              <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </div>
                          </form>
                    </div>
                </main>

                @include('Partial.Footer')

            </div>
        </div>
    @endsection
