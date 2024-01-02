<!-- Side Bar -->
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="">Admin Kampus</a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class="sidebar-item active ">
                    <a href="{{ url('dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('pass.index')}}" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Ubah Password</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('dosen.index')}}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data Dosen</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('mahasiswa.index')}}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Data Mahasiswa</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('matkul.index')}}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Daftar Mata Kuliah</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    @auth
                    <form action="{{ route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                    @endauth
                </li>

            </ul>
        </div>
    </div>
</div>