@extends('Layout.Main')

@section('Tema')
    <h1>{{ $tema }}</h1>
@endsection

@section('Title')
    <title>{{ $tema }}</title>
@endsection


@section('Isi')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        {{-- <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7"> --}}
        <!-- Post preview-->


        @if ($blog->count())
                    
        @else
                <div class="text-center fs-3">No Post found</div>
        @endif


        <div class="row ">
            @foreach ($blog as $blg)
                <div class="col-sm-4 mb-3">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ $backgroud }}" class="card-img-top" alt="poto">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blg->judul }}</h5>
                            <p class="card-text">{{ $blg->excerpt }}</p>
                            <p class="card-text"><small class="text-muted">Last
                                    updated{{ $blg->updated_at->diffForHumans() }}
                                    <br>
                                    Poseted by {{ $nama->nama }}
                                    <br>
                                </small></p>
                            <a href="/konten/{{ $blg->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <hr class="my-4" />
        </div>


        <!-- Divider-->




        <!-- Pager-->
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
            </a></div>
        {{-- </div>
        </div> --}}
    </div>
@endsection
