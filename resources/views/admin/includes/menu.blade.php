<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#blogCategory" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blog Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="blogCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('add-category') }}">Add Category</a>
                        <a class="nav-link" href="{{ route('manage-category') }}">Manage Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#blog" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blog
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="blog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('add-blog') }}">Add Blog</a>
                        <a class="nav-link" href="{{ route('manage-blog') }}">Manage Blog</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#serviceCategory" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Service Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="serviceCategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('add-service-category') }}">Add Service Category</a>
                        <a class="nav-link" href="{{ route('manage-service-category') }}">Manage Service Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#service" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Service
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="service" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('add-service') }}">Add Service</a>
                        <a class="nav-link" href="{{ route('manage-service') }}">Manage Service</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Md. Rejwan Mahmud
        </div>
    </nav>
</div>
