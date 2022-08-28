@extends('Layout.Admin.Admin')


@section('isi')

    <body class="sb-nav-fixed">

        @include('Partial.Admin.Navbar')

        <div id="layoutSidenav">

            @include('Partial.Admin.Sidebar')


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">{{ $post->judul }}</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">{{ $post->slug }}</li>
                        </ol>

                        {!! $post->isi !!}

                    </div>
                </main>

                @include('Partial.Footer')

            </div>
        </div>
    @endsection
