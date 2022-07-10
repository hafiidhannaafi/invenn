 <!-- ======= Sidebar Admin ======= -->
 @if (auth()->user()->roles_id == '1')
     <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">


             <li class="nav-item {{ request()->is('redirects*') ? 'active' : '' }}">
                 <a class="nav-link collapsed" href="{{ url('redirects') }}">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             {{-- <li class="nav-item @yield('user')">
        <a class="nav-link"   href="{{ url('datauser') }} ">
          <i class="bi bi-person"></i>
          <span>Data User</span>
        </a>
      </li> --}}

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#formss-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-person"></i><span>Data User</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="formss-nav" class="nav-content collapse @yield('formss-nav')" data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="@yield('datauser')" href="{{ url('data-user') }} ">
                             <i class="bi bi-circle"></i><span>Staff Peminjam</span>
                         </a>
                     </li>
                     <li>
                         <a class="@yield('dataadmin')" href="{{ url('data-admin') }}">
                             <i class="bi bi-circle"></i><span>Admin</span>
                         </a>
                     </li>
                     <li>
                         <a class="@yield('datakepala')" href="{{ url('data-kepala') }}">
                             <i class="bi bi-circle"></i><span>Kepala Unit</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Forms Nav -->

             <li class="nav-item @yield('components-nav')">
                 <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse">
                     <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="components-nav" class="nav-content collapse @yield('components-nav')" data-bs-parent="#sidebar-nav">

                     <li>
                         <a class=" @yield('jenisaset')" href="{{ url('/datajenisaset') }}">
                             <i class="bi bi-circle"></i><span>Data Jenis Aset</span>
                         </a>
                     </li>

                     <li>
                         <a class=" @yield('asalperolehan')" href="{{ url('dataasalperolehan') }}">
                             <i class="bi bi-circle"></i><span>Data Asal Perolehan</span>
                         </a>
                     </li>

                     <li>
                         <a class=" @yield('datasatuan')" href="{{ url('/datasatuan') }}">
                             <i class="bi bi-circle"></i><span>Data Satuan</span>
                         </a>
                     </li>

                     <li>
                         <a class=" @yield('jenisbarang')" href="{{ url('/jenisbarang') }}">
                             <i class="bi bi-circle"></i><span>Data Jenis Barang</span>
                         </a>
                     </li>

                     {{-- <li>
            <a  href="/statuspeminjaman">
              <i class="bi bi-circle"></i><span>Status Peminjaman</span>
            </a>
          </li>

          <li>
            <a  href="/kondisi">
              <i class="bi bi-circle"></i><span>Kondisi Barang</span>
            </a>
          </li> --}}

                     {{-- <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li> --}}
                     {{-- <li>
        </ul>
      </li><!-- End Components Nav --> --}}


                 </ul>
             </li><!-- End Forms Nav -->

             {{-- <li class="nav-item ">
        <a class="nav-link collapsed" href="{{ url('/data-aset') }}">
          <i class="bi bi-journal-text"></i>
          <span>Data Aset</span>
        </a>
      </li> --}}

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-journal-text"></i><span>Data Jenis Aset</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="forms-nav" class="nav-content collapse  @yield('forms-nav')" data-bs-parent="#sidebar-nav">

                     <li>
                         <a class=" @yield('asetbergerak')" href="{{ url('/data-asetbergerak') }}">
                             <i class="bi bi-circle"></i><span>Data Aset Bergerak</span>
                         </a>
                     </li>

                     <li>
                         <a class=" @yield('asettidakbergerak')" href="{{ url('/data-aset') }}">
                             <i class="bi bi-circle"></i><span>Data Tidak Bergerak</span>
                         </a>
                     </li>

                     <li>
                         <a class=" @yield('peralatan')" href="{{ url('/data-peralatan') }} ">
                             <i class="bi bi-circle"></i><span>Data Peralatan</span>
                         </a>
                     </li>
                     <li>
                         <a class=" @yield('perlengkapan')" href="{{ url('/data-perlengkapan') }} ">
                             <i class="bi bi-circle"></i><span>Data Perlengkapan</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Forms Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                     href="@yield('charts-nav')">
                     <i class="bi bi-bar-chart @yield('charts-nav')"></i><span>Pencatatan</span><i
                         class="bi bi-chevron-down ms-auto @yield('charts-nav')"></i>
                 </a>
                 <ul id="charts-nav" class="nav-content collapse  @yield('charts-nav')" data-bs-parent="#sidebar-nav">

                     <li>
                         <a class="@yield('barangmasuk')" href="{{ url('/barang-masuk') }}">
                             <i class="bi bi-circle"></i><span>Stok Masuk</span>
                         </a>
                     </li>

                     <li>
                         <a class="@yield('barangkeluar')" href="{{ url('/barang-keluar') }}">
                             <i class="bi bi-circle"></i><span>Stok/Barang Keluar</span>
                         </a>
                     </li>


                     {{-- <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li> --}}
                 </ul>
             </li><!-- End Charts Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#iconss-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-cart" @yield('iconss-nav')></i><span>Data Transaksi</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="iconss-nav" class="nav-content collapse" @yield('iconss-nav') data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="@yield('riwayat')" href="{{ url('/peminjaman/peminjaman') }}">
                             <i class="bi bi-circle"></i><span>Data Peminjaman</span>
                         </a>
                     </li>

                     {{-- <li>
            <a  href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Data Perpanjangan</span>
            </a>
          </li> --}}

                     {{-- <li>
            <a  href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Data Perpanjangan</span>
            </a>
          </li> --}}

                 </ul>
             </li><!-- End Icons Nav -->

             <li class="nav-item {{ request()->is('redirects*') ? 'active' : '' }}">
                 <a class="nav-link collapsed" href="{{ url('/laporan') }}">
                     <i class="bi bi-layout-text-window-reverse"></i>
                     <span>Laporan</span>
                 </a>
             </li>

             {{-- <li class="nav-item"  href="{{ url('/laporan/asetbergerak') }}">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" >
          <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav"> --}}
             {{-- <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span> Data peminjam</span>
            </a>
          </li>

          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span> Data kepala unit</span>
            </a>
          </li> --}}

             {{-- <li>
            <a href="{{ url('/laporan/barangkeluar') }}">
              <i class="bi bi-circle"></i><span> Barang Keluar</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/laporan/barangmasuk') }}">
              <i class="bi bi-circle"></i><span> Barang Masuk</span>
            </a>
          </li>

          <li>
            <a href="{{ url('/laporan/asetbergerak') }}">
              <i class="bi bi-circle"></i><span> Data aset bergerak</span>
            </a>
          </li> --}}

             {{-- <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span> Data aset tidak bergerak</span>
            </a>
          </li>

          <li>
            <a  href="tables-data.html">
              <i class="bi bi-circle"></i><span> Data aset peralatan</span>
            </a>
          </li>

          <li>
            <a  href="tables-data.html">
              <i class="bi bi-circle"></i><span> Data aset perlengkapan</span>
            </a>
          </li> --}}

             {{-- </ul>
      </li> --}}


         </ul>

     </aside><!-- End Sidebar Admin-->
 @endif


 <!-- ======= Sidebar Kepala Unit ======= -->
 @if (auth()->user()->roles_id == '2')
     <aside id="sidebar" class="sidebar">

         <ul class="sidebar-nav" id="sidebar-nav">

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('redirects') }}">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('/peminjaman/riwayat') }}">
                     <i class="bi bi-menu-button-wide"></i>
                     <span>Data Pengajuan</span>
                 </a>
             </li>


             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-journal-text"></i><span>Data Aset</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="active" href="/aset/bergerak">
                             <i class="bi bi-circle"></i><span>Data Aset Bergerak</span>
                         </a>
                     </li>
                     <li>
                         <a class="active" href="/aset/tidakbergerak">
                             <i class="bi bi-circle"></i><span>Data Aset Tidak Bergerak</span>
                         </a>
                     </li>
                     <li>
                         <a class="active" href="/aset/peralatan">
                             <i class="bi bi-circle"></i><span>Data Peralatan</span>
                         </a>
                     </li>
                     <li>
                         <a class="active" href="/aset/perlengkapan">
                             <i class="bi bi-circle"></i><span>Data Perlengkapan</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Forms Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                     href="#">
                     <i class="bi bi-bar-chart"></i><span>Pencatatan</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="active" href="/pencatatan/barangmasuk">
                             <i class="bi bi-circle"></i><span>Stok Masuk</span>
                         </a>
                     </li>
                     <li>
                         <a class="active" href="/pencatatan/barangkeluar">
                             <i class="bi bi-circle"></i><span>Stok/ Barang Keluar</span>
                         </a>
                     </li>



                 </ul>
             </li><!-- End Charts Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                     href="#">
                     <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                     {{-- <li>
            <a class="active" href="tables-general.html">
              <i class="bi bi-circle"></i><span> Data Aset</span>
            </a>
          </li>

          <li>
            <a class="active" href="tables-general.html">
              <i class="bi bi-circle"></i><span> Barang Masuk</span>
            </a>
          </li>

          <li>
            <a class="active" href="tables-general.html">
              <i class="bi bi-circle"></i><span> Barang Rusak</span>
            </a>
          </li>

          <li>
            <a class="active" href="tables-general.html">
              <i class="bi bi-circle"></i><span> Barang Hilang</span>
            </a>
          </li>

          <li>
            <a  href="tables-data.html">
              <i class="bi bi-circle"></i><span> Peminjaman</span>
            </a>
          </li> --}}

                 </ul>
             </li>


         </ul>

     </aside><!-- End Sidebar Kepala unit-->
 @endif

 <!-- ======= Sidebar Peminjam ======= -->
 @if (auth()->user()->roles_id == '3')
     <aside id="sidebar" class="sidebar">

         <ul class="sidebar-nav" id="sidebar-nav">

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('redirects') }}">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
    
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a class="active" href="/datajenisaset">
              <i class="bi bi-circle"></i><span>Data Jenis Aset</span>
            </a>
          </li>

          <li>
            <a class="active" href="/dataasalperolehan">
              <i class="bi bi-circle"></i><span>Data Asal Perolehan</span>
            </a>
          </li>

          <li>
            <a class="active" href="/statuspeminjaman">
              <i class="bi bi-circle"></i><span>Status Peminjaman</span>
            </a>
          </li>

          <li>
            <a class="active" href="/kondisi">
              <i class="bi bi-circle"></i><span>Kondisi Barang</span>
            </a>
          </li> --}}

             {{-- <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li> --}}
             {{-- <li>
        </ul>
      </li><!-- End Components Nav --> --}}


             {{-- </ul>
      </li><!-- End Forms Nav --> --}}




             <!-- End Forms Nav -->

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('/cekdata') }}">
                     <i class="bi bi-journal-text"></i>
                     <span>Cek Data Barang</span>
                 </a>
             </li>


             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('/peminjaman/form') }}">
                     <i class="bi bi-journal-text"></i>
                     <span>Formulir Peminjaman</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('/staff/peminjaman') }}">
                     <i class="bi bi-cart"></i>
                     <span>Proses Peminjaman</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="{{ url('/staff/riwayat') }} ">
                     <i class="bi bi-cart-check-fill"></i>
                     <span>Riwayat Peminjaman</span>
                 </a>
             </li>





         </ul>

     </aside><!-- End Sidebar peminjam-->
 @endif
