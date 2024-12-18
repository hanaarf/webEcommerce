@extends('Front.index')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    .bookmark-btn {
        background-color: transparent;
        color: black;
        border: 1px solid black;
        padding: 8px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s;
    }

    .bookmark-btn.bookmarked i {
        color: #000;
    }

    .search-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .search-box {
        width: 100%;
        max-width: 500px;
        display: flex;
        border: 1px solid #7839F3;
        border-radius: 50px;
        overflow: hidden;
        padding: 10px;
    }

    .search-box input {
        flex: 1;
        padding: 10px 20px;
        border: none;
        outline: none;
    }

    .search-box button {
        background-color: #7839F3;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .search-box button:hover {
        background-color: #4d1cab;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .card {
        border: 1px solid #4d1cab;
        border-radius: 8px;
        width: 300px;
        padding: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card img {
        width: 100%;
        border-radius: 5px;
    }

    .card h3 {
        font-size: 16px;
        margin: 16px 0 8px;
    }

    .card p {
        color: #555;
        margin: 0 0 10px;
    }

    .card .actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .card .actions button {
        background-color: transparent;
        color: black;
        border: 1px solid black;
        padding: 8px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s;
    }

    .card .actions .beli {
        background-color: #7839F3;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
</style>
@endsection

@section('main')
<!-- Dashboard -->
<section class="container dashboard">
    <!-- Search -->
    <div class="search-container">
        <form action="{{ route('front.search')}}" class="search-box" method="GET">
            <input type="text" name="query" placeholder="Search for Product ... ">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <!-- End Search -->
    <div class="text-center" style="margin-top: 20px;">
        <span>E-CommerceQ</span>
        <h2>Our Product</h2>
    </div>

    <div class="card-container">
        @foreach($produk as $row)
        <!-- Card -->
        <div class="card">
            <a href="{{ route('front.produk.detail', $row->slug)}}" style="text-decoration: none; color: inherit;">
                <img src="https://i.pinimg.com/474x/37/5a/83/375a83487996d80f5e5e3a820b8dc162.jpg" alt="{{ $row->nama_produk}}">
            </a>
            <h3>{{ $row->nama_produk}}</h3>
            <p>{{$row->merk->merk_produk}}</p>
            <div class="star-rating">
                <input type="radio" id="star5-{{ $row->id }}" name="rating-{{ $row->id }}" value="5" /><label for="star5-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star4-{{ $row->id }}" name="rating-{{ $row->id }}" value="4" /><label for="star4-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star3-{{ $row->id }}" name="rating-{{ $row->id }}" value="3" /><label for="star3-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star2-{{ $row->id }}" name="rating-{{ $row->id }}" value="2" /><label for="star2-{{ $row->id }}"><i class="fa fa-star"></i></label>
                <input type="radio" id="star1-{{ $row->id }}" name="rating-{{ $row->id }}" value="1" /><label for="star1-{{ $row->id }}"><i class="fa fa-star"></i></label>
            </div>
            <div class="actions">
                <button class="beli">Beli Sekarang !</button>
                <button><i class="fa-solid fa-cart-shopping"></i></button>
                <button class="like-btn" data-product-id="{{ $row->id }}"><i class="fa-regular fa-heart"></i></button>
                @auth
                @if(Auth::user()->role == '2')
                <button class="bookmark-btn" data-product-id="{{ $row->id }}">
                    <i class="fa {{ auth()->user()->bookmarks->contains('product_id', $row->id) ? 'fa-solid fa-bookmark' : 'fa-regular fa-bookmark' }}"></i>
                </button>
                @endif
                @endauth
            </div>
        </div>
        <!-- End Card -->
        @endforeach
    </div>
</section>
<!-- End Dashboard -->
@endsection

@section('script')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll('.like-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            const isLiked = this.querySelector('i').classList.contains('fa-solid');

            fetch(isLiked ? '/unlike' : '/like', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId
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
        radio.addEventListener('change', function() {
            const productId = this.name.split('-')[1];
            const rating = this.value;

            fetch('/rate', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId,
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

    document.querySelectorAll('.bookmark-btn').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const isBookmarked = this.querySelector('i').classList.contains('fa-solid');

            fetch('/bookmark', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        product_id: productId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'bookmarked') {
                        this.querySelector('i').classList.remove('fa-regular');
                        this.querySelector('i').classList.add('fa-solid');
                    } else {
                        this.querySelector('i').classList.remove('fa-solid');
                        this.querySelector('i').classList.add('fa-regular');
                    }
                });
        });
    });
</script>
@endsection