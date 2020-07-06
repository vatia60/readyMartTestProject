<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PostContent;

class PageController extends Controller
{
    public function index()
    {
        $data = [];
        $data['postcontents'] = PostContent::orderBy('id', 'desc')->where('section_id', 1)->paginate(5);
        $data['postcontenttwo'] = PostContent::orderBy('id', 'desc')->where('section_id', 2)->paginate(5);
        return view('frontend.index', $data);
    }

    public function single ($id)
    {
        $data = [];
        $data['postcontent'] = Postcontent::find($id);
        return view('frontend.postcontent.single', $data);
    }
}
