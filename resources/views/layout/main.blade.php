<!doctype html>
<html lang="ja">

@include('common.head')

<body id="page-top" class="sidebar-toggled">
    <div id="wrapper">
        @include('common.sidebar')

        <script>
            function sidebarToggle() {
                if (document.getElementById('accordionSidebar').classList.contains('toggled')) {
                    document.cookie = 'MypageSidebarToggle=;path={{env('
                    APP_URL ')}}';
                } else {
                    document.cookie = 'MypageSidebarToggle=toggled;path={{env('
                    APP_URL ')}}';
                }
            }
            for (var c of document.cookie.split(";")) {
                var cArray = c.split('=');
                if (cArray[0] == 'MypageSidebarToggle') {
                    if (cArray[1] == 'toggled') {
                        document.getElementById('accordionSidebar').classList.add('toggled');
                    } else {
                        document.getElementById('accordionSidebar').classList.remove('toggled');
                    }
                }
            }
        </script>

        <!-- content wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- main content -->
            <div id="content">
                @include('common.header')
                @yield('content')
            </div>

            @include('common.footer')

        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('common.script')

</body>

</html>
