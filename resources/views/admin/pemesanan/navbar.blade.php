<div class="container">
        <!-- Navbar -->
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link @yield('konfirmasi-navbar')" href="{{ url('admin/pemesanan') }}">Butuh Konfirmasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('proses-navbar')" href="{{ url('admin/pemesanan/Proses') }}">Proses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('dikirim-navbar')" href="{{ url('admin/pemesanan/Dikirim') }}">Dikirim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('selesai-navbar')" href="{{ url('admin/pemesanan/Selesai') }}">Selesai</a>
                </li>
            </ul>
        </div>