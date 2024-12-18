@extends('Front.index')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .beli:hover{
        opacity: 80%;
        transform: scale(1.0)
    }
</style>
@endsection

@section('main')
<!-- Dashboard -->
<section class="container dashboard">
    <div class="text-center">
        <span>E-commerceQ</span>
        <h2>{{ $merk->merk_produk }}</h2>
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content:center; baseline; gap: 20px;">
        @forelse ($produk as $row)
        {{-- card --}}
        <div
            style="border: 1px solid #4d1cab; border-radius: 8px; width: 300px; padding: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);transition: transform 0.3 ease; ">
            <a href="{{ route('front.produk.detail', $row->slug)}}" style="text-decoration: none; color: inherit;">
                <img src="https://i.pinimg.com/736x/e6/eb/59/e6eb59a57a03a4c6d23bda24c639954c.jpg"
                    alt="{{ $row->nama_produk }}" style="width: 100%;border-radius: 5px">
            </a>
            <h3 style="font-size: 16px; margin: 16px 0 8px">{{ $row->nama_produk }}</h3>
            <p style="color: #555; margin: 0 0 10px;">{{ $row->merk->merk_produk }}</p>
            <div style="display: flex; justify-content: space-between; align-items: center">
                <button class="beli"
                    style="background-color: #7839F3; color: #fff; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">Beli
                    sekarang!!</button>
                <button style="background-color: transparent; color: black; border: 1px solid black; padding: 8px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                <button style="background-color: transparent; color: black; border: 1px solid black; padding: 8px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
        </div>
        @empty
        <div class="text-center">
            <h2>Produk {{ $merk->merk_produk }} tidak ada di E-commerceQ</h2>
        </div>
        @endforelse
        {{-- end card --}}
    </div>
</section>
<!-- End Dashboard -->
@endsection

@section('script')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection