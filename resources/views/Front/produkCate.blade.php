@extends('Front.index')

@section('style')
<style>
    .beli:hover {
        opacity: 80%;
        transform: scale(1.0);
    }

    .star-rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
        gap: 5px;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        font-size: 20px;
        color: #ddd;
        cursor: pointer;
    }

    .star-rating input:checked~label,
    .star-rating input:hover~label,
    .star-rating label:hover~label {
        color: #ffc107;
    }

</style>
@endsection

@section('main')
<!-- Dashboard -->
<section class="container dashboard">
    <div class="text-center">
        <span>E-CommerceQ</span>
        <h2>Our {{ $category->categori}}</h2>
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
        @forelse ($produk as $row)
        <!-- Card -->
        <div
            style="border: 1px solid #4d1cab; border-radius: 8px; width: 300px; padding: 16px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.3s;">
            <a href="{{ route('front.produk.detail', $row->slug)}}" style="text-decoration: none; color: inherit;">
                <img src="https://i.pinimg.com/736x/e6/eb/59/e6eb59a57a03a4c6d23bda24c639954c.jpg"
                    alt="{{ $row->nama_produk}}" style="width: 100%; border-radius: 5px;">
            </a>
            <h3 style="font-size: 16px; margin: 16px 0 8px;">{{ $row->nama_produk}}</h3>
            <p style="color: #555; margin:0 0 10px">{{$row->merk->merk_produk}}</p>
            <div class="star-rating">
                <input type="radio" id="star5-{{ $row->id }}" name="rating-{{ $row->id }}" value="5" /><label
                    for="star5-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star4-{{ $row->id }}" name="rating-{{ $row->id }}" value="4" /><label
                    for="star4-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star3-{{ $row->id }}" name="rating-{{ $row->id }}" value="3" /><label
                    for="star3-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star2-{{ $row->id }}" name="rating-{{ $row->id }}" value="2" /><label
                    for="star2-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star1-{{ $row->id }}" name="rating-{{ $row->id }}" value="1" /><label
                    for="star1-{{ $row->id }}"><i class="fa fa-star"></i></label>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center">
                <button class="beli"
                    style="background-color: #7839F3; color: #fff; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">Beli
                    Sekarang !</button>
                <button
                    style="background-color: transparent; color: black; border: 1px solid black; padding: 8px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s;">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                <button class="like-btn" data-product-id="{{ $row->id }}"
                    style="background-color: transparent; color: black; border: 1px solid black; padding: 8px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s;">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </div>
        </div>
        <!-- End Card -->
        @empty
        <div class="text-center">
            <h2>Produk {{ $category->categori }} tidak ada di E-commerceQ</h2>
        </div>
        @endforelse
    </div>
</section>
<!-- End Dashboard -->
@endsection

@section('script')

<script>
    document.querySelectorAll('.like-btn').forEach(button => {
        button.addEventListener('click', function () {
            const produkId = this.getAttribute('data-product-id');
            const isLiked = this.querySelector('i').classList.contains('fa-solid');

            fetch(isLiked ? '/unlike' : '/like', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        produk_id: produkId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.querySelector('i').classList.toggle('fa-solid');
                        this.querySelector('i').classList.toggle('fa-regular');
                    }
                });
        });
    });

    document.querySelectorAll('.star-rating input').forEach(radio => {
        radio.addEventListener('change', function () {
            const productId = this.name.split('-')[1];
            const rating = this.value;

            fetch('/rate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        produk_id: productId,
                        rating: rating
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Rating submitted successfully!');
                    }
                });
        });
    });

    document.querySelectorAll('.star-rating input').forEach(radio => {
        radio.addEventListener('change', function () {
            const productId = this.name.split('-')[1];
            const rating = this.value;

            fetch('/rate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        produk_id: productId,
                        rating: rating
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Rating submitted successfully!');
                    }
                });
        });
    });

</script>

@endsection
