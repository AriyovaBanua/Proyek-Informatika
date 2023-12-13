<div class="container">
        <!-- Navbar -->
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link @yield('konfirmasi-navbar')" href="{{ url('/pemesanan/Menunggu Konfirmasi') }}">Butuh Konfirmasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('proses-navbar')" href="{{ url('/pemesanan/Proses') }}">Proses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('dikirim-navbar')" href="{{ url('/pemesanan/Dikirim') }}">Dikirim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('selesai-navbar')" href="{{ url('/pemesanan/Selesai') }}">Selesai</a>
                </li>
            </ul>
        </div>