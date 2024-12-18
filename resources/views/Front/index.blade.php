<?php
$kategori = \App\Models\Categori::all();
$merk = \App\Models\MerkProduk::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
    <link rel="shortcut icon" href="https://i.pinimg.com/736x/bd/65/6d/bd656d3e5554e4580ab7cad78c2ae6d9.jpg"
        type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custome MyCss -->
    <link rel="stylesheet" href="{{ asset('landing/mycss/style.css') }}">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    .dropdown-menu {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    #cart-items li {
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 10px;
    }

    #cart-items li:last-child {
        border-bottom: none
    }

    .btn-outline-secondary {
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-block {
        padding: 10px 0;
    }

</style>

<body>

    <!-- Navbar -->
    <section class="navbar-laracamp">
        <nav class="navbar navbar-expand-lg shadow-sm">

            <div class="container container-navbar">

                <a class="navbar-brand" href="/">
                    <img src="{{ asset('landing/images/logo.png') }}" alt="Brand Laracamp">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link active" style="font-weight: 600" data-bs-toggle="dropdown" role="button"
                                aria-current="page" href="#">
                                Kategori
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($kategori as $row)
                                <li>
                                    <a href="{{ route('front.produk.cate', $row->slug)}}" class="dropdown-item">{{$row->categori}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" data-bs-toggle="dropdown" role="button" aria-current="page" href="#">
                                Merk
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($merk as $row)
                                <li>
                                    <a href="{{ route('front.produk.merk', $row->slug)}}"
                                        class="dropdown-item">{{$row->merk_produk}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.produk')}}">Produk</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Business</a>
                        </li>

                    </ul>

                    @guest
                    <!-- Sebelum Login -->
                    <div class="d-flex">
                        <div class="dropdown" style="margin-right: 25px">
                            <a href="" class="btn btn-cart" id="cartDropdown" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="background-color: transparent; color: black; cursor: pointer; display: flex; justify-content: center; align-items: center; position: relative;">
                                <i class="fa-solid fa-cart-shopping" style="font-size: 20px; color: #818380"></i>
                                <span class="cart-count"
                                    style="position: absolute; top: -3px; right: -2px; background-color: #7839f3; color: white; border-radius: 50%; width:18px; height: 18px; display: flex; align-items: center; justify-content: center; font-size: 13px ">2</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cartDropdown"
                                style="width: 400px;padding: 10px;">
                                <h6 class="dropdown-header text-center">Your cart</h6>
                                <div class="card-items">
                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <img src="https://cdn-image.hipwee.com/wp-content/uploads/2018/05/hipwee-c81e728d9d4c2f636f067f89cc14862c-130.jpg"
                                                alt=""
                                                style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px; ">
                                            <div class="ms-2">
                                                <h6 class="mb-0">product 1</h6>
                                                <p class="mb-0">Rp 1000</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn btn-sm btn-outline-secondary update-qty me-1"
                                                data-action="minus">-</button>
                                            <span class="mx-2" id="quantity">0</span>
                                            <button class="btn btn-sm btn-outline-secondary update-qty ms-1"
                                                data-action="plus">+</button>
                                        </div>
                                    </li>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="text-center">
                                    <a href="" class="btn btn-primary btn-block" width="100%">View cart</a>
                                </div>
                            </ul>
                        </div>
                        @if (Route::has('login'))
                        <a href="{{ route('login')}}" class="btn btn-sign-in">Sign In</a>
                        @endif
                        @if (Route::has('register'))
                        <a href="{{ route('register')}}" class="btn btn-success">Sign Up</a>
                        @endif
                    </div>
                    @else

                    <!-- Setelah Login -->
                    <div class="welcome-user dropdown">
                        <div role="button" data-bs-toggle="dropdown">
                            <span>Hello, {{ Auth::user()->name}}</span>
                            <img class="img-user rounded-circle"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->username}}">
                        </div>
                        <ul class="dropdown-menu" style="margin-top: 10px">
                            @if (Auth::user()->role == '1')
                            <li>
                                <a href="{{ route('index.home')}}" class="dropdown-item">Dashboard</a>
                            </li>
                            @elseif (Auth::user()->role == '2')
                            <li>
                                <a href="{{ route('index.ecom')}}" class="dropdown-item">My Profile</a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item">
                                    <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                                    <p>
                                        logout
                                    </p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- End Setelah Login -->
                    @endguest
                </div>
            </div>

        </nav>
    </section>
    <!-- End Navbar -->


    @yield('main')

    <script src="{{ asset('landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    @yield('script')

</body>

</html>
