@extends('layout.web.web') @section('title','Blog List') @section('content')
<!-- Contact Section -->
<section class="page-section" id="contact" style="margin-top: 20px;">
    <div class="container">

        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Blog List</h2>

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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Blog Title</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Decription</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $key=> $blog)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->category->category_name }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td>
                                {{ substr($blog->blog_description ,0,20) }}
                            </td>
                            <td>
                                <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-primary">
                                    Edit
                                </a>
                                <a href class="btn btn-warning">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
@endsection