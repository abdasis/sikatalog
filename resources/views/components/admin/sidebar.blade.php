<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <div class="left-side-menu shadow-xs">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <x-admin.box-user/>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">
                    <li>
                        <a href="apps-calendar.html">
                            <i data-feather="airplay"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="#menuArtikel" data-bs-toggle="collapse">
                            <i class="fas fa-pencil-alt"></i>
                            <span> Artikel </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="menuArtikel">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Tambah Artikel</a>
                                </li>
                                <li>
                                    <a href="#">Semua Artikel</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuKategori" data-bs-toggle="collapse">
                            <i class="fas fa-tags"></i>
                            <span> Kategori </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="menuKategori">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('kategori.tambah')}}">Tambah Kategori</a>
                                </li>
                                <li>
                                    <a href="{{route('kategori.semua')}}">Semua Kategori</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuSlider" data-bs-toggle="collapse">
                            <i class="fas fa-photo-video"></i>
                            <span> Slider </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="menuSlider">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Tambah Slider</a>
                                </li>
                                <li>
                                    <a href="#">Semua Slider</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuHalaman" data-bs-toggle="collapse">
                            <i class="fas fa-file-alt"></i>
                            <span> Halaman </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="menuHalaman">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Tambah Halaman</a>
                                </li>
                                <li>
                                    <a href="#">Semua Halaman</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuProduk" data-bs-toggle="collapse">
                            <i class="fas fa-box"></i>
                            <span> Produk </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="menuProduk">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Tambah Produk</a>
                                </li>
                                <li>
                                    <a href="#">Semua Produk</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuProject" data-bs-toggle="collapse">
                            <i class="fas fa-rocket"></i>
                            <span> Project </span>
                            <span class="menu-arrow"></span>

                        </a>
                        <div class="collapse" id="menuProject">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Tambah Produk</a>
                                </li>
                                <li>
                                    <a href="#">Semua Produk</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuPengguna" data-bs-toggle="collapse">
                            <i class="fas fa-users"></i>
                            <span> Pengguna </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuPengguna">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Tambah Pengguna</a>
                                </li>
                                <li>
                                    <a href="#">Semua Pengguna</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#menuPengaturan" data-bs-toggle="collapse">
                            <i class="fas fa-cogs"></i>
                            <span> Pengaturan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuPengaturan">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">SEO</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>

</div>
