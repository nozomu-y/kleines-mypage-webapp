<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown no-arrow d-md-none">
            <span class="text-primary">{{__('app_name')}}</span>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 text-gray-600 small"></span>
                <i class="fas fa-user fa-fw"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    プロフィール設定
                </a>
                <a class="dropdown-item" href="">
                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                    パスワード更新
                </a>
                <a class="dropdown-item" href="">
                    <i class="fas fa-history fa-sm fa-fw mr-2 text-gray-400"></i>
                    ログイン履歴
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    ログアウト
                </a>
            </div>
        </li>
    </ul>
</nav>
