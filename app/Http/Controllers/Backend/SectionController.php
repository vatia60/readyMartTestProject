<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    public function index ()
    {
        $data = [];
        $data['sections'] = Section::orderBy('section_name', 'asc')->get();
        return view('backend.sections.index', $data);
    }
    public function create ()
    {

        return view('backend.sections.create');
    }

    public function store (Request $request)
    {
        try{
            $this->validate($request, [
             'section_name' => 'required|unique:sections'
            ]);

        }catch(ValidationException $e)
        {
            $this->setError($e->getMessage());
            return redirect()->back();
        }

        try {

               $section = new Section;

               $section->section_name = $request->section_name;
               $section->slug = Str::slug($request->section_name);
               $section->save();

               $this->setSuccess('Section created successfully');

               return redirect()->back();

           } catch (\Exception $e) {

               $this->setError($e->getMessage());
               return redirect()->back();
           }
    }
}
