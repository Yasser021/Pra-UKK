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
                        <h5 class="card-title fw-semibold mb-4">Forms Add Book</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Books Name" name="title">
                                        <label for="floatingInput">Books Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Author Name" name="author">
                                        <label for="floatingInput">Author Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Publisher Name" name="publisher">
                                        <label for="floatingInput">Publisher</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Year Publish" name="publish_year">
                                        <label for="floatingInput">Year Publish</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput"
                                            placeholder="Books Stock" name="stock">
                                        <label for="floatingInput">Stock</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01">Book Image</label>
                                        <input type="file" class="form-control" name="cover" id="inputGroupFile01"
                                            placeholder="Input Book Cover">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" name="desc" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Synopsis</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="id_kategori">
                                            <option selected disabled>Open this select menu</option>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                            @endforeach
                                        </select>
                                        <label for="floatingSelect">Select Category</label>
                                    </div>
                                    <a href="{{ route('buku.index') }}" class="btn btn-danger">Return</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
