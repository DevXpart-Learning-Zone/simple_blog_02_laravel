<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
use Session;
use Illuminate\Support\Str;
use Image;

class BlogController extends Controller
{

    public function index()
    {
        $data['blogs'] =  Blog::with('category')->get();

        return view('web.blog_list')->with($data);
    }


    public function create()
    {
        $data['categories'] =  Category::orderBy('category_name')->get();

        return view('web.add_blog')->with($data);
    }

    public function store(Request $request)
    {
        $blogData = $this->validateRequest();
        $blogData['slug'] = Str::slug($request->blog_title);
        if ($request->hasFile('image')) {

            $blogData['image'] = $this->uploadImage($request->file('image'));
        }
        if (Blog::create($blogData)) {
            Session::flash('response', array('type' => 'success', 'message' => 'New Blog Added successfully!'));
        } else {
            Session::flash('response', array('type' => 'error', 'message' => 'Something Went wrong!'));
        }

        //dd($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    private function uploadImage($image)
    {
        $timestemp = time();
        $imageName = $timestemp . '.' . $image->getClientOriginalExtension();

        $path = public_path('storage/uploads/blog/') . 'image_' . $imageName;
        Image::make($image)->save($path);
        return 'image_' . $imageName;
    }

    private function validateRequest()
    {
        return request()->validate([
            'blog_title'    => 'required',
            'category_id'   => 'required',
            'blog_description' => 'required',
            'image' => 'sometimes|image|max:5000',
        ]);
    }
}