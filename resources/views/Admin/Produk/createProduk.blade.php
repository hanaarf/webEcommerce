@extends('template.index')

@section('title', 'form input produk')

@section('style')
<link rel="stylesheet" href="{{ asset('template/plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/codemirror/codemirror.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/codemirror/theme/monokai.css') }}">
@endsection

@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form input produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index.produk')}}">Home</a></li>
                        <li class="breadcrumb-item active">Form input produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('store.produk') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama produk</label>
                                    <input type="text" name="nama_produk"
                                        class="form-control @error('nama_produk') is-invalid @enderror" 
                                        value="{{ old('nama_produk')}}" placeholder="masukan nama produk..">
                                    @error('nama_produk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kategori Produk</label>
                                    <select name="categori_id" class="form-control @error('categori_id') is-invalid @enderror">
                                        <option value="">Pilih kategori</option>
                                        @foreach ($kategori as $row)
                                        <option value="{{ $row->id }}"
                                            {{ old('categori_id') == $row->id ? 'selected' : '' }}>{{ $row->categori }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('categori_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Merk Produk</label>
                                    <select name="merk_produk_id" class="form-control @error('merk_produk_id') is-invalid @enderror">
                                        <option value="">Pilih merk produk</option>
                                        @foreach ($merk as $row)
                                        <option value="{{ $row->id }}"
                                            {{ old('merk_produk_id') == $row->id ? 'selected' : '' }}>
                                            {{ $row->merk_produk }}</option>
                                        @endforeach
                                    </select>
                                    @error('merk_produk_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga produk</label>
                                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" 
                                        value="{{ old('harga')}}" placeholder="masukan harga produk..">
                                    @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi produk</label>
                                    <textarea id="summernote" name="deskripsi" class="@error('deskripsi') is-invalid @enderror">

                                    </textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script src="{{ asset('template/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('template/plugins/codemirror/mode/css/css.js') }}"></script>
<script src="{{ asset('template/plugins/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('template/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })

</script>
@endsection
