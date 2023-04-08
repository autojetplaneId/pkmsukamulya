<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index-2.html">
            <span class="sidebar-brand-text align-middle">
                Abus
                <sup><small class="badge bg-primary text-uppercase">v.0.1</small></sup>
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('adminkit/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-start">
                        <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings &
                            Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>

                    <input type="hidden" value="{{Auth::user()->name }}" id="namaLengkap">

                    <div class="sidebar-user-subtitle">Pegawai</div>
                </div>
            </div>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Puskesmas Sukamulya
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
                </a>
                <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="index-2.html">Pegawai</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="index-2.html">Kader</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="index-2.html">Umum</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="index-2.html">Admin 1</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="index-2.html">Admin 2</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="dashboard-ecommerce.html">Super Admin<span
                                class="sidebar-badge badge bg-primary">Su</span></a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#pegawai" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Kepegawaian</span>
                </a>
                <ul id="pegawai" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Data Pegawai</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Data Absensi</a></li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a data-bs-target="#naskah" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Surat Menyurat</span>
                </a>
                <ul id="naskah" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Surat Masuk</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Surat Keluar
                        <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#dokumen" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Doc Ext</span>
                </a>
                <ul id="dokumen" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Download</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Input
                        <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#aset" data-bs-toggle="collapse" class="sidebar-link">
                    <i class="align-middle" data-feather="box"></i> <span class="align-middle">Aset</span>
                </a>
                <ul id="aset" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Download</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="pages-projects.html">Input
                        <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#mitra" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="link-2"></i> <span class="align-middle">Mitra</span>
                </a>
                <ul id="mitra" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-1" data-bs-toggle="collapse" class="sidebar-link collapsed">Nakes</a>
                        <ul id="multi-1" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">DPM</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">BPM</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">PPM</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed">Naskah</a>
                        <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#mitra1" data-bs-toggle="collapse" class="sidebar-link collapsed">Mitra</a>
                        <ul id="mitra1" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-3-1" data-bs-toggle="collapse" class="sidebar-link collapsed">Item 1</a>
                                <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Pengaturan</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-1" data-bs-toggle="collapse" class="sidebar-link collapsed">Users</a>
                        <ul id="multi-1" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed">Naskah</a>
                        <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-3" data-bs-toggle="collapse" class="sidebar-link collapsed">Absensi</a>
                        <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-3-1" data-bs-toggle="collapse" class="sidebar-link collapsed">Item 1</a>
                                <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>


