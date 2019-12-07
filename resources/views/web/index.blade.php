@extends('layout.web.web') @section('title','Blog Homepage') @section('content')
<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" src="{{ asset('asset/web/img/avataaars.svg') }}" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Blog Homepage</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">We are learning Blog</p>

    </div>
</header>
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row">

            @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <h2>{{ $blog->blog_title }}</h2>
                <p>{{ substr($blog->blog_description,0,50) }}</p>
                <div class=" mx-auto">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <a href=""> <img class="img-fluid" src="{{ asset('storage/uploads/blog/'.$blog->image) }}"
                            alt=""></a>
                </div>
            </div>

            @endforeach


        </div>
        <!-- /.row -->

    </div>
</section>

@include('web.lib.about') @include('web.lib.contact') @endsection