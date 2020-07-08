<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PostContent;
use App\Section;

class PageController extends Controller
{
    public function index()
    {
        $data = [];
        $data['sections'] = Section::with(['contents'])->get();
        //return $data['sections'];

        return view('frontend.index', $data);
    }

    public function single ($id)
    {
        $data = [];
        $data['postcontent'] = Postcontent::find($id);
        return view('frontend.postcontent.single', $data);
    }
}
