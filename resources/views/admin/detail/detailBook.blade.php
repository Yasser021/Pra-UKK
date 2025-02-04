@extends('partial.tempadmin')
@section('konten')
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        @include('comp.header')
        <!--  Header End -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Forms Detail Book</h5>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-4">Title : {{ $buku->title }}</h5>
                                <p class="card-text">Author : {{ $buku->author }}</p>
                                <p class="card-text">Publisher : {{ $buku->publisher }}</p>
                                <p class="card-text">Year publish : {{ $buku->publish_year }}</p>
                                <p class="card-text">Stock : {{ $buku->stock }}</p>
                                <p class="card-text">Kategori : {{ $buku->kategori->kategori }}</p>
                                <p class="card-text">Synopsys : {{ $buku->desc }}</p>
                                <p><strong>Cover {{ $buku->title }}</strong></p>
                                <img src="{{ asset('storage/' . $buku->cover) }}" alt="cover" class="img-fluid"
                                    width="100px">
                            </div>
                            <div class="d-flex card-footer">
                                <a href="{{ route('buku.index') }}" class="btn btn-danger">Return</a>
                                <a href="{{ route('buku.edit', $buku->id) }}" type="button"
                                    class="btn btn-success ms-2">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
