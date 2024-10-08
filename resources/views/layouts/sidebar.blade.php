<div class="sidebar">
    <h2 class="text-center py-3">Dashboard</h2>
    <a href="{{ route('news.index') }}"><i class="fa-solid fa-newspaper"></i> Berita</a>
    <a href="{{ route('galeri.index') }}"><i class="fa-solid fa-users"></i> Galeri</a>
   
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="{{ route('logout') }}" 
    onclick="event.preventDefault(); handleLogout();">
        <i class="fa-solid fa-sign-out-alt"></i> Logout
    </a>
</div>

<script>
    function handleLogout() {
        if (confirm('Apakah anda yakin ingin meninggalkan halaman ini?')) {
            document.getElementById('logout-form').submit();
        }
    }
</script>