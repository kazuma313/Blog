@extends('Layout.Admin.Admin')


@section('isi')

    <body class="sb-nav-fixed">

        @include('Partial.Admin.Navbar')

        <div id="layoutSidenav">

            @include('Partial.Admin.Sidebar')


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>


                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif


                        <form class="row g-3" method="post" action="/Admin" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="mb-1">
                                <label for="about_id" class="form-label">User ID</label>
                                <input type="text" name='about_id'
                                    class="form-control @error('about_id') is-invalid @enderror" id="about_id"
                                    value="{{ auth()->user()->id }}" readonly>

                                @error('about_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}


                            <div class="mb-1">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    id="judul" name="judul" placeholder="Judul" value="{{ old('judul') }}" required>
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-1">
                                <label for="slug" class="form-label">slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    id="slug" name="slug" value="{{ old('slug') }}" readonly>
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mb-1">
                                <label for="gambar">Input Gambar</label>
                                <br>
                                <img class="img-preview img-fluid">
                                <br>
                                <input type="file" class="form-control-file @error('gambar') is-invalid @enderror"
                                    id="gambar" name="gambar" value="{{ old('gambar') }}" onchange="lihatImage()">
                                @error('gambar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            {{-- <div class="mb-1">
                                <label for="Excerpt" class="form-label">Excerpt</label>
                                <input type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt"
                                    name='excerpt' placeholder="Excerpt" value="{{ old('excerpt') }}" required>
                                @error('excerpt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label for="Isi" class="form-label">Isi</label>
                                @error('isi')
                                    <p class="text-danger @error('isi') is-invalid @enderror">{{ $message }}</p>
                                @enderror
                                <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
                                <trix-editor input="isi"></trix-editor>

                            </div>



                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>


                        <script>
                            const judul = document.querySelector('#judul');
                            const slug = document.querySelector('#slug');

                            judul.addEventListener("change", function() {
                                fetch('/Admin/slug?judul=' + judul.value)
                                    .then(response => response.json())
                                    .then(data => slug.value = data.slug)
                            });



                            document.addEventListener("trix-file-accept", (e) => {
                                e.preventDefault()
                            })

                            function lihatImage() {

                                const image = document.querySelector('#gambar');
                                const imagePreview = document.querySelector('.img-preview');

                                imagePreview.style.display = 'block';

                                const oFReader = new FileReader();
                                oFReader.readAsDataURL(image.files[0])

                                oFReader.onload = function(OFREvent) {
                                    imagePreview.src = OFREvent.target.result;
                                }

                            }
                        </script>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kontens as $konten)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $konten->slug }}
                                        <td>{{ $konten->judul }}</td>
                                        <td>
                                            <i class="fa-solid fa-trash-can"></i>
                                            <a href="Admin/{{ $konten->slug }}" class="badge bg-dark"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="Admin/{{ $konten->slug }}/edit" class="badge bg-success"><i
                                                    class="fas fa-pencil-alt"></i></a>

                                            <form action="/Admin/{{ $konten->slug }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf

                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Apakah Anda yakin untuk menghapus data?')"><i
                                                        class="fas fa-trash-alt"></i>
                                            </form>

                                        </td>
                                    </tr>

                                    {{-- <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                              </tr> --}}
                                @endforeach
                            </tbody>
                        </table>



                    </div>
                </main>

                @include('Partial.Footer')

            </div>
        </div>
    @endsection
