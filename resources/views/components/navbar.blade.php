<div>
    {{-- Sidebar Start --}}
    <aside class="sidebar">
        <button type="button" class="sidebar-close-btn">
            <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
        </button>
        <div>
            <a href="{{ route('dashboard') }}" class="sidebar-logo">
                <img src="assets/images/logo.png" alt="site logo" class="light-logo">
                <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
                <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li class="sidebar-menu-group-title">Application</li>
                <li>
                    <a href="/dashboard">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/riwayat">
                        <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                        <span>Riwayat</span>
                    </a>
                </li>

                <li class="sidebar-menu-group-title">Data Master</li>

                <li>
                    <a href="/user">
                        <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                        <span>User</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>
    {{-- Sidebar End --}}
</div>
