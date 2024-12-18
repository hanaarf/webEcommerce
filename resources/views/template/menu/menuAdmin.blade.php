<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Data Produk
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('index.categori') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori Produk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index.merk') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Merk Produk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index.produk')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Produk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('produk.image')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Image Produk</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('produk.size')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Produk Size</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('color.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Color
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('provinsi.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Provinsi
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('data.user')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Data User
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="nav-link">
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