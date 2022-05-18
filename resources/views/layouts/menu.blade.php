<li class="nav-item {{ Request::is('mahasiswas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('mahasiswas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Mahasiswa</span>
    </a>
</li>

@role('super-admin')
<li class="nav-item {{ Request::is('writers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('writers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Writers</span>
    </a>
</li>
@endrole
