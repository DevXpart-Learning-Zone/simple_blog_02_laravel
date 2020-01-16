<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::with(['category'])->orderBy('id', 'desc')->paginate(9);
        //return $data['blogs'];

        return view('web.index')->with($data);
    }

    public function profile()
    {
        $data = [
            'profile' => Auth::user()
        ];
        // return $data['profile'];
        return view('web.profile')->with($data);
    }
}
