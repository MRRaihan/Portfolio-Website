<nav class="navbar navbar-expand-lg navbar-light py-4">
    <!-- logo -->
    <h1>
        <a class="navbar-brand" href="{{route('home')}}">
            Personal <span>Website</span>
        </a>
    </h1>
    <!-- //logo -->
    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- main nav -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto text-center">
            <li class="nav-item active mr-lg-4">
                <a class="nav-link" href="{{route('home')}}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item mr-lg-4">
                <a class="nav-link scroll" href="#about">about</a>
            </li>
            <li class="nav-item mr-lg-4">
                <a class="nav-link scroll" href="#services">Services</a>
            </li>
            <li class="nav-item mr-lg-4">
                <a class="nav-link scroll" href="#experience">Experience</a>
            </li>
            <li class="dropdown nav-item mr-lg-4">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle ">
                    Pages
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li class="nav-item">
                        <a href="#blog" class="nav-link scroll">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link scroll">Projects</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item">
                        <a href="#testimonials" class="nav-link scroll">Testimonials</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link scroll" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
    <!-- //main nav -->
</nav>
