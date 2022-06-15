<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">

            <span class="text-primary">BOOK</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link @yield('index')">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link @yield('about')">About</a>
                <a href="{{route('class')}}" class="nav-item nav-link @yield('class')">Classes</a>
                <a href="{{route('teacher')}}" class="nav-item nav-link @yield('teacher')">Teachers</a>
                <a href="{{route('contact')}}" class="nav-item nav-link @yield('contact')">Contact</a>
            </div>
            <a href="{{route('login')}}"  method="POST" class="btn btn-primary px-4">LOG IN</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->
