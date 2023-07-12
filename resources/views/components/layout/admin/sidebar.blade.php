<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="dashboard/crm-index.html" class="logo">
            <span>
                <img src="{{url('public')}}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{url('public')}}/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                <img src="{{url('public')}}/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">

            <x-layout.sidebar.menu-item url="admin/" label="Dashboard" icon="fa fa-home" />
            <x-layout.sidebar.menu-item url="admin/user" label="Admin" icon="fa fa-user" />
            <x-layout.sidebar.menu-item url="admin/mahasiswa" label="Mahasiswa" icon="fas fa-user-graduate" />
            <x-layout.sidebar.menu-item url="admin/nilai" label="Nilai" icon="fa fa-book" />
        </ul>


    </div>
</div>
