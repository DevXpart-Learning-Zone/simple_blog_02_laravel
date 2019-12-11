@extends('layout.web.web') @section('title',$blog->blog_title) @section('content')
<section class="page-section" id="contact" style="margin-top: 20px;">
    <div class="container">

        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ $blog->blog_title }}</h2>
        <small class="text-center">Posted on: {{ time_elapsed_string($blog->created_at) }},
            <strong>{{ $blog->category->category_name }}</strong></small>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <img src="{{ asset('uploads/blog/'.$blog->image) }}" class="img  img-fluid" alt="">
                <p>{{ $blog->blog_description }}</p>
            </div>
        </div>

    </div>
</section>

@php function time_elapsed_string($datetime, $full = false) { $now = new DateTime; $ago = new DateTime($datetime); $diff = $now->diff($ago); $diff->w = floor($diff->d / 7); $diff->d -= $diff->w * 7; $string = array( 'y' => 'year', 'm' => 'month', 'w'
=> 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second', ); foreach ($string as $k => &$v) { if ($diff->$k) { $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : ''); } else { unset($string[$k]); } } if (!$full) $string = array_slice($string,
0, 1); return $string ? implode(', ', $string) . ' ago' : 'just now'; } @endphp