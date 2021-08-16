<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-music"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ __('app_name') }}</div>
    </a>
    <hr class="sidebar-divider my-0">
    <!-- nav item -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-home fa-fw"></i>
            <span>Home</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-users fa-fw"></i>
            <span>アカウント一覧</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-clipboard fa-fw"></i>
            <span>掲示板</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <!-- nav-item -->
    <div class="sidebar-heading">
        会計システム
    </div>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-yen-sign fa-fw"></i>
            <span>集金記録</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-wallet fa-fw"></i>
            <span>個別会計</span>
        </a>
    </li>
    {{--
    <?php
    if ($USER->isManager() || $USER->isAccountant() || $USER->isCamp()) {
        echo '<hr class="sidebar-divider">';
        echo '<div class="sidebar-heading">管理コンソール</div>';
        if ($USER->isManager() || $USER->isAccountant()) {
            echo '<li class="nav-item ' . $account_manage . '"><a class="nav-link" href="' . MYPAGE_ROOT . '/admin/account_manage/"><i class="fas fa-users-cog fa-fw"></i></i><span>アカウント管理</span></a></li>';
        }
        if ($USER->isAccountant()) {
            echo '<li class="nav-item ' . $admin_accounting . '">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccounting" aria-expanded="true" aria-controls="collapseAccounting">
            <i class="fas fa-fw fa-coins"></i>
            <span>会計システム</span>
            </a>';
            echo '<div id="collapseAccounting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="' . MYPAGE_ROOT . '/admin/accounting/">集金リスト</a>
            <a class="collapse-item" href="' . MYPAGE_ROOT . '/admin/individual_accounting/">個別会計</a>
            </div>
            </div>
            </li>';
        }
        if ($USER->isManager() && !$USER->isAccountant()) {
            echo '<li class="nav-item ' . $admin_accounting . '"><a class="nav-link" href="' . MYPAGE_ROOT . '/admin/accounting/"><i class="fas fa-coins fa-fw"></i></i><span>会計システム</span></a></li>';
        }
        echo '<li class="nav-item ' . $admin_camp_accounting . '"><a class="nav-link" href="' . MYPAGE_ROOT . '/admin/camp_accounting/"><i class="fas fa-coins fa-fw"></i></i><span>合宿集金</span></a></li>';
    }
    ?>
    --}}
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-info-circle fa-fw"></i>
            <span>Info</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" onclick="sidebarToggle();" id="sidebarToggle"></button>
    </div>
</ul>
