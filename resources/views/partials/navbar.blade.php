<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('home')}}">
                <img src="/images/logo/box-agency-logo-black.png" class="l-dark" height="45" alt="">
                <img src="/images/logo/box-agency-logo-white.png" class="l-light" height="45" alt="">
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item ps-1 mb-0">
                <a href="/storage/box Company Profile.pdf" target="_blank" class="btn btn-pills btn-primary btn-sm"><i data-feather="download" class="fea icon-sm mr-1"></i> <span class="p-lg-1">Download Catalog</span></a>
            </li>
        </ul>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about-us')}}">About Us</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('contact-us')}}">Contact Us</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->


    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
<script>
    function toggleMenu() {
        document.getElementById('isToggle').classList.toggle('open');
        var isOpen = document.getElementById('navigation');

        if (isOpen.style.display === "block") {
            isOpen.style.display = "none";
        } else {
            isOpen.style.display = "block";
        }
    } //Menu Active
</script>
