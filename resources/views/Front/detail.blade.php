@extends('Front.index')

@section('title', 'detail produk')

@section('main')
<!-- Detail Checkout -->
<section class="container detail-checkout" style="margin-top: 50px;">
    <div class="row">

        <div class="col-md-6 left-content">
            <div class="p-5">
                <div class="video">
                    <img class="img-fluid" style="border-radius: 30px;" src="https://cdn-image.hipwee.com/wp-content/uploads/2018/05/hipwee-c81e728d9d4c2f636f067f89cc14862c-130.jpg" alt="View Video">
                </div>
                <div class="desc">
                    <span>{{ $produk->nama_produk }}</span>
                    <p>
                        {!! $produk->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 right-content d-flex justify-content-center" style="margin-top: 30px;">
            <form class="mt-4">
                <div class="mb-3 inputan">
                    <label for="exampleInputEmail1" class="form-label">Kategori produk</label>
                    <input type="text" class="form-control" readonly value="{{$produk->kategori->categori}}">
                </div>
                <div class="mb-3 inputan">
                    <label for="fullName" class="form-label">Merk Produk</label>
                    <input type="text" class="form-control" readonly value="{{$produk->merk->merk_produk}}">
                </div>
                <div class="mb-3 inputan">
                    <label for="Occupation" class="form-label">Harga</label>
                    <input type="text" class="form-control" readonly value="Rp{{ number_format($produk->harga,0,',','.') }}">
                </div>
              
                @guest
                    <a href="{{ route('login')}}" class="btn btn-primary">login dulss</a>
                    <p class="pay">Daftarkan akun mu untuk membeli pakaian impianmu</p>
                @else
                @if(Auth::user()->role == '2')
                <button type="submit" class="btn btn-primary">Buy Now</button>
                <p class="pay">
                    Beli pakaian impian-mu sekarang !
                </p>
                @endif
                @endguest
            </form>
        </div>

    </div>
</section>
<!-- End Detail Checkout -->
@endsection
