<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\PostContent;
use App\Section;

class PostContentController extends Controller
{
    public function index ()
    {
        $data = [];
        $data['postcontents'] = Postcontent::orderBy('title', 'asc')->get();
        return view('backend.postcontent.index', $data);
    }

    public function create ()
    {

        $data['sections'] = Section::orderBy('section_name', 'asc')->get();
        return view('backend.postcontent.create', $data);

    }

    public function store (Request $request)
    {
        try{
            $this->validate($request, [
             'title' => 'required|unique:post_contents',
             'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
             'description' => 'required',
            ]);

        }catch(ValidationException $e)
        {
            $this->setError($e->getMessage());
            return redirect()->back();
        }



        try {

               $post = new PostContent;

               $post->section_id = $request->section_id;
               $post->title = $request->title;

               if($request->hasFile('image')){
                 $imageName = time().'.'.$request->image->getClientOriginalExtension();
                 $request->image->move(public_path('images'), $imageName);
                 $post->image = $imageName;
               }

               $post->video = $request->video;
               $post->description = $request->description;
               $post->save();

               $this->setSuccess('Post created successfully');

               return redirect()->back();

           } catch (\Exception $e) {

               $this->setError($e->getMessage());
               return redirect()->back();
           }
        }

           public function active (Request $request, $id)
           {
              $post_id = PostContent::findOrFail($id);

              $post_id->active = 1;
              $post_id->save();

              $this->setSuccess('Post active successfully');
              return redirect()->back();
           }


}
