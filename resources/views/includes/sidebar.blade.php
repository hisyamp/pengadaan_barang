<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            
            <li class=active><a class="nav-link" href="{{route('inproducts.index')}}"><i class="far fa-square"></i> <span>Transaksi Barang Masuk</span></a></li>
            <li class=active><a class="nav-link" href="{{route('outproducts.index')}}"><i class="far fa-square"></i> <span>Transaksi Barang Keluar</span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Barang</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('products.index')}}">Data Barang</a></li>
                <li><a class="nav-link" href="{{route('kinds.index')}}">Jenis</a></li>
                <li><a class="nav-link" href="{{route('units.index')}}">Satuan</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="{{route('suppliers.index')}}"><i class="fas fa-pencil-ruler"></i> <span>Supplier</span></a></li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-forgot-password.html">Forgot Password</a></li> 
                <li><a href="auth-login.html">Login</a></li> 
                <li><a href="auth-register.html">Register</a></li> 
                <li><a href="auth-reset-password.html">Reset Password</a></li> 
              </ul>
            </li>
             <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>
