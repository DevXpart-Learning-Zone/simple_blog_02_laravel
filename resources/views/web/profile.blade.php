@extends('layout.web.web') @section('title','Blog Homepage') @section('content')
<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" src="{{ asset('asset/web/img/avataaars.svg') }}" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Personal Profile</h1>

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
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Profile</h2>
        <ul style="list-style: none;">
            <li>Name: {{ $profile->name }}</li>
            <li>Email: {{ $profile->email }}</li>
        </ul>

    </div>

</section>
@endsection