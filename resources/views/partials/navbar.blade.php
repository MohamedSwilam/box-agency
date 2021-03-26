<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('home')}}">
                <img src="/images/logo/x-connect-logo-dark.png" class="l-dark" height="45" alt="">
                <img src="/images/logo/x-connect-logo-white.png" class="l-light" height="45" alt="">
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

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Services</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu"><a href="{{route('enterprise')}}"> Enterprise Services </a></li>
                        <li class="has-submenu"><a href="{{route('cloud')}}"> Cloud Solutions </a></li>
                        <li class="has-submenu"><a href="{{route('security')}}"> Security Solutions </a></li>
                        <li class="has-submenu"><a href="{{route('voip')}}"> VOIP Solutions </a></li>
                        <li class="has-submenu"><a href="{{route('cam')}}"> Cam Surveillance </a></li>
                        <li class="has-submenu"><a href="{{route('it')}}"> IT Infrastructure </a></li>
                        <li class="has-submenu"><a href="{{route('outsource')}}"> Outsource Services </a></li>
                    </ul>
                </li>
                <li><a href="{{route('about-us')}}">About Us</a></li>
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
