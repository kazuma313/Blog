@extends('Layout.Main')


@section('Title')
<title>{{ $tema }}</title>
@endsection

@section('Tema')
<h1>{{ $tema }}</h1>
@endsection

@section('Isi')

    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! $isi['isi'] !!}
                </div>
            </div>
        </div>
    </main>
@endsection
