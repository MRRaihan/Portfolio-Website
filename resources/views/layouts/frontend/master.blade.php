<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.frontend._head')
</head>

<body>
<header>
<div class="loader_bg">
    <div class="loader">

    </div>
</div>
</header>
<header>
    <div class="container">
       <!-- nav -->
       @include('layouts.frontend._topNav')
      <!-- //nav -->
    </div>
</header>

<!-- banner -->
<section class="banner">
    @include('layouts.frontend._banner')
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="about">
    @include('layouts.frontend._about')
</section>
<!-- about -->

<!-- services -->
<section class="services py-5" id="services">
    @include('layouts.frontend._services')
</section>
<!-- //services -->

<!-- experience -->
<section class="experience py-5" id="experience">
    @include('layouts.frontend._experience')
</section>
<!-- //experience -->

<!-- blog -->
<section class="blog py-5" id="blog">
    @include('layouts.frontend._blog')
</section>
<!-- //blog -->

<!-- gallery -->
<div class="gallery py-5" id="projects">
    @include('layouts.frontend._projects')
</div>
<!-- //gallery -->

<!-- Testimonials -->
<section class="testimonials py-5" id="testimonials">
    @include('layouts.frontend._testimonials')
</section>
<!-- Testimonials -->

<!-- contact -->
<section class="contact py-5" id="contact">
    @include('layouts.frontend._contact')
</section>
<!-- //contact -->

<!-- footer -->
<footer class="py-5">
    <div class="container">
        @include('layouts.frontend._footer')
    </div>
</footer>
<!-- //footer -->

@include('layouts.frontend._script')

</body>
</html>

